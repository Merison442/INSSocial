<?php
/**
* Redirect Buddypress Directories To Login Page For Non Logged in Users.
*/
function yzc_redirect_bp_directories_to_login_page() {

    if ( ! is_user_logged_in() && ( bp_is_groups_directory() || bp_is_members_directory() ) ) {
        
        // Get Buddypress Pages;
        $bp_pages = get_option( 'bp-pages' );
        
        // Get Redirection Url
        $redirect_url = youzify_get_login_page_url();
        
        wp_redirect( $redirect_url );
        exit();
    }
}

add_action( 'template_redirect', 'yzc_redirect_bp_directories_to_login_page' );