<?php
/**
 * RED WordPress Widget Boilerplate
 *
 * The RED Widget Boilerplate is an organized, maintainable boilerplate for building widgets using WordPress best practices.
 *
 * Lightly forked from the WordPress Widget Boilerplate by @tommcfarlin.
 *
 * @package   Widget_Name
 * @author    Your Name <email@example.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2015 Your Name or Company Name
 *
 * @wordpress-plugin
 * Plugin Name:       Business-Hours-Widget
 * Plugin URI:        @TODO
 * Description:       Allow the site owner to change the store hours they display
 * Version:           1.0.0
 * Author:            Jorrin Bruns
 * Author URI:        https://github.com/CurlyBracketEffect/Project-04-Inhabitent
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}

function check_for_page_tree() {
 
    //start by checking if we're on a page
    if( is_page() ) {
     
        global $post;
     
        // next check if the page has parents
        if ( $post->post_parent ){
         
            // fetch the list of ancestors
            $parents = array_reverse( get_post_ancestors( $post->ID ) );
             
            // get the top level ancestor
            return $parents[0];
             
        }
         
        // return the id  - this will be the topmost ancestor if there is one, or the current page if not
        return $post->ID;
         
    }
 
}

// TODO: change 'Widget_Name' to the name of your plugin
class Business_Hours_Widget extends WP_Widget {

    /**
     * @TODO - Rename "widget-name" to the name your your widget
     *
     * Unique identifier for your widget.
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'Business_Hours_Widget';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, and instantiates the widget.
	 */
	public function __construct() {

		// TODO: update description
		parent::__construct(
			$this->get_widget_slug(),
			'Business Hours Widget',
			array(
				'classname'  => $this->get_widget_slug().'-class',
				'description' => 'Use this widget to update the store hours that are visible on your site.'
			)
		);

	} // end constructor

    /**
     * Return the widget slug.
     *
     * @since    1.0.0
     *
     * @return    Plugin slug variable.
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param array $args     The array of form elements
	 * @param array $instance The current instance of the widget
	 */
	public function widget( $args, $instance ) {

		if ( ! isset ( $args['widget_id'] ) ) {
         $args['widget_id'] = $this->id;
      }

		// go on with your widget logic, put everything into a string and …

		extract( $args, EXTR_SKIP );

		$widget_string = $before_widget;

		// Manipulate the widget's values based on their input fields
		$title = empty( $instance['title'] ) ? '' : apply_filters( 'widget_title', $instance['title'] );

		// ***not sure what this does
		$mon_fri_hours = empty( $instance['mon_fri_hours'] ) ? '' : apply_filters( 'widget_title', $instance['mon_fri_hours'] );
		$sat_hours = empty( $instance['sat_hours'] ) ? '' : apply_filters( 'widget_title', $instance['sat_hours'] );
		$sun_hours = empty( $instance['sun_hours'] ) ? '' : apply_filters( 'widget_title', $instance['sun_hours'] );
		 
		// TODO: other fields go here...

		ob_start();

		if ( $title ){
			$widget_string .= $before_title;
			$widget_string .= $title;
			$widget_string .= $after_title;
		}

		include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
		$widget_string .= ob_get_clean();
		$widget_string .= $after_widget;

		print $widget_string;

	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param array $new_instance The new instance of values to be generated via the update.
	 * @param array $old_instance The previous instance of values before the update.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['mon_fri_hours'] = strip_tags( $new_instance['mon_fri_hours'] );
		$instance['sat_hours'] = strip_tags( $new_instance['sat_hours'] );
		$instance['sun_hours'] = strip_tags( $new_instance['sun_hours'] );
		// TODO: Here is where you update the rest of your widget's old values with the new, incoming values

		return $instance;

	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param array $instance The array of keys and values for the widget.
	 */
	public function form( $instance ) {

		// TODO: Define default values for your variables, create empty value if no default
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => 'Business Hours Widget',
				'mon_fri_hours'=> '9am to 5pm',
				'sat_hours'=>'10am to 2pm',
				'sun_hours'=>'Closed'
			)
		);

		$title = strip_tags( $instance['title'] );
		$mon_fri_hours = strip_tags( $instance['mon_fri_hours'] );
		$sat_hours = strip_tags( $instance['sat_hours'] );
		$sun_hours = strip_tags( $instance['sun_hours'] );


		// TODO: Store the rest of values of the widget in their own variables
			
		// Display the admin form
		include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );

	} // end form

} // end class

// TODO: Remember to change 'Widget_Name' to match the class name definition
add_action( 'widgets_init', function(){
     register_widget( 'Business_Hours_Widget' );
});
?>