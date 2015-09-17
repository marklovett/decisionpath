<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div id="header-lead">
			<h1><?php $H1 = get_post_meta
			($post->ID, 'H1', $single = true);
			if($H1 !== '') echo '' . $H1; ?></h1>
		</div>

		<?php if ( is_page(117) ) { ?>
			<div id="content" class="no-sidebar">
		<?php } else if ( is_page(1316) ) { ?>
			<div id="content" class="no-sidebar">
		<?php } else if ( is_page(1681) ) { ?>
			<div id="content" class="newsArchives">
		<?php } else if ( is_page(1812) ) { ?>
			<div id="content" class="blogArchives">
		<?php } else { ?>
			<div id="content">
		<?php } ?>

			<?php the_content(); ?>

			<?php endwhile; endif; ?>

			<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

<?php /*?>Function<?php */?>
<?php /*?>Sales<?php */?>
				<?php if ( is_page(13)) { ?>
						<?php query_posts('showposts=1&cat=5&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module solutions">
							<h2>Sales Solutions</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_excerpt(); ?></li>
						<?php endwhile; ?>
							</ul>
							</div>
					<?php endif; ?>

						<?php query_posts('showposts=-1&cat=18&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module successStories">
							<h2>Sales Success Stories</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_excerpt(); ?></li>
								<?php endwhile; ?>
							</ul>
							</div>	
					<?php endif; ?>
				<?php } ?>

<?php /*?>Marketing<?php */?>
				<?php if ( is_page(15)) { ?>
						<?php query_posts('showposts=1&cat=6&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module solutions">
							<h2>Marketing Solutions</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_excerpt(); ?></li>
						<?php endwhile; ?>
							</ul>
							</div>
					<?php endif; ?>

						<?php query_posts('showposts=-1&cat=19&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module successStories">
							<h2>Marketing Success Stories</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_excerpt(); ?></li>
								<?php endwhile; ?>
							</ul>
							</div>	
					<?php endif; ?>
				<?php } ?>
<?php /*?>Finance<?php */?>
				<?php if ( is_page(17)) { ?>
						<?php query_posts('showposts=1&cat=7&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module solutions">
							<h2>Finance Solutions</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_excerpt(); ?></li>
						<?php endwhile; ?>
							</ul>
							</div>
					<?php endif; ?>

						<?php query_posts('showposts=-1&cat=20&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module successStories">
							<h2>Finance Success Stories</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_excerpt(); ?></li>
								<?php endwhile; ?>
							</ul>
							</div>	
					<?php endif; ?>
				<?php } ?>

<?php /*?>Operations<?php */?>
				<?php if ( is_page(19)) { ?>
						<?php query_posts('showposts=1&cat=8&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module solutions">
							<h2>Operations Solutions</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_excerpt(); ?></li>
						<?php endwhile; ?>
							</ul>
							</div>
					<?php endif; ?>

						<?php query_posts('showposts=-1&cat=21&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module successStories">
							<h2>Operations Success Stories</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_excerpt(); ?></li>
								<?php endwhile; ?>
							</ul>
							</div>	
					<?php endif; ?>
				<?php } ?>
<?php /*?>Information Technology<?php */?>
				<?php if ( is_page(21)) { ?>
						<?php query_posts('showposts=1&cat=9&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module solutions">
							<h2>Information Technology Solutions</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_excerpt(); ?></li>
						<?php endwhile; ?>
							</ul>
							</div>
					<?php endif; ?>

						<?php query_posts('showposts=-1&cat=22&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module successStories">
							<h2>Information Technology Success Stories</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_excerpt(); ?></li>
								<?php endwhile; ?>
							</ul>
							</div>	
					<?php endif; ?>
				<?php } ?>
<?php /*?>General Management<?php */?>
				<?php if ( is_page(23)) { ?>
						<?php query_posts('showposts=1&cat=10&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module solutions">
							<h2>General Management Solutions</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_excerpt(); ?></li>
								<?php endwhile; ?>
							</ul>
							</div>	
					<?php endif; ?>

						<?php query_posts('showposts=-1&cat=17&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module successStories">
							<h2>General Management Success Stories</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_excerpt(); ?></li>
								<?php endwhile; ?>
							</ul>
							</div>	
					<?php endif; ?>
				<?php } ?>

<?php /*?>Business Intelligence<?php */?>
				<?php if ( is_page(25)) { ?>
						<?php query_posts('showposts=1&cat=11&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module solutions">
							<h2>Business Intelligence Solutions</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_excerpt(); ?></li>
								<?php endwhile; ?>
							</ul>
							</div>	
					<?php endif; ?>

						<?php query_posts('showposts=-1&cat=23&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module successStories">
							<h2>Business Intelligence Success Stories</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_excerpt(); ?></li>
								<?php endwhile; ?>
							</ul>
							</div>	
					<?php endif; ?>
				<?php } ?>

<?php /*?>Industry<?php */?>
<?php /*?>Food/CPG<?php */?>
				<?php if ( is_page(31)) { ?>
						<?php query_posts('showposts=1&cat=24&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module solutions">
							<h2>Food/CPG Solutions</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_excerpt(); ?></li>
						<?php endwhile; ?>
							</ul>
							</div>
					<?php endif; ?>

						<?php query_posts('showposts=-1&cat=29&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module successStories">
							<h2>Food/CPG Success Stories</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_excerpt(); ?></li>
								<?php endwhile; ?>
							</ul>
							</div>	
					<?php endif; ?>
				<?php } ?>

<?php /*?>Manufacturing and Distribution<?php */?>
				<?php if ( is_page(356)) { ?>
						<?php query_posts('showposts=1&cat=53&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module solutions">
							<h2>Manufacturing and Distribution Solutions</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_excerpt(); ?></li>
						<?php endwhile; ?>
							</ul>
							</div>
					<?php endif; ?>

						<?php query_posts('showposts=-1&cat=40&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module successStoriesAlt">
							<h2>Manufacturing and Distribution Success Stories</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_excerpt(); ?></li>
								<?php endwhile; ?>
							</ul>
							</div>	
					<?php endif; ?>
				<?php } ?>

<?php /*?>Real Estate<?php */?>
				<?php if ( is_page(353)) { ?>
						<?php query_posts('showposts=1&cat=54&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module solutions">
							<h2>Real Estate Solutions</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_content(); ?></li>
						<?php endwhile; ?>
							</ul>
							</div>
					<?php endif; ?>

						<?php query_posts('showposts=-1&cat=55&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module successStoriesAlt">
							<h2>Real Estate Success Stories</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_excerpt(); ?></li>
								<?php endwhile; ?>
							</ul>
							</div>	
					<?php endif; ?>
				<?php } ?>

<?php /*?>Financial Services<?php */?>
				<?php if ( is_page(33)) { ?>
						<?php query_posts('showposts=1&cat=25&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module solutions">
							<h2>Financial Services Solutions</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_content(); ?></li>
								<?php endwhile; ?>
							</ul>
							</div>	
					<?php endif; ?>

						<?php query_posts('showposts=-1&cat=30&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module successStoriesAlt">
							<h2>Financial Services Success Stories</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_excerpt(); ?></li>
								<?php endwhile; ?>
							</ul>
							</div>	
					<?php endif; ?>
				<?php } ?>
<?php /*?>Government<?php */?>
				<?php if ( is_page(35)) { ?>
						<?php query_posts('showposts=1&cat=26&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module solutions">
							<h2>Government Solutions</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_content(); ?></li>
								<?php endwhile; ?>
							</ul>
							</div>	
					<?php endif; ?>

						<?php query_posts('showposts=-1&cat=38&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module successStoriesAlt">
							<h2>Government Success Stories</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_excerpt(); ?></li>
								<?php endwhile; ?>
							</ul>
							</div>	
					<?php endif; ?>
				<?php } ?>

<?php /*?>Electric Utilites<?php */?>
				<?php if ( is_page(37)) { ?>
						<?php query_posts('showposts=1&cat=27&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module solutions">
							<h2>Electric Utilites Solutions</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_content(); ?></li>
								<?php endwhile; ?>
							</ul>
							</div>	
					<?php endif; ?>

						<?php query_posts('showposts=-1&cat=31&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module successStoriesAlt">
							<h2>Electric Utilites Success Stories</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_excerpt(); ?></li>
								<?php endwhile; ?>
							</ul>
							</div>	
					<?php endif; ?>
				<?php } ?>
<?php /*?>Other<?php */?>
				<?php if ( is_page(39)) { ?>
						<?php query_posts('showposts=-1&cat=32&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
						<?php if (have_posts()) : ?>
							<div class="module successStoriesAlt">
							<h2>Other Success Stories</h2>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>: <?php the_excerpt(); ?></li>
								<?php endwhile; ?>
							</ul>
							</div>	
					<?php endif; ?>
				<?php } ?>

<?php /*?>Our Team<?php */?>
				<?php if ( is_page(98)) { ?>
					<?php if (have_posts()) : ?>
						<?php query_posts('showposts=-1&cat=34&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
							<?php while (have_posts()) : the_post(); ?>
							<div id="team" class="striped">
								<div>
								<h3 class="clearing"><?php the_title(); ?></h3>
								<p><?php the_excerpt(); ?><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">more</a></p>
								</div>
							</div>
								<?php endwhile; ?>
					<?php endif; ?>
				<?php } ?>

<?php /*?>News and Publications<?php */?>
				<?php if ( is_page(80)) { ?>
					<?php if (have_posts()) : ?>
						<?php query_posts('showposts=-1&cat=43&orderby=title&order=desc&orderby=date'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
							<ul>
							<?php while (have_posts()) : the_post(); ?>
							<li><p><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a><br />Posted on <?php the_time('M. j, Y'); ?></p></li>
								<?php endwhile; ?>
							</ul>
					<?php endif; ?>
					<p><a href="/news-and-publications/archives/">Archives</a></p>
				<?php } ?>


<?php /*?>Blog<?php */?>
				<?php if ( is_page(1386)) { ?>
					<?php if (have_posts()) : ?>
						<?php query_posts('showposts=-1&cat=56&orderby=title&order=dec'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
							<?php while (have_posts()) : the_post(); ?>
							<p class="right"><?php the_time('M. j, Y'); ?></p>
							<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
							<p><?php the_content_limit(210, ""); ?></p>
							
								<?php endwhile; ?>
					<?php endif; ?>
				<?php } ?>

<?php /*?>Site Map<?php */?>
				<?php if ( is_page(716)) { ?>
					<ul>
						<?php wp_list_pages('sort_column=menu_order&exclude=1316,1744,1748,1751&title_li='); ?>
					</ul>
				<?php } ?>

<?php /*?>Calendar<?php */?>
				<?php if ( is_page(115)) { ?>
					<?php if (have_posts()) : ?>
						<?php query_posts('showposts=-1&cat=67&orderby=title&order=desc&orderby=date'); ?>
						<?php remove_filter ('the_content',  'wpautop'); ?>
							<?php while (have_posts()) : the_post(); ?>
							<ul class="calendar">
								<li>
									<p><strong><?php the_title(); ?></strong></p>
									<p><?php the_excerpt(); ?><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">more</a></p>
								</li>
							</ul>
							
								<?php endwhile; ?>
					<?php endif; ?>
				<?php } ?>

<?php /*?>Archives<?php */?>
		<?php if ( is_page(1681) ) { ?>
			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
			<?php endif; ?>
			<?php } else { ?>
		<?php } ?>


			<?php /*?><?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?><?php */?>

		<?php /*?><?php comments_template(); ?><?php */?>

<?php /*?>Blog Archives<?php */?>
		<?php if ( is_page(1812) ) { ?>
			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
			<?php endif; ?>
			<?php } else { ?>
		<?php } ?>


			<?php /*?><?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?><?php */?>

		<?php /*?><?php comments_template(); ?><?php */?>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
