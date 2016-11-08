	</div> <!-- End Container Div -->
	<div id="footer-wrapper">
		<div class="row navigationmain">
			<?php 
				wp_nav_menu(array(
					'sort_column' => 'menu_order', 
					'container_class' => 'blank-menu-header'
				));
			?>
		</div>
		<div class="container" id="footer-background">
			<footer class="row">
				<div class="four columns">
					<?php dynamic_sidebar('footer-one'); ?>
				</div>
				<div class="three columns">
					<?php dynamic_sidebar('footer-two'); ?>
				</div>
				<div class="five columns">
					<?php dynamic_sidebar('footer-three'); ?>
				</div>
			</footer>
		<?php wp_footer(); ?>
	</div>
		</div>	
</body>
</html>