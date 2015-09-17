<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="description" content="<?php $MetaDescription = get_post_meta ($post->ID, 'MetaDescription', $single = true); if($Title !== '') echo $MetaDescription ; ?>" />
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title><?php
		if (is_home()) {
			echo bloginfo('name');
		} elseif (is_404()) {
			echo '404 Not Found';
		} elseif (is_category()) {
			echo 'Category:'; wp_title('');
		} elseif (is_search()) {
			echo 'Search Results';
		} elseif (is_day() || is_month() || is_year() ) {
			echo 'Archives:'; wp_title('');
		} elseif (is_tag()) {
			echo 'Tag:'; wp_title('');
		} else {
			$Title = get_post_meta
			($post->ID, 'Title', $single = true);
			if($Title !== '') echo $Title . ' | Decision Path';
		}
		?>
	</title>

	<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
	<!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
	<!--[if IE 7 ]>    <body class="ie7"> <![endif]-->
	<!--[if IE 8 ]>    <body class="ie8"> <![endif]-->
	<!--[if IE 9 ]>    <body class="ie9"> <![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->

	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="alternate" type="application/rss+xml" title="<?php echo bloginfo('name'); ?>" href="/category/blog/feed" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/gill-sans-font.css" type="text/css" media="screen,projection"  />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/facebox.css" type="text/css" media="screen,projection"  />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/print.css" type="text/css" media="print"  />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	<script src="<?php bloginfo('template_directory'); ?>/scripts/modernizr.js"></script>
	
</head>

<?php 
$url = explode('/', $_SERVER['REQUEST_URI']); 
$dir = $url[1] ? $url[1] : 'home'; 
?>

<body id="<?php echo $dir ?>" class="<?php echo the_title(); ?>">

<ul id="screenReader">
	<li><a href="#navigation">Skip to Navigation</a></li>
	<li><a href="#content">Skip to Content</a></li>
</ul>
<div id="wrapper">
	<div id="container">
		<ul id="utilityNav">
			<?php include (TEMPLATEPATH . '/utility-nav.php'); ?>
		</ul>
		<header>
		<?php if(is_home() && !is_paged()){ ?>
			<img src="/wp-content/themes/decisionpath/images/template/logo.gif" width="221" height="63" id="logo" alt="DecisionPath Consulting">
		<?php } else { ?>
			<a href="<?php echo get_option('home'); ?>/" id="logo"><img src="/wp-content/themes/decisionpath/images/template/logo.gif" width="221" height="63" alt="DecisionPath Consulting"></a>
		<?php } ?>

			<ul class="mission">
				<li>// Business <span>Intelligence</span></li>
				<li>// Data <span>Warehousing</span></li>
				<li>// Business <span>Analytics</span></li>
			</ul>

			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
		</header>

		<nav>
			<ul id="navigation">
			<?php wp_list_pages('include=78,11,27,76,1426&title_li=&sort_column=menu_order'); ?>

			</ul>
		</nav>

		<div id="contentContainer">
			<?php
			if ( in_category('case-study') ) {
				include 'inc/categories.php';
			} else 
				include 'subnav.php';
	
			?>			
			<ul id="breadcrumbs">
				<?php
					if(function_exists('bcn_display'))
					{
						bcn_display();
					}
				?>
			</ul>

