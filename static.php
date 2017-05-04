<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if(is_admin()){
  $static_uri = fw()->extensions->get('admin-icons-diversity')->get_uri('/static');
  wp_enqueue_style('dashicon-fa-replacement', "$static_uri/css/font-awesome.css", array(), '4.7.0');
}
