<?php
/**ABOUT PAGE
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section class="about-hero">
			<h1>About</h1>
		 </section>			
		 <?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'about' ); ?>

			<?php endwhile; // End of the loop. ?>
			<div class="about-content">
				<h2 class="section-heading">Our Story</h2>
				<p class="our-content">Inhabitent Camping Supply Co. has been Vancouver camping supply icon for more than two whole months! Customers often comment on the bustle of activity they see in store…that’s where the magic happens every day.<br><br>We want to bridge the gap between the comfort of city life and the lovely Instagram-worthiness of the great outdoors that surround us. We sell gear that’s fun and functional. So much fun, in fact, that you’ll want to pitch a tent inside your one-bedroom apartment so you can use it every day.</p>
				
				<h2 class="section-heading">Our Team</h2>
				<p class="our-content">Inhabitent Camping Supply Co.’s staff is made up of an amazing team of inspired retail associates. We really know our stuff when it comes to travel hammocks and campfire cooking gadgets. From a provincial park campground to the back-country, our staff knows what you need to outfit your outdoor outing.<br><br>Our shop is nestled away in a lovely little corner of Vancouver. Pop in, say hi, and try out our tents!</p>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
