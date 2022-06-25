<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package minimalistblogger
 */

?>
</div>
</div><!-- #content -->

<footer id="colophon" class="site-footer clearfix">

	<div class="content-wrap">
		<?php if ( is_active_sidebar( 'footerwidget-1' ) ) : ?>
		<div class="footer-column-wrapper">
			<div class="footer-column-three footer-column-left">
				<?php dynamic_sidebar( 'footerwidget-1' ); ?>
			</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footerwidget-2' ) ) : ?>
		<div class="footer-column-three footer-column-middle">
			<?php dynamic_sidebar( 'footerwidget-2' ); ?>
		</div>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'footerwidget-3' ) ) : ?>
	<div class="footer-column-three footer-column-right">
		<?php dynamic_sidebar( 'footerwidget-3' ); ?>				
	</div>
<?php endif; ?>

</div>

<div class="site-info">
	<?php echo esc_html('&copy;', 'minimalistblogger') ?> <?php echo esc_html(date('Y')); ?> <?php bloginfo( 'name' ); ?>
	<!-- Delete below lines to remove copyright from footer -->
	<span class="footer-info-right">
		<?php echo esc_html_e(' | Powered by', 'minimalistblogger') ?> <a href="<?php echo esc_url('https://superbthemes.com/minimalistblogger/'); ?>"><?php echo esc_html_e('Minimalist Blog', 'minimalistblogger') ?></a> <?php echo esc_html_e('WordPress Theme', 'minimalistblogger') ?>
	</span>
	<!-- Delete above lines to remove copyright from footer -->

</div><!-- .site-info -->
</div>



</footer>
</div>
<!-- Off canvas menu overlay, delete to remove dark shadow -->
<div id="smobile-menu" class="mobile-only"></div>
<div id="mobile-menu-overlay"></div>

<?php wp_footer(); ?>
</body>
</html>
