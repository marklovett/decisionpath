<?php

function impact_time()
{
	$time = gmdate( 'Y-m-d H:i:s', ( time() + ( get_option( 'gmt_offset' ) * 3600 ) ) );
	return strtotime($time);
}

function impact_export( $template_id, $include_images = 'no' )
{
	global $wpdb;
	require_once(ABSPATH . 'wp-admin/includes/class-pclzip.php');
	
	$impact_templates = $wpdb->prefix . 'impact_templates';
	$impact_widgets = $wpdb->prefix . 'impact_widgets';
	$impact_hooks = $wpdb->prefix . 'impact_hooks';
	
	$impact_tables = array(
		'impact_templates' => $impact_templates,
		'impact_widgets' => $impact_widgets,
		'impact_hooks' => $impact_hooks,
	);
	
	$export_data = array();
	
	foreach( $impact_tables as $key => $value )
	{
		$export_data[$key] = $wpdb->get_results("SELECT * FROM $value WHERE `template_id` = '$template_id'", ARRAY_A);
	}

	$template_name = str_replace( ' ', '_', $template_id );
	$impact_export_dat = $template_name . '.dat';
	$impact_export_zip = $template_name . '.zip';
	$tmp_path = IMPACT_UPLOADS . '/export_tmp/';
	
	$cheerios = serialize( $export_data );
	
	if( $include_images == 'no' )
	{
		header( "Content-type: text/plain" );
		header( "Content-disposition: attachment; filename=$impact_export_dat" );
		header( "Content-Transfer-Encoding: binary" );
		header( "Pragma: no-cache" );
		header( "Expires: 0" );
		echo $cheerios; 
		exit();
	}
	else
	{
		if( !is_dir( $tmp_path ) )
		{
			@mkdir( $tmp_path, 0755, true );
		}
	
		$dat_file = fopen( $tmp_path . $impact_export_dat, 'x' );
		fwrite( $dat_file, $cheerios );
		fclose ( $dat_file );
		
		$dat_filename = $tmp_path . $impact_export_dat;
		$image_folder = IMPACT_UPLOADS . '/' . $template_id;
		if( is_dir( $image_folder ) )
		{
			$tmp_image_folder = $tmp_path . $template_id;
			impact_copy_dir( $image_folder, $tmp_image_folder );
			$export_files = array( $dat_filename, $tmp_image_folder );
		}
		else
		{
			$export_files = $dat_filename;
		}
		
		$impact_pclzip = new PclZip( $tmp_path . $impact_export_zip );
		$impact_zipped = $impact_pclzip->create( $export_files, PCLZIP_OPT_REMOVE_PATH, $tmp_path );
		if ( $impact_zipped == 0 )
		{
			die("Error : ".$impact_pclzip->errorInfo(true));
		}
		
		header("Cache-Control: public, must-revalidate");
		header("Pragma: hack");
		header("Content-Type: application/zip");
		header("Content-Disposition: attachment; filename=$impact_export_zip");
		readfile( $tmp_path . $impact_export_zip );
		impact_delete_dir( $tmp_path );
		exit();
	}
}

function impact_import( $import_file )
{
	global $wpdb;
	require_once(ABSPATH . 'wp-admin/includes/class-pclzip.php');
	
	if( 'zip' == strtolower( substr( strrchr( $import_file['name'], '.' ), 1 ) ) )
	{
		$import_tmp_name = $import_file['tmp_name'];
		$zip_file = new PclZip($import_tmp_name);

		$tmp_path = IMPACT_UPLOADS . '/import_tmp/';
		if( !is_dir( $tmp_path ) )
		{
			@mkdir( $tmp_path, 0755, true );
		}
		
		if ( ($unzip_result_list = $zip_file->extract(PCLZIP_OPT_PATH, $tmp_path) ) == 0 )
		{
			die("Error : " . $zip_file->errorInfo( true ) );
		}		
		
		$handle = opendir($tmp_path);
		while (false !== ($file = readdir($handle)))
		{
			if( is_dir( $tmp_path . $file ) && $file != '.' && $file != '..' )
			{
				impact_copy_dir( $tmp_path . $file, IMPACT_UPLOADS . '/' . $file );
			}
			elseif( 'dat' == strtolower( substr( strrchr( $file, '.' ), 1 ) ) )
			{
				$import_data = file_get_contents( $tmp_path . $file );
				$impact_import = unserialize( $import_data );
				
				foreach( $impact_import as $table => $rows )
				{
					$tablename = $wpdb->prefix . $table;
					
					foreach( $rows as $row => $columns )
					{
						$wpdb->insert( $tablename, $columns );
					}
				}
			}
		}
		impact_delete_dir( $tmp_path );
	}	
	elseif( 'dat' == strtolower( substr( strrchr( $import_file['name'], '.' ), 1 ) ) )
	{
		$import_data = file_get_contents( $import_file['tmp_name'] );
		$impact_import = unserialize( $import_data );
		
		foreach( $impact_import as $table => $rows )
		{
			$tablename = $wpdb->prefix . $table;
			
			foreach( $rows as $row => $columns )
			{
				$wpdb->insert( $tablename, $columns );
			}
		}
	}	
}

function impact_delete_dir($dir)
{
	$handle = opendir($dir);
	while(false !== ($file = readdir($handle)))
	{
		if(is_dir($dir.'/'.$file))
		{
			if(($file != '.') && ($file != '..'))
			{
				impact_delete_dir($dir.'/'.$file);
			}
		}
		else
		{
			unlink($dir.'/'.$file);
		}
	}
	closedir($handle);
	rmdir($dir);
}

function impact_copy_dir( $source, $destination )
{
	if ( is_dir( $source ) )
	{
		@mkdir( $destination );
		$directory = dir( $source );
		while ( FALSE !== ( $readdirectory = $directory->read() ) )
		{
			if ( $readdirectory == '.' || $readdirectory == '..' )
			{
				continue;
			}
			$PathDir = $source . '/' . $readdirectory; 
			if ( is_dir( $PathDir ) )
			{
				impact_copy_dir( $PathDir, $destination . '/' . $readdirectory );
				continue;
			}
			copy( $PathDir, $destination . '/' . $readdirectory );
		}
 
		$directory->close();
	}
	else
	{
		copy( $source, $destination );
	}
}

add_action('init', 'impact_export_check');
function impact_export_check()
{
	if( !empty($_POST['action']) && $_POST['action'] == 'impact_export' )
	{
		if( !empty($_POST['export_images']) )
		{
			impact_export( $_POST['template_export_list'], 'yes' );
		}
		else
		{
			impact_export( $_POST['template_export_list'], 'no' );
		}
	}
}

add_action('init', 'impact_import_check');
function impact_import_check()
{
	if( !empty($_POST['action']) && $_POST['action'] == 'impact_import' )
	{
		impact_import( $_FILES['template_import'] );
	}
}