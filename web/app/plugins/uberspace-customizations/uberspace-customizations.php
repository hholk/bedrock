<?php
/*
Plugin Name: Site plugin for Uberspace related customizations
Description: Change a few things to run properly on Uberspace
*/

// Use the actual email address assigned to this user.
function uberspace_mail_from ($email ){
  return get_current_user() . '@' . php_uname('n');
}
add_filter( 'wp_mail_from', 'uberspace_mail_from' );
?>
