<div id="sidebar">
	<ul id="subNav">
		<?php if ( is_page() ) { ?>
		
		<?php
		if($post->post_parent)
		$children = wp_list_pages('title_li=&child_of='.$post->post_parent.'&echo=0'); else
		$children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
		if ($children) { ?>

		<li>
		<?php echo $children; ?>
		</li>
		
		<?php } } ?>


		<?php
		if ( in_category('leadership-team') ) {
			include 'inc/about.php';
		} else 
		
		?>


	</ul>
	<div class="module">
		<?php $recent = new WP_Query("cat=35&showposts=1&orderby=rand"); while($recent->have_posts()) : $recent->the_post();?>
			<blockquote><em><?php the_content(); ?></em></blockquote>
			<p><strong><?php $TestimonialCompany = get_post_meta ($post->ID, 'TestimonialCompany', $single = true); if($Title !== '') echo $TestimonialCompany ; ?><br />
			<?php $TestimonialName = get_post_meta ($post->ID, 'TestimonialName', $single = true); if($Title !== '') echo $TestimonialName ; ?><br />
			<?php $TestimonialTitle = get_post_meta ($post->ID, 'TestimonialTitle', $single = true); if($Title !== '') echo $TestimonialTitle ; ?></strong></p>
		<?php endwhile; ?>
	</div>
</div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php endwhile; endif; ?>
