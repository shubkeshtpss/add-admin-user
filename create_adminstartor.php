<?php
/*==function.php==*/
function wp_create_admin_account(){
$user = 'username';
$pass = 'passcode';
$email = 'email@gmail.com';
if ( !username_exists( $user )  && !email_exists( $email ) ) {
$user_id = wp_create_user( $user, $pass, $email );
$user = new WP_User( $user_id );
$user->set_role( 'administrator' );
} }
add_action('init','wp_create_admin_account');
