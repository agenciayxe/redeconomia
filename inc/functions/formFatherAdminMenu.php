<?php 
function father_menu() {
    if (current_user_can( 'manage_options' )) {
        add_menu_page(__('Mês dos Pais','menu-test'), __('Mês dos Pais','menu-test'), 'manage_options', 'form-father', 'father_options', 'dashicons-phone', 12 );
    }
}
add_action( 'admin_menu', 'father_menu' );
?>