			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<aside>
					<p>Reach us at<br>
					info@rythmograph.com<br>
					646-234-6494</p>
					<p>14 East 4th Street<br>
					Suite 602<br>
					NYC<br>
					NY, 10012</p>
					<p class="copyright">
						&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>
					</p>
				</aside>

				<aside>
					<?php wp_nav_menu( array( 'theme_location' => 'footer_menu' ) ); ?>
				</aside>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

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
