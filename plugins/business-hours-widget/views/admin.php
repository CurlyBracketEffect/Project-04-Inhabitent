<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>
    <!-- Mon-Fri Hours field -->
		<p>
        <label for="<?php echo $this->get_field_id( 'monday_friday' ); ?>">Monday-Friday:</label>
        <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'mon_fri_hours' ); ?>" name="<?php echo $this->get_field_name( 'mon_fri_hours' ); ?>" value="<?php echo esc_attr( $mon_fri_hours ); ?>">
		</p>
		<!-- Saturday Hours field -->
		<p>
        <label for="<?php echo $this->get_field_id( 'saturday' ); ?>">Saturday:</label>
        <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'sat_hours' ); ?>" name="<?php echo $this->get_field_name( 'sat_hours' ); ?>" value="<?php echo esc_attr( $sat_hours ); ?>">
		</p>
		<!-- Sunday Hours field -->
		<p>
        <label for="<?php echo $this->get_field_id( 'sunday' ); ?>">Sunday:</label>
        <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'sun_hours' ); ?>" name="<?php echo $this->get_field_name( 'sun_hours' ); ?>" value="<?php echo esc_attr( $sun_hours ); ?>">
    	</p>

</div>
