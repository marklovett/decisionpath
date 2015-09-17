<?php get_header(); ?>

	<div id="header-lead">
		<h1><?php $H1 = get_post_meta
		($post->ID, 'H1', $single = true);
		if($H1 !== '') echo '' . $H1; ?></h1>
	</div>

	<div id="content" class="case-study-page team">



<?php
	// Continue with normal Loop
	if ( have_posts() ) : while ( have_posts() ) : the_post();
if ( in_category('case-study') ) {
	include 'category-41.php';
} else 
	the_content();

?>

<?php if ( in_category('blog') ) { ?>

	<?php comments_template(); ?>
<?php } else ?>
	
			<?php edit_post_link('Edit this entry','','.'); ?>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>