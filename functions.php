<?php

// define constants
define( 'MD_CHILD_DIR', trailingslashit( get_stylesheet_directory() ) );
define( 'MD_CHILD_URL', trailingslashit( get_stylesheet_directory_uri() ) );

// include MD library and child theme files
require_once( get_template_directory() . '/lib/marketers-delight.php' );
require_once( 'loader.php' );

// run MD design mode (rebuilds dynamic CSS from style.php on every page load)
//md_compile_css();