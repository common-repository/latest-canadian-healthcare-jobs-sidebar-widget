<?php
/*
Plugin Name: Latest Canadian Healthcare Jobs sidebar widget
Plugin URI: http://www.hospital.ca/data
Description: Displays a live map of Canada showing the latest jobs posted on the Hospital.ca medical job listing service.
Version: 1.00
Author: JAMBA Inc.
Author URI: http://www.jamba.ca
*/

class HospitalCA_latestjobs_widget extends WP_Widget {

	function HospitalCA_latestjobs_widget() {
		$widget_ops = array('classname' => 'HospitalCA_latestjobs_widget', 'description' => 'A live, clickable map of Canada showing the latest healthcare jobs posted on Hospital.ca');
		$this->WP_Widget('HospitalCA_latestjobs_widget', 'Canadian Healthcare Jobs Widget', $widget_ops);
	}
 
	function form($instance) {
		$instance = wp_parse_args((array) $instance, array( 'color scheme' => '' ));
		$color_scheme = $instance['color scheme'];
		?>
		<p><label for="<?php echo $this->get_field_id('color scheme'); ?>">Color scheme: 
		<select class="widefat" id="<?php echo $this->get_field_id('color scheme'); ?>" name="<?php echo $this->get_field_name('color scheme'); ?>">
		<?php if (attribute_escape($color_scheme) == "Dark") { ?>
			<option value="Light">Light</option>
			<option value="Dark" selected>Dark</option>
		<?php } else { ?>
			<option value="Light" selected>Light</option>
			<option value="Dark">Dark</option>
		<?php } ?>
		</select>
		</label></p>
		<?php
	}
 
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['color scheme'] = $new_instance['color scheme'];
		return $instance;
	}
 
	function widget($args, $instance) {
		extract($args, EXTR_SKIP);
		echo $before_widget;

		$color_scheme = $instance['color scheme'];
		if ($color_scheme == "Dark") {
			$parameter = "?dark";
		} else {
			$parameter = "";
		}
		$linkcolor = "DF0000";
		
		echo '<div><iframe src="http://www.hospital.ca/data/map_latestjobs'.$parameter.'" style="border: 1px #999999 solid;" name="HospitalCA-LatestJobMap" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="139px" width="160px"></iframe><br><span style="font-family: Helvetica, Arial, sans-serif; font-size: 11px; line-height: 14px;"><a href="http://www.hospital.ca" title="Canadian healthcare and medical job listings" style="color: #'.$linkcolor.'; text-decoration: none;">Hospital.ca</a> | Latest health jobs</span></div>';

		echo $after_widget;
	}

}

add_action( 'widgets_init', create_function('', 'return register_widget("HospitalCA_latestjobs_widget");') );
