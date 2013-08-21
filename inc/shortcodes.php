<?php
/* ==========================================================================
   SHORTCODES / TABLE OF CONTENTS
   ========================================================================== 

    $ENQUEUE STYLES AND SCRIPTS
    $THEME SUPPORT - thumbnails, post-formats
    $THEME CUSTOMIZER - text-colors, logo-upload
    $REGISTER NAV MENUS - register top, main and foot-nav
    $WIDGET AREAS - sidebar, footer
    $POST / PAGE NAVIGATION - page-navigation, single-post-navigation
    $MISC - excerpt, editor-styles, etc
*/

/* ==========================================================================
   $SHORTCODE CONFIGURATION
   ========================================================================== */
   
/* Enable shortcodes in widget areas
   ========================================================================== */
	add_filter( 'widget_text', 'do_shortcode' );
	
/* Remove WP auto formatting in shortcodes IS THIS RIGHT ?
   ========================================================================== */
	remove_filter( 'the_content', 'wpautop' );
	add_filter( 'the_content', 'wpautop' , 99);
	add_filter( 'the_content', 'shortcode_unautop',100 );


/* ==========================================================================
   $LEAD Use: [lead]...[/lead]
   ========================================================================== */
function lead_shortcode( $atts , $content = null ) {

	// Code
	return '<p class="lead">' . $content . '</p>';
}
add_shortcode( 'lead', 'lead_shortcode' );

/* ==========================================================================
   $DIVIDER Use: [hr], [divider]
   ========================================================================== */
function hr_shortcode($atts, $content = null) {

   return '<div class="hr clearfix"></div>';
} 
add_shortcode( 'hr', 'hr_shortcode' );

function divider_shortcode($atts, $content = null) {

   return '<div class="divider clearfix"></div>';
}
add_shortcode( 'divider', 'divider_shortcode' );

/* ==========================================================================
   $BUTTON SHORTCODE Use: [button style="red" link="http://www.example.com/" target="_blank"]...[/button]
   ========================================================================== */
function button_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'style' => '',
			'link' => '',
			'target' => '',
		), $atts )
	);

	// Code
	return '<a href="' . $link . '" class="btn ' . $style . '" target="' . $target . '">' . $content . '</a>';

}
add_shortcode( 'button', 'button_shortcode' );

/* ==========================================================================
   $BUTTON GROUP  untested
   ========================================================================== */
function buttongrp_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'style' => '', //rounded or not ?!
		), $atts )
	);

	// Code
	return '<ul class="btn-group ' .$style. '">' .do_shortcode($content). '</ul>';

}
add_shortcode( 'button-group', 'buttongrp_shortcode' );

function buttongrpitm_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'style' => '',
			'link'	=> '',
			'target'=> '',
		), $atts )
	);

	// Code
	return '<li><a href="' .$link. '" class="btn ' .$style. '" target="' .$target. '">' .do_shortcode($content). '</a></li>';

}
add_shortcode( 'button-group-item', 'buttongrpitm_shortcode' );
	
/* ==========================================================================
   $DROPDOWN BUTTON SHORTCODE 
   
   Use:	[dropdown-button style="red radius" text="Button-Text"]
			[dropdown-item link="http://www.example.com/" seperator="true" target="_blank"]...[/dropdown-item]
		[/dropdown-button]
   ========================================================================== */
function dropdownbtn_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'style' => '',
			'text'	=> 'Dropdown',
		), $atts )
	);

	// Code
	return '<div class="dropdown-btn"><button type="button" class="btn ' .$style. '">' .$text. ' <i class="icon-caret-down"></i></button><ul>' .do_shortcode($content). '</ul></div>';

}
add_shortcode( 'dropdown-button', 'dropdownbtn_shortcode' );

function dropdownitm_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'link' => '',
			'seperator' => '',
			'target' => '_blank',
		), $atts )
	);
	
	if ( $seperator == 'true' ) {
		$seperator = "sep"; // If seperator is set true, add the class .sep
	}
	
	// Code
	return '<li class="' . $seperator . '"><a href="' . $link . '" target="' . $target . '">' . $content . '</a></li>';

}
add_shortcode( 'dropdown-item', 'dropdownitm_shortcode' );

/* ==========================================================================
   $TOGGLE BOX Use: [togglebox text="Clickable heading"]...[/togglebox]
   ========================================================================== */
function togglebox_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'text' => 'Togglebox',
		), $atts )
	);

	// Code
	return '<dl class="toggle-box"><dt class="toggle"><span>' . $text . ' <i class="icon-minus"></i></span></dt><dd class="content">' . $content . '</dd></dl>';
}
add_shortcode( 'togglebox', 'togglebox_shortcode' );

/* ==========================================================================
   $BADGES Use: [badge style="red"]...[/badge]
   ========================================================================== */
function badge_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'style' => '',
		), $atts )
	);

	// Code
	return '<span class="badge ' .$style. '">' . $content . '</span>';

}
add_shortcode( 'badge', 'badge_shortcode' );

/* ==========================================================================
   $LABELS Use: [label style="red radius"]...[/label]
   ========================================================================== */
function label_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'style' => '',
		), $atts )
	);

	// Code
	return '<span class="label ' .$style. '">' . $content . '</span>';

}
add_shortcode( 'label', 'label_shortcode' );
   
/* ==========================================================================
   $POPOVER SHORTCODE Use: [popover style="red radius" text="Button-Text" position="bottom"]...[/popover]
   ========================================================================== */
function popover_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'style' => '', // Button style
			'text' => 'Popover', // Button text
			'position' => '', // Popover position etc bottom, defaults to top
		), $atts )
	);

	// Code
	return '<div class="popover ' . $position . '"><span class="popover-content"><span class="arrow"><i class="icon-caret-down icon-large"></i></span>' . $content . '</span><button type="button" class="btn ' .$style. '">' . $text . '</button></div>';
}
add_shortcode( 'popover', 'popover_shortcode' );
	
/* ==========================================================================
   $ALERT SHORTCODE Use: [alert style="red radius"]...[/alert]
   ========================================================================== 
*/
function alert_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'style' => '',
		), $atts )
	);
	
	// Code
	return '<div class="alert-box ' .$style. '">' . $content . '<span class="close"><i class="icon-remove"></i></span></div>';

}
add_shortcode( 'alert', 'alert_shortcode' );
   
/* ==========================================================================
   $PANEL SHORTCODE Use: [panel style="red radius"]...[/panel]
   ========================================================================== 
*/
function panel_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'style' => '',
		), $atts )
	);

	// Code
	return '<div class="panel ' .$style. '">' . $content . '</div>';

}
add_shortcode( 'panel', 'panel_shortcode' );

/* ==========================================================================
   $THUMBNAIL SHORTCODE Use: [thumbnail width="200px" link="http://www.example.com/" style="radius" title="the title attribute"] http://www.imagesource.com/image.jpg [/thumbnail]
   ========================================================================== 
*/
function img_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'width'		=> 'auto',
			'height'	=> 'auto',
			'link'		=> '',
			'target'	=> '_blank',
			'style'		=> '',
			'title'		=> '',
		), $atts )
	);
	
	$output = '';
	
	// Code
	if ( $link == '' )
		$output .= '<div class="thumbnail"><img src="' . $content . '" width="' . $width . '" height="' . $height . '" title="' . $title . '" alt="' . $title . '"></div>';
	else
		$output .= '<a href="' . $link. '" target="' . $target . '" class="thumbnail ' .$style. '" title="' . $title . '" alt="' . $title . '"><img src="' . $content . '" width="' . $width . '" height="' . $height . '" title="' . $title . '" alt="' . $title . '"></a>';
		
	return $output;
}
add_shortcode( 'thumbnail', 'img_shortcode' );

;?>