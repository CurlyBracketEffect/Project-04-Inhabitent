<?php
/**
 * The template for displaying all pages.
 * <img src="../inhabitant-assets/images/home-hero.jpg" class="logo" alt="Inhabitent full logo">
 * @package RED_Starter_Theme
 */

get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section class="home-hero">
            <img src="/wordpress/wp-content/themes/inhabitant-theme/inhabitant-assets/images/logos/inhabitent-logo-full.svg" class="logo" alt="Inhabitent full logo">
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
<div id= "journal-container">
       <ul class="proper-list">
         <?php
           $args = array (
             'numberposts' => 3,
             'post_type' => 'journal'
           );
           $journals = get_posts($args);

           foreach ($journals as $journal) {
           $journallink = get_permalink($journal->ID);
           $post_thumbnail_id = get_post_thumbnail_id($journal->ID);
           $post_image_url = wp_get_attachment_image_src($post_thumbnail_id, 'large');
           ?>
             <li class="journal-entry">
             <div class = "entry-pic-wrapper">
                 <img class = "entry-journal-pic" src = <?php echo $post_image_url[0];  ?> >
             </div>
             <div class = "entry-info-wrapper">
                 <span class= "date-comments">
                     <span class = "posted-date">
                         <time>
                             <time><?php echo mysql2date('j F, Y',$journal->post_date) ?></time>
                         </time>
                     </span>
                      / <?php echo $journal->comment_count ?> Comment<?php echo ($journal->comment_count == 1) ?  "" : "s" ?>
                 </span>
                 <h3 class = "journal-title">
                     <a href = "<?php echo $journallink ?>" ><?php echo $journal->post_title; ?></a>
                 </h3>
             </div>
             <a class = "journal-entry-button" href = "<?php echo $journallink ?>">Read Entry</a>
         </li>
       <?php } ?>
       </ul>
   </div>
<!-- End of Journal Loop -->
</div>
<div id="adventure-area">
    <h2 class="section-head">Latest Adventures</h2>
<div class= "adventure-container">

       <ul class="proper-list-adventure">
         <?php
           $args = array (
             'numberposts' => 4,
             'post_type' => 'adventure'
           );
           $adventures = get_posts($args);

           foreach ($adventures as $adventure) {
           $adventurelink = get_permalink($adventure->ID);
           $post_thumbnail_id = get_post_thumbnail_id($adventure->ID);
           $post_image_url = wp_get_attachment_image_src($post_thumbnail_id, 'large');
           ?>
             <li class="adventure-entry">
                <div class = "adventure-entry-wrapper">
                    <img class = "adventure-entry-pic" src = <?php echo $post_image_url[0];  ?> >
                
                    <div class = "adventure-info">
                 
                        <h3 class = "adventure-title">
                            <a href = "<?php echo $adventurelink ?>" ><?php echo $adventure->post_title; ?></a>
                        </h3>
                        <!-- <div class="button-container"> -->
                            <a class = "adventure-button" href = "<?php echo $adventurelink ?>">Read Entry</a>
                        <!-- </div> -->
                    </div>
                </div>
            </li>
       <?php } ?>
	   </ul>
	   <p class="all-adventures">
            <a href="http://localhost:8888/wordpress/adventures/" class="btn">More Adventures</a>
       </p>
   </div>
<!-- End of Adventure Loop -->
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();?>
