<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package wave
 */
?>
	</div><!-- #content -->
</div>    
</div>
<a href="#top" id="smoothup">Scroll To Top</a>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info main-page ">
		  <div class="footer-widget main-page">

        <?php
			/* footer sidebar */
			if ( ! is_404() ) : ?>
				<div id="footer-widgets" class="widget-area three">
					<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar-4' ); ?>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar-5' ); ?>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar-6' ); ?>
					<?php endif; ?>
				</div><!-- #footer-widgets -->
		<?php endif; ?>
		</div><!-- .site-info -->
            </div>
	</footer><!-- #colophon -->

<div class="line ">
    <div class="main-page">
     <div class="footer-title">
         <a href="" rel="home">Wave</a>
        </div>
        <div class="copyright-txt"> 
            <a> <?php _e('Theme by ', 'wave'); ?> <a class="copyright-txt-link" href="<?php echo "http://www.themebox.co.in" ?>">ThemeBox</a></a>
        </div>
   </div>
         </div>
<?php wp_footer(); ?>

</body>
</html>
