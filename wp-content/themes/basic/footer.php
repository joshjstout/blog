</div> 
<!-- #main -->

<?php do_action( 'basic_before_footer' ); ?>

<footer id="footer">

	<?php do_action( 'basic_before_footer_menu' ); ?>

	<?php if (has_nav_menu('bottom')) : ?>
	<div class="footer-menu maxwidth">
		<?php 
		wp_nav_menu( array(
				'theme_location' => 'bottom',
				'menu_id' => 'footer-menu',
				'depth' => 1,
				'container' => false,
				'items_wrap' => '<ul class="footmenu clearfix">%3$s</ul>'
			)); 
		?>
	</div>
	<?php endif; ?>

	<?php do_action( 'basic_before_footer_copyrights' ); ?>

	<div class="maxwidth grid">
		<div class="col6">
			<p id="copy">
				<!--noindex--><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="nofollow"><?php bloginfo('name'); ?></a><!--/noindex--> &copy; <?php echo date("Y",time()); ?>
				<br/>
				<span class="copyright-text"><?php echo basic_get_theme_option('copyright_text'); ?></span>
			</p>
		</div>

		<div class="col6 tr">
			<?php $counters = basic_get_theme_option('footer_counters'); ?>
			<div class="footer-counter"><?php echo wp_specialchars_decode( $counters, ENT_QUOTES ); ?></div>
		</div>
	</div>

	<?php do_action( 'basic_after_footer_copyrights' ); ?>

</footer>

</div> 
<!-- .wrapper -->

<a id="toTop">&#10148;</a>

<?php wp_footer(); ?>

</body>
</html>