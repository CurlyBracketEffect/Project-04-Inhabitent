<div class="journal-header">

<?php
/**ALL JOURNALS
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
</div>
<div class="content-sidebar-contatiner">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<h1>This is the Journal Archive</h1>
			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						get_template_part( 'template-parts/content', 'archive-journal' );
					?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	<div class="sidebar-wrapper">
	<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
