<div class="adventure-header">
<?php
/**ALL ADVENTURES
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
</div>

	<div id="primary" class="content-area adventure-content-area">
		<main id="main" class="site-main" role="main">
			<div class="adventure-area">
				<h1>Latest Adventures</h1>
				<div class="adventure-grid">
					
					<?php while ( have_posts() ) : the_post(); ?>
						
					
						<div class="adventure-grid-item">
						
								<div class="adventure-content">
									<a href = <?php echo get_permalink(get_the_ID()); ?> ><?php the_title('<h2 class="entry-title">', '</h2>'); ?> </a>
									<a class= "adventure-button" href= <?php echo get_permalink(get_the_ID()); ?>>Read More</a>
								</div>
								<div class="shade">
									<img src= "<?php echo CFS()->get('image'); ?> ">
								</div>
						</div>
					

					<?php endwhile; ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
