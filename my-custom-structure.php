<?php
/*
Plugin Name: My Custom Structure
Version: 0.1.0
Description: Provides the content architecture for my site
Author: Peter Hebert
Author URI: https://rexrana.ca
Text Domain: structure
*/

define('MY_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// miscellaneous custom functions
include_once('inc/misc.php');

// POST TYPES AND TAXONOMY
/* generated by WP-CLI scaffold */
include_once('post-types/film.php');
include_once('taxonomies/genre.php');
/* generated by GenerateWP */
// include_once('post-types/post-types.php');
// include_once('taxonomies/taxonomy.php');


// DEVELOPER LIBRARIES
/* note - only use one of ACF or CMB2 - not both  */

// Advanced Custom Fields
/* hide ACF from WordPress admin dashboard */
 // define( 'ACF_LITE', true );
/* include ACF as library */
// if (file_exists( dirname(__FILE__).'/lib/advanced-custom-fields/acf.php' )) {
//   include_once('lib/advanced-custom-fields/acf.php');
// }

// CMB2
// if (file_exists( dirname(__FILE__).'/lib/cmb2/init.php' )) {
//     include_once('lib/cmb2/init.php');
// }
// include_once('lib/cmb2-field-types/text-number.php');


// METABOXES AND FIELDS
/* using WordPress core functionality */
include_once('inc/wp-fields.php');
/* using ACF */
// include_once('inc/acf-fields.php');
/* using CMB2  */
// include_once('inc/cmb2-metaboxes.php');
