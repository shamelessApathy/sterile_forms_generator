<?php
/*
Plugin Name: Sterile Forms Generator
Plugin URI: http://slcutahdesign.com
Description: a plugin that will create forms, take the input, sterilize and forward
Version: 0.1
Author: Brian Moniz
Author URI: http://slcutahdesign.com
License: GPL2
*/


function first_func()
{
	echo "We did it!";
}
add_shortcode( 'first', 'first_func' );

function show_form()
{
	$form = 
	'<div class="sfg-form-holder">
	<form action="/wp-content/plugins/sterile_forms_generator/catch.php" method="POST" name="inquiry-form">
		<label>Email</label>
		<input name="email" type="text" placeholder="Please include your email"/>
		<label>Interested in which service?</label>
		<select name="service">
			<option name="default" selected="selected">Please choose one...</option>
			<option name="website">Website Creation</option>
			<option name="seo">Search Engine Optimization</option>
			<option name="custom-wordpress">Custom Wordpress Plugin, Widget, Theme</option>
			<option name="custom-application">Custom Application Development</option>
			<option name="website-to-phone">Website to Phone App</option>
			<option name="online-marketplace">Online Marketplace Optimation</option>
			<option name="social-media">Social Media Marketing</option>
			<option name="other">Other (please explain below)</option>
		</select>
		<label>More Information</label>
		<textarea name="description" placeholder="Type a detailed description of what you would like from our services here"></textarea>
		<button type="submit">Submit</button>
	</form>
	</div>';
wp_enqueue_style('sterile_forms_generator', '/wp-content/plugins/sterile_forms_generator/sfg_styles.css');
echo $form;
}
add_shortcode( 'show_form', 'show_form');





?>
