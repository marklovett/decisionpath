<?php get_header(); ?>

	<div id="content"><a name="content"></a>
				<div id="feature-rolesContainer">
					<div id="feature" class="section">
						<div id="panel-wrap">
							<?php include (TEMPLATEPATH . '/homepage-content.php'); ?>
						</div><!-- /#panel-wrap -->
						<ol id="feature-nav" class="nav">
							<li><a href="#panel-1"><img src="/wp-content/themes/decisionpath/images/feature/branding-nav-1.jpg" alt="" width="71" height="26" /></a></li>
							<li><a href="#panel-2"><img src="/wp-content/uploads/2011/12/woman_red_glasses_71x26.jpg" alt="" width="71" height="26" /></a></li>
							<li><a href="#panel-3"><img src="/wp-content/themes/decisionpath/images/feature/branding-nav-3.jpg" alt="" width="71" height="26" /></a></li>
							<li><a href="#panel-4"><img src="/wp-content/themes/decisionpath/images/feature/branding-nav-4.jpg" alt="" width="71" height="26" /></a></li>
						</ol>
					</div>
	
					<div id="roles">
						<div id="myRole">
							<h4 class="tab"><a href="javascript:void(0)">My Role is:</a></h4>
							<ul id="roleNav">
								<li><a href="javascript:void(0)">Sales</a></li>
								<li><a href="javascript:void(0)#">Marketing</a></li>
								<li><a href="javascript:void(0)">Finance</a></li>
								<li><a href="javascript:void(0)">Operations</a></li>
								<li><a href="javascript:void(0)">Information Technology</a></li>
								<li><a href="javascript:void(0)">Management</a></li>
								<li><a href="javascript:void(0)">Business Intelligence</a></li>
							</ul>
							<div id="roleContainer">
								<div>
									<?php query_posts('page_id=13');
									if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
									<?php echo the_excerpt(); endwhile; ?>
									<?php endif; ?>
									<p class="more"><a href="/function/sales/">&raquo; Learn More</a></p>
								</div>
								<div>
									<?php query_posts('page_id=15');
									if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
									<?php echo the_excerpt(); endwhile; ?>
									<?php endif; ?>
									<p><a href="/function/marketing/">&raquo; Learn More</a></p>
								</div>
								<div>
									<?php query_posts('page_id=17');
									if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
									<?php echo the_excerpt(); endwhile; ?>
									<?php endif; ?>
									<p><a href="/function/finance/">&raquo; Learn More</a></p>
								</div>
								<div>
									<?php query_posts('page_id=19');
									if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
									<?php echo the_excerpt(); endwhile; ?>
									<?php endif; ?>
									<p><a href="/function/operations/">&raquo; Learn More</a></p>
								</div>
								<div>
									<?php query_posts('page_id=21');
									if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
									<?php echo the_excerpt(); endwhile; ?>
									<?php endif; ?>
									<p><a href="/function/it/">&raquo; Learn More</a></p>
								</div>
								<div>
									<?php query_posts('page_id=23');
									if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
									<?php echo the_excerpt(); endwhile; ?>
									<?php endif; ?>
									<p><a href="/function/general-management/">&raquo; Learn More</a></p>
								</div>
								<div>
									<?php query_posts('page_id=25');
									if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
									<?php echo the_excerpt(); endwhile; ?>
									<?php endif; ?>
									<p><a href="/function/business-intelligence/">&raquo; Learn More</a></p>
								</div>
							</div>
						</div>
	
						<div id="myIndustry" class="alt">
							<h4 class="tab"><a href="javascript:void(0)">My Industry is:</a></h4>
							<ul id="industryNav">
								<li><a href="javascript:void(0)">Food and CPG</a></li>
								<li><a href="javascript:void(0)">Manufacturing</a></li>
								<li><a href="javascript:void(0)">Real Estate</a></li>
								<li><a href="javascript:void(0)">Financial Services</a></li>
								<li><a href="javascript:void(0)">Government</a></li>
								<li><a href="javascript:void(0)">Electric Utilites</a></li>
								<li><a href="javascript:void(0)">Other</a></li>
							</ul>
							<div id="industryContainer">
								<div>
									<?php query_posts('page_id=31');
									if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
									<?php echo the_excerpt(); endwhile; ?>
									<?php endif; ?>
									<p class="more"><a href="/industry/food-and-cpg/">&raquo; Learn More</a></p>
								</div>

								<div>
									<?php query_posts('page_id=356');
									if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
									<?php echo the_excerpt(); endwhile; ?>
									<?php endif; ?>
									<p><a href="/industry/manufacturing-and-distribution/">&raquo; Learn More</a></p>
								</div>
								<div>
									<?php query_posts('page_id=353');
									if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
									<?php echo the_excerpt(); endwhile; ?>
									<?php endif; ?>
									<p><a href="/industry/real-estate/">&raquo; Learn More</a></p>
								</div>
								<div>
									<?php query_posts('page_id=33');
									if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
									<?php echo the_excerpt(); endwhile; ?>
									<?php endif; ?>
									<p><a href="/industry/financial-services/">&raquo; Learn More</a></p>
								</div>
								<div>
									<?php query_posts('page_id=35');
									if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
									<?php echo the_excerpt(); endwhile; ?>
									<?php endif; ?>
									<p><a href="/industry/government/">&raquo; Learn More</a></p>
								</div>
								<div>
									<?php query_posts('page_id=37');
									if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
									<?php echo the_excerpt(); endwhile; ?>
									<?php endif; ?>
									<p><a href="/industry/electric-utilites/">&raquo; Learn More</a></p>
								</div>
								<div>
									<?php query_posts('page_id=39');
									if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
									<?php echo the_excerpt(); endwhile; ?>
									<?php endif; ?>
									<p><a href="/industry/other/">&raquo; Learn More</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>	
				<div id="infoSection">
					<div class="module">
						<?php include (TEMPLATEPATH . '/custom-info.php'); ?>
					</div>
		
					<div class="module casestudy">
						<h3>Featured Case Study</h3>
						<?php if (have_posts()) : ?>
							<?php query_posts('showposts=1&cat=69'); ?>
							<?php remove_filter ('the_content',  'wpautop'); ?>
								<ul>
									<?php while (have_posts()) : the_post(); ?>
									<li><?php the_excerpt(); ?></li>
									<?php endwhile; ?>
								</ul>
						<?php endif; ?>
						<p class="more"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">&raquo; Learn More</a></p>
					</div>
		
					<div class="module news">
						<h3>Latest News</h3>
						<?php if (have_posts()) : ?>
							<?php query_posts('showposts=3&cat=66'); ?>
							<?php remove_filter ('the_content',  'wpautop'); ?>
								<ul>
									<?php while (have_posts()) : the_post(); ?>
									<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">&raquo; <?php the_title(); ?></a></li>
									<?php endwhile; ?>
								</ul>
						<?php endif; ?>
						<p class="more"><a href="/news-and-publications/">&raquo; News Archive</a></p>
					</div>
	
					<div class="module last">
						<h3>Our Clients</h3>
						<div id="clients">
						<?php if (have_posts()) : ?>
							<?php query_posts('showposts=-1&cat=36'); ?>
							<?php remove_filter ('the_content',  'wpautop'); ?>
								<ul>
									<?php while (have_posts()) : the_post(); ?>
									<li><?php the_content(); ?> <?php the_title(); ?></li>
									<?php endwhile; ?>
								</ul>
						<?php endif; ?>
						</div>
						<p class="more"><a href="/about-decision-path/our-clients/">&raquo; View All Clients</a></p>
					</div>
				</div>

	</div><!-- end content -->



<?php get_footer(); ?>
