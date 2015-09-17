				<div class="case-study">
					<dl>
						<?php /*?><img src="/Project/slice/images/case-studies/photo.jpg" width="184" height="169"><?php */?>
						<?php $CaseStudyImage = get_post_meta ($post->ID, 'CaseStudyImage', $single = true); if($Title !== '') echo $CaseStudyImage ; ?>
						<dt>Industry:</dt>
						<dd><?php $Industry = get_post_meta ($post->ID, 'Industry', $single = true); if($Title !== '') echo $Industry ; ?></dd>
	
						<dt>Company Type:</dt>
						<dd><?php $CompanyType = get_post_meta ($post->ID, 'CompanyType', $single = true); if($Title !== '') echo $CompanyType ; ?></dd>
	
						<dt>Company Size:</dt>
						<dd><?php $CompanySize = get_post_meta ($post->ID, 'CompanySize', $single = true); if($Title !== '') echo $CompanySize ; ?></dd>
	
						<dt>Job Functions:</dt>
						<dd><?php $JobFunctions = get_post_meta ($post->ID, 'JobFunctions', $single = true); if($Title !== '') echo $JobFunctions ; ?></dd>

						<dt>Solutions:</dt>
						<dd><?php $Solutions = get_post_meta ($post->ID, 'Solutions', $single = true); if($Title !== '') echo $Solutions ; ?></dd>
					</dl>
				</div>
				
				<p class="lead challenge"><strong>Challenge:</strong> <?php $Challenge = get_post_meta ($post->ID, 'Challenge', $single = true); if($Title !== '') echo $Challenge ; ?>.</p>

			<?php the_content(); ?>


