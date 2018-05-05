<?php
/*
Plugin Name: Meetup Istanbul
Plugin URI: http://etom.com.tr/meetup-istanbul
Description: Meetup Plugin Gelistirme Ornegi
Version: 0.0.1
Author: ETOM
Author URI: http://etom.com.tr
License: GPLv2 or later
Text Domain: meetup-istanbul
*/

function meetup_istanbul_the_content($output)
{

  $output .= '<div style="border:1px solid red;">Bu Icerik Kaynak Gosterilmeden Kullanilamaz</div>';

  return $output;
}

add_filter( 'the_content' , 'meetup_istanbul_the_content' );

function meetup_istanbul_header() {
  echo '<!-- HERE -->';
}

add_action( 'wp_head' , 'meetup_istanbul_header' );

?>
