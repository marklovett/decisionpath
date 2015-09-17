<?php
function impact_nuts_bolts_admin()
{
global $impact_root;
?>
	<div class="impact-admin-pagewrap">

		<?php		
		if( !empty($_POST['action']) && $_POST['action'] == 'impact_import' )
		{
?>			<div id="impact-imported" class="impact-update" style="position:absolute;margin-top:10px;">	
				<p>
					<?php _e('Template has been Imported', 'impact'); ?>
				</p>
			</div>
<?php	}
		?>
		<div class="impact-admin-title">
		
			<img src="<?php echo plugins_url( $impact_root . '/images/impact_admin_logo.png' ) ?>" style="margin:15px 0;"> <p style="float:right;margin:24px 21px 0px 0px;"><strong><a href="http://impactpagebuilder.com">ImpactPageBuilder.com</a> | <a href="http://impactpagebuilder.com/resources">Impact Resources</a> | <a href="http://impactpagebuilder.com/forum">Impact Forum</a> | <a href="http://impactpagebuilder.com/affiliates">Impact Affiliates</a></strong></p>
			
		</div>
		
		<form id="impact-export-form" method="post">
		
		<div class="impact-admin-2column">
			
			<div id="impact-edit-hook" class="impact-admin-box vp2col">
				<h3><?php _e('Export A Template', 'impact'); ?></h3>
				<div class="impact-boxwrap">
				<table class="impact-option-table">
					<tr>
						<td>
							<select id="template_export_list" name="template_export_list" style="width:200px;" class="iewide"><?php impact_list_templates( $template_id ); ?></select> <?php _e('Include Images?', 'impact'); ?> <input type="checkbox" value="export_images" name="export_images[]" checked>
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="clicked_button" value="<?php _e('Export Template', 'impact'); ?>" class="button-highlighted"/>
							<input type="hidden" name="action" value="impact_export">
						</td>
					</tr>
				</table>
				</div>
			</div>
			
		</div>
		
		</form>
		
		<form id="impact-export-form" method="post" enctype="multipart/form-data">
		
		<div class="impact-admin-2column">
			
			<div id="impact-edit-hook" class="impact-admin-box vp2col">
				<h3><?php _e('Import A Template', 'impact'); ?></h3>
				<div class="impact-boxwrap">
				<table class="impact-option-table">
					<tr>
						<td>
							<strong><?php _e('Template File:', 'impact'); ?></strong> <input name="template_import" type="file" />
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="clicked_button" value="<?php _e('Import Template', 'impact'); ?>" class="button-highlighted"/>
							<input type="hidden" name="action" value="impact_import">
						</td>
					</tr>
				</table>
				</div>
			</div>
			
		</div>
		
		</form>
		
	</div> <!--close impact-admin-pagewrap-->

<?php
}

//end lib/admin/impact-hook-builder.php