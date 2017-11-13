<?php
/**
 * The template for displaying all single posts.
 *
 * @package wave
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', get_post_format() );?>
            <div class="author-bio">
                <div class="author-image"><?php echo get_avatar( get_the_author_meta('email'), '110' ); ?></div>
			<div class="author-info">
				<h3 class="author-title"><?php _e('Writen by ', 'wave'); ?><?php the_author_link(); ?></h3>
				<p class="author-description"><?php the_author_meta('description'); ?></p>				
			</div>
<!--END .author-bio-->
</div>
<?php
					// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
            
            

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
