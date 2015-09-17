	</div>
	<footer>
		<p class="copyright">&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?>. All Rights Reserved.</p>
			<span id="" class="vcard">
		<div class="module">
			<h4>Contact Us</h4>
				<span class="fn n">
				<span class="given-name">DecisionPath Consulting</span>
				<span class="additional-name"></span>
				<span class="family-name"></span>
			</span>
			<span class="org">DecisionPath Consulting</span>
			<span class="adr">
				<span class="street-address">6 Montgomery Village Avenue, Suite 402</span>
				<span class="locality">Gaithersburg</span>, <span class="region">MD</span>, 
				<span class="postal-code">20879</span>
			</span><br>
			Main: <span class="tel">(301) 926-8323</span>
			Fax: <span class="fax">(301) 417-0508</span>
		</div>

		<div class="module email">
			<p>General Information: <a href="mailto:info@decisionpath.com" class="email">info@decisionpath.com</a><br />
			Sales: <a href="mailto:sales@decisionpath.com" class="email2">sales@decisionpath.com</a><br />
			Marketing: <a href="mailto:marketing@decisionpath.com" class="email3">marketing@decisionpath.com</a><br />
			Web Site: <a href="mailto:webmaster@decisionpath.com" class="email4">webmaster@decisionpath.com</a></p>
		</div>
			</span>

		<div class="module connect">
			<h4>Connect With Us</h4>
			<ul>
				<li><a href="/category/blog/feed"><img src="/Project/slice/images/template/rss.png" width="32" height="32" alt="RSS"></a></li>
				<li><a href="http://www.facebook.com/pages/DecisionPath-Consulting/152612314770875"><img src="/Project/slice/images/template/facebook.png" width="32" height="32" alt="Facebook"></a></li>
				<li><a href="http://twitter.com/decisionpath"><img src="/Project/slice/images/template/twitter.png" width="32" height="32" alt="twitter"></a></li>
				<li class="hide"><img src="/Project/slice/images/template/youtube.png" width="32" height="32" alt="Youtube"></li>
			</ul>
		</div>
	</footer>
	<p class="matrix">Created by <a href="http://www.matrixgroup.net">Matrix Group International, Inc. &reg;</a></p>
</div>

<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery-1.4.3.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/easySlider1.7.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.featureFade.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/framework.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/homepage.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/facebox.js"></script>



<!--[if lte IE 8]>
<script type="text/javascript" src="/Project/slice/scripts/DD_belatedPNG_0.0.8a-min.js"></script> 
<![endif]-->

	<?php wp_footer(); ?>
	
	<div class="analytics">
	<?php echo stripslashes(get_option('mt_ga_code')); ?>
	</div>

</body>
</html>


