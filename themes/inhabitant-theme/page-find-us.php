<div class="find-us-header">
<?php
/**FIND US PAGE
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
</div>
<div class="flex-wrapper">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!-- <div class="find-us-page">
				<div class="find-us-content"> -->

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'find-us' ); ?>

					<?php endwhile; // End of the loop. ?>

					<h1 class="page-title">Find Us</h1>

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.683120375542!2d-123.14035688455519!3d49.26345178005446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac457%3A0x3aea6428fa30dc6a!2s1490+W+Broadway%2C+Vancouver%2C+BC+V6H+4E8!5e0!3m2!1sen!2sca!4v1542656385265" width="760" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					<h2 class="headings">We take camping very seriously.</h2>

					<p class="blurb">Inhabitent Camping Supply Co. knows what it takes to outfit a camping trip right. From flannel shirts to artisanal axes, we’ve got your covered. Please contact us below with any questions comments or suggestions.</p>                
					<div class="contact-form">
					<h2 class="headings">Send Us Email!</h2>
					<form>
						<p class="name">
							<label for = "name">Name<span class="required">*</span></label><br>
                            <input type = "text" name = "name" value-size = "40" required><br>
                        </p>
						<p class="email">
							<label for = "email">Email<span class="required">*</span></label><br>
                            <input type = "text" name = "email" value-size = "40" required><br>
						</p>
						<p class="subject">
							<label for = "subject">Subject<span class="required">*</span></label><br>
                            <input type = "text" name = "subject" value-size = "40" required><br>
						</p>
						<p class="message">
							<label for = "message">Message<span class="required">*</span></label><br>
                            <textarea type = "text" name = "message" cols = "40" rows="10" required></textarea>
						</p>
							<input type = "submit" value="submit" id = "submit">
        
                    </form>
                </div>
				<!-- </div>
			</div> -->

		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
