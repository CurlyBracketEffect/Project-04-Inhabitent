<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div id="mainFooterContainer">
          <div class="contact-info">
            <h3>Contact Info</h3>  
            <h5><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@inhabitent.com">  info@inhabitent.com</a></h5>
            <h5><i class="fa fa-phone"></i><a href="tel:5553434567891">  778-456-7891</a></h5>
            <i class="fa fa-facebook-square"></i>
            <i class="fa fa-twitter-square"></i>
            <i class="fa fa-google-plus-square"></i>
        </div><!-- .contact-info -->
	  <div id="footer-sidebar" class="secondary">
<div id="footer-sidebar1">
<?php
if (is_active_sidebar('footer-sidebar-1')) {
    dynamic_sidebar('footer-sidebar-1');
}
?>
</div>
</div>

      <div class="upper-right-footer">
        <a href="http://localhost:3000/wordpress/">
          <img id="logo" src="<?php echo get_template_directory_uri(); ?>/inhabitant-assets/images/logos/inhabitent-logo-text.svg"/>
        </a>
	  </div>
</div>
      <div class="end-copyright">
        <h5>COPYRIGHT  <i class="fa fa-copyright"></i>  2019 INHABITENT</h5>
      </div><!--.end-copyright-->
    </footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer();?>
	</body>
</html>
