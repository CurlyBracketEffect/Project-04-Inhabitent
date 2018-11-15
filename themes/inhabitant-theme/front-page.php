<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


<?php // Loop 1
$first_query = new WP_Query(array('post_type' => 'Product', 'post_per_page' => 3));

while ($first_query->have_posts()): $first_query->the_post();
	echo CFS()->get( 'name' );?> <br>
   <?php  echo CFS()->get( 'price' );?> <br>
   <?php // echo $first_query->the_post();
endwhile;
wp_reset_postdata();

// $first_query = new WP_Query('cat=-1'); // exclude category
// while($first_query->have_posts()) : $first_query->the_post();
// ...
// endwhile;
// wp_reset_postdata();



// // Loop 2
// $second_query = new WP_Query('cat=-2'); // exclude category
// while ($second_query->have_posts()): $second_query->the_post();endwhile;
// wp_reset_postdata();
// // Loop 3
// $third_query = new WP_Query('cat=-3'); // exclude category
// while ($third_query->have_posts()): $third_query->the_post();
// endwhile;
// wp_reset_postdata();
?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar();?>
<?php get_footer();?>
