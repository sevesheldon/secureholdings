			<!-- footer -->
			<footer class="footer" role="contentinfo" id="landing-footer">

				<!-- nav -->
<!-- 				<nav class="footer-nav" id="footer-nav" role="navigation">
					<?php html5blank_nav(); ?>
				</nav> -->
				<!-- /nav -->

				<div class="top">
					<a href="#">Back To Top</a>

				</div>

<!-- 				<div class="socials" id="socials-footer">
					<a target="_blank" href="https://www.facebook.com/john.sheldon.127">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icons/Facebook.png" alt="facebook" class="social-icon">
					</a>
					<a target="_blank" href="https://www.linkedin.com/in/johnjsheldon">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icons/Linkedin.png" alt="linkedin" class="social-icon">
					</a>
				</div> -->

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?> | <a href="<?php the_permalink(147);?>" target="_blank">Privacy Policy</a>
				</p>
				<div id="landing-copyright-mob">
					<p><a href="<?php the_permalink(147);?>" target="_blank">Privacy Policy</a></p>
					<p>&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?></p>
				</div>
				<!-- /copyright -->


<!-- 				<div class="disclaimer-wrap">

					<div class="disclaimer">

						<h5>John Sheldon is a licensed Oregon real estate broker with Premiere Property Group, LLC</h5>
					
					</div>

				</div>	 -->				

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>


		<script>
		$noSliderArgs = {
			autoplay : true,
			arrows : false,
			dragable : false,
			autoplaySpeed : 9000,
			fade : false
		}
		$('.slider').slick($noSliderArgs);
		// </script>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>





	</body>
</html>
