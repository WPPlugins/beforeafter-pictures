<?php
/* 
Plugin Name: Before/After Pictures
Plugin URI: http://www.ansichten-und-aussichten.de
Description: Before/After Pictures viewer
Author: Holger Stroeder
Version: 0.2.1
Author URI: http://www.ansichten-und-aussichten.de
*/
/*  Copyright 2011  Holger Stroeder

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

 if ( ! defined( 'WP_CONTENT_URL' ) )
       define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
 if ( ! defined( 'WP_CONTENT_DIR' ) )
       define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
 if ( ! defined( 'WP_PLUGIN_URL' ) )
       define( 'WP_PLUGIN_URL', WP_CONTENT_URL. '/plugins' );
 if ( ! defined( 'WP_PLUGIN_DIR' ) )
       define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
 if ( ! defined( 'WPMU_PLUGIN_URL' ) )
       define( 'WPMU_PLUGIN_URL', WP_CONTENT_URL. '/mu-plugins' );
 if ( ! defined( 'WPMU_PLUGIN_DIR' ) )
       define( 'WPMU_PLUGIN_DIR', WP_CONTENT_DIR . '/mu-plugins' );


//********************************************************************************

add_action( 'init', 'bap_load_plugin_textdomain' );

function bap_load_plugin_textdomain() {
	load_plugin_textdomain( 'bap', false, '/beforeafter-pictures/languages' );
}

function beforeafterpic_activate() {
	if( function_exists('add_option') ) {
		add_option( 'bap_linkfont', 'Verdana' );
		add_option( 'bap_linkfontsize', '85%' );
		add_option( 'bap_link_color', '#000000' );
		add_option( 'bap_link_visited_color', '#000000' );
		add_option( 'bap_link_hover_color', '#000000' );
		add_option( 'bap_link_active_color', '#000000' );
		add_option( 'bap_animateintro', 'true' );
		add_option( 'bap_introdelay', '1000' );
		add_option( 'bap_introduration', '1000' );
		add_option( 'bap_showfulllinks', 'true' );
		add_option( 'bap_slidertext', 'drag me' );
		add_option( 'bap_linkbeforetext', 'before' );
		add_option( 'bap_linkaftertext', 'after' );	
	}
}

register_activation_hook( __FILE__, 'beforeafterpic_activate' );

function beforeafterpic_deactivate() {
	if( function_exists('delete_option') ) {
		delete_option( 'bap_linkfont' );
		delete_option( 'bap_linkfontsize' );
		delete_option( 'bap_link_color' );
		delete_option( 'bap_link_visited_color' );
		delete_option( 'bap_link_hover_color' );
		delete_option( 'bap_link_active_color' );
		delete_option( 'bap_animateintro' );
		delete_option( 'bap_introdelay' );
		delete_option( 'bap_introduration' );
		delete_option( 'bap_showfulllinks' );
		delete_option( 'bap_slidertext' );
		delete_option( 'bap_linkbeforetext' );
		delete_option( 'bap_linkaftertext' );	
	}
}

register_deactivation_hook( __FILE__, 'beforeafterpic_deactivate' );

function add_beforeafterpics_button() {
   // Don't bother doing this stuff if the current user lacks permissions
   if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
     return;
 
   // Add only in Rich Editor mode
   if ( get_user_option('rich_editing') == 'true') {
     add_filter("mce_external_plugins", "add_beforeafterpics_tinymce_plugin");
     add_filter('mce_buttons', 'register_beforeafterpics_button');
   }
}
 
function register_beforeafterpics_button($buttons) {
   array_push($buttons, "|", "beforeafterpics");
   return $buttons;
}
 
// Load the TinyMCE plugin : editor_plugin.js (wp2.5)
function add_beforeafterpics_tinymce_plugin($plugin_array) {
   $plugin_array['beforeafterpics'] = '/wp-content/plugins/beforeafter-pictures/editor_plugin.js';
   return $plugin_array;
}
 
function my_refresh_mce($ver) {
  $ver += 3;
  return $ver;
}

// init process for button control
add_filter( 'tiny_mce_version', 'my_refresh_mce');
add_action('init', 'add_beforeafterpics_button');

//***************************************************************************************


/**
	* Admin Paneel
**/
function beforeafterpics_admin() {  
    include('admin/beforeafterpics_import_admin.php');  
}

function beforeafterpics_admin_actions() 
    {
        add_options_page("Before/After-Pictures", "Before/After-Pictures", 1, "Before/After-Pictures", "beforeafterpics_admin");
    }

add_action('admin_menu', 'beforeafterpics_admin_actions');

/**
	* Load inline css
**/
function beforeafterpics_inline_style() {

  $bap_linkfont           = get_option('bap_linkfont');  
  if ( $bap_linkfont == '' ) {
    $bap_linkfont       = 'Verdana';  
  } 
  
  $bap_linkfontsize       = get_option('bap_linkfontsize');  
  if ( $bap_linkfontsize == '' ) {
    $bap_linkfontsize     = '85%';  
  } 

  $bap_link_color         = get_option('bap_link_color');  
  if ( $bap_link_color == '' ) {
    $bap_link_color       = '#000000';  
  } 
  $bap_link_visited_color = get_option('bap_link_visited_color');  
  if ( $bap_link_visited_color == '' ) {
    $bap_link_visited_color = '#000000';  
  } 

  $bap_link_hover_color   = get_option('bap_link_hover_color');  
  if ( $bap_link_hover_color == '' ) {
    $bap_link_hover_color = '#000000';  
  } 

  $bap_link_active_color  = get_option('bap_link_active_color');
  if ( $bap_link_active_color == '' ) {
    $bap_link_active_color = '#000000';  
  } 

?>
<style type="text/css">
    #ba-container {
        margin-left:auto;
        margin-right:auto;
    }
    
    #ba-container + div.balinks {
        margin: 0 auto;
    }

  .bflinks { 
             font-family:'<?php echo $bap_linkfont; ?>';
             font-size:<?php echo $bap_linkfontsize; ?>; }
             .bflinks a:link { color:'<?php echo $bap_link_color; ?>'; }
             .bflinks a:visited { color:'<?php echo $bap_link_visited_color; ?>'; }
             .bflinks a:hover { color:'<?php echo $bap_link_hover_color; ?>'; }
             .bflinks a:active { color:'<?php echo $bap_link_active_color; ?>'; }
</style>
<?php
}

add_action('wp_head', 'beforeafterpics_inline_style');

/**
	* Load Javascript libraries
**/

function beforeafterpics_scripts(){
  if (!is_admin()) {
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-min',          WP_PLUGIN_URL . '/beforeafter-pictures/js/jquery.min-1.4.4.js' );
    wp_enqueue_script('jquery-ui-min',       WP_PLUGIN_URL . '/beforeafter-pictures/js/jquery-ui.min-1.8.5.js');
    wp_enqueue_script('jquery-beforeafter',  WP_PLUGIN_URL . '/beforeafter-pictures/js/jquery.beforeafter-1.2.js');
  }
}

add_action('init', 'beforeafterpics_scripts');

/**
	* Before after short code
**/
function beforeafterpics_shortcode($atts, $content) {
    extract( shortcode_atts( array(
             'id'            => 1,
             'image_before'  => '',
             'image_after'   => '',
             'img_width'     => 270,
             'img_height'    => 490,
             'animateintro'  => '',
             'introdelay'    => '',
             'introduration' => '',
             'showfulllinks' => '',
			 ), $atts ) );
  //Only execute the shortcode on a single post/page
  if (is_single() or is_page()) {

      if ( $animateintro == '' ) {
        $animateintro       = get_option('bap_animateintro');  
      } 
      if ( $animateintro == '' ) {
        $animateintro       = 'true';  
      } 

      if ( $introdelay == '' ) {
        $introdelay         = get_option('bap_introdelay');  
      } 
      if ( $introdelay == '' ) {
        $introdelay         = '1000';  
      } 

      if ( $introduration == '' ) {
        $introduration      = get_option('bap_introduration');  
      } 
      if ( $introduration == '' ) {
        $introduration      = '1000';  
      } 

      if ( $showfulllinks == '' ) {
        $showfulllinks      = get_option('bap_showfulllinks');  
      } 
      if ( $showfulllinks == '' ) {
        $showfulllinks      = 'true';  
      } 

      if ( $slidertext == '' ) {
        $slidertext         = get_option('bap_slidertext');  
      } 
      if ( $slidertext == '' ) {
        $slidertext         = 'drag me';  
      } 

      if ( $linkbeforetext == '' ) {
        $linkbeforetext = get_option('bap_linkbeforetext');  
      } 
      if ( $linkbeforetext == '' ) {
        $linkbeforetext = 'before';  
      } 

      if ( $linkaftertext == '' ) {
        $linkaftertext = get_option('bap_linkaftertext');  
      } 
      if ( $linkaftertext == '' ) {
        $linkaftertext = 'after';  
      } 

      $imagepath = WP_PLUGIN_URL.'/beforeafter-pictures/images/';

      $script_out  = "" ;
      $script_out .= "\n" . "<script type='text/javascript'>" .
                     "\n" . "/* <![CDATA[ */" .
                     "\n" . "jQuery(document).ready(function($){ " . "\n" . "jQuery('#bap-container" . $id . "').beforeAfter({" .
                     "animateIntro: "       . $animateintro     . ", " . "\n" .
                     "introDelay: "         . $introdelay       . ", " . "\n" .
                     "introDuration: "      . $introduration    . ", " . "\n" .
                     "showFullLinks: "      . $showfulllinks    . ", " . "\n" .
                     "imagePath: '"         . $imagepath        . "', " . "\n" .
					 "sliderText: '"        . $slidertext       . "', " . "\n" .
                     "linkBeforeText: '"    . $linkbeforetext   . "', " . "\n" .
                     "linkAfterText: '"     . $linkaftertext    . "' " . "\n" .					 
                     "});" . "\n" . "});" . "\n" . "/* ]]> */" . "\n" . "</script>" . "\n" . "\n";
					 
      if ($beforeafterpics_content==""){
        $beforeafterpics_content = $script_out;    
        $beforeafterpics_content .= "<div id='bap-container" . $id . "'><div>";
        $beforeafterpics_content .= "<img src='" . $image_before . "' />" ;
        $beforeafterpics_content .= "</div><div>";
        $beforeafterpics_content .= "<img src='" . $image_after . "' />" ;
        $beforeafterpics_content .= "</div></div><p><p>";
      }
      
  }else {
    //return the content as is 
    $beforeafterpics_content =  $content;
  } 
  
  return  do_shortcode($beforeafterpics_content);
}


add_shortcode('beforeafterpics', 'beforeafterpics_shortcode');

/**
	* Add quick tag for normal editor
**/

function beforeafterpic_quicktag_footer(){
	echo '<script type="text/javascript">'."\n";
	echo "\t".'function insertbeforeafterpic_qt( myField ) {'."\n";
	echo "\t\t".'edInsertContent(myField, "[beforeafterpics id=\'1\' image_before=\'\' image_after=\'\' animateintro=\'\' introdelay=\'\' introduration=\'\' showfulllinks=\'\' /]");'."\n";
	echo "\t".'}'."\n";
	echo "\t".'if(document.getElementById("ed_toolbar")){'."\n";
	echo "\t\t".'qt_toolbar = document.getElementById("ed_toolbar");'."\n";
	echo "\t\t".'edButtons[edButtons.length] = new edButton("ed_beforeafterpics","beforeafterpics","","","");'."\n";
	echo "\t\t".'var qt_button = qt_toolbar.lastChild;'."\n";
	echo "\t\t".'while (qt_button.nodeType != 1){'."\n";
	echo "\t\t"."\t".'qt_button = qt_button.previousSibling;'."\n";
	echo "\t".'}'."\n";
	echo "\t".'qt_button = qt_button.cloneNode(true);'."\n";
	echo "\t".'qt_button.value = "Before/After Pictures";'."\n";
	echo "\t".'qt_button.title = "Insert Before/After Pictures Tag";'."\n";
	echo "\t".'qt_button.onclick = function () { insertbeforeafterpic_qt( edCanvas); }'."\n";
	echo "\t".'qt_button.id = "ed_beforeafterpics";'."\n";
	echo "\t".'qt_toolbar.appendChild(qt_button);'."\n";
	echo "\t".'}'."\n";
	echo '</script>'."\n";
}
add_action('admin_footer', 'beforeafterpic_quicktag_footer');

?>
