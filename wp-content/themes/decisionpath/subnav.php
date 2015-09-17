<div id="sidebar">
	<ul id="subNav">
		<?php echo hierarchical_submenu($post); ?>

		<?php if ( in_category( array( 'sales', 'marketing', 'finance', 'operations', 'information-technology', 'general-management', 'business-intelligence' ) )) {
			include 'inc/function-solutions.php'; ?>
		<?php } else if ( in_category( array( 'food-cpg', 'manufacturing-and-distribution-solutions', 'financial-services', 'government', 'real-estate-solutions', 'electric-utilities', 'other' ) )) {
			include 'inc/industry-solutions.php'; ?>
		<?php } else ?>

		<?php
		if ( in_category('leadership-team') ) {
			include 'inc/team.php';
		} else 
		
		?>

		<?php
		if ( in_category( array( 'news', 'blog' ) )) {
			include 'inc/thought-leadership.php';
		} else 
		?>
	</ul>
	<div class="module">
		<?php
		if ( is_page('104') ) {
			include 'inc/special-quote.php';
		} else { ?>
	
		<?php $recent = new WP_Query("cat=35&showposts=1&orderby=rand"); while($recent->have_posts()) : $recent->the_post();?>
			<blockquote><em><?php the_content(); ?></em></blockquote>
			<p><strong>
			<?php $TestimonialTitle = get_post_meta ($post->ID, 'TestimonialTitle', $single = true); if($Title !== '') echo $TestimonialTitle ; ?></strong><br />
			<?php $TestimonialCompany = get_post_meta ($post->ID, 'TestimonialCompany', $single = true); if($Title !== '') echo $TestimonialCompany ; ?><br />
			<?php /*?><?php $TestimonialName = get_post_meta ($post->ID, 'TestimonialName', $single = true); if($Title !== '') echo $TestimonialName ; ?><?php */?>
			</p>
		<?php endwhile; ?>
		<?php } ?>
	</div>
</div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php endwhile; endif; ?>
