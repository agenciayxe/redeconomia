<?php 
function mother_menu() {
    if (current_user_can( 'manage_options' )) {
        add_menu_page(__('Mês das Mâes','menu-test'), __('Mês das Mâes','menu-test'), 'manage_options', 'form-mother', 'mother_options', 'dashicons-phone', 12 );
    }
}
add_action( 'admin_menu', 'mother_menu' );
?>