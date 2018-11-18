<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section class="home-hero">
            <img src="https://tent.academy.red/wp-content/themes/inhabitent/images/inhabitent-logo-full.svg" class="logo" alt="Inhabitent full logo">
		 </section>
		 
     <!-- Shop stuff section -->
	 <div class = "product-info-container">
                <h2 class="section-head">Shop Stuff</h2>
                <div class = "product-type-container">
                
                <?php
                $categories = get_categories( array(
                    'orderby' => 'name',
                    'order' => 'ASC',
                    'taxonomy' => 'productcat'
                ));
            
                foreach( $categories as $category ) {
                    $categorylink = home_url('/') . $category->taxonomy . '/' . $category->name;
            ?>
                <!-- DO  -->
                <div class = "product-type-wrapper">
                        <img src = <?php echo get_template_directory_uri()."/inhabitant-assets/images/product-type-icons/$category->slug.svg"?> alt="<?php echo $category->name?>">
                        <p id = "description"><?php echo $category->description ?></p>
                        <p class = button-container>
                            <a href = <?php echo "$categorylink" ?> class = "button"><?php echo $category->name ?> Stuff</a>
						</p>
                    </div>
                <?php } ?>
                </div>
            </div>

<div id="journal-area">
<h2 class="section-head">Inhabitent Journals</h2>
</div>
<div id="adventure-area">
<h2 class="section-head">Latest Adventures</h2>
</div>
<?php // Loop 1
// $first_query = new WP_Query(array('post_type' => 'Product', 'post_per_page' => 3));

// while ($first_query->have_posts()): $first_query->the_post();
// 	echo CFS()->get( 'name' );?> <br>
//    <?php  echo CFS()->get( 'price' );?> <br>
//    <?php // echo $first_query->the_post();
// endwhile;
// wp_reset_postdata();

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

<!-- <?php get_sidebar();?> no sidebar for the main page --> 
<?php get_footer();?>
