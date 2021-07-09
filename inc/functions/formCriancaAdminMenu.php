<?php 
function crianca_menu() {
    if (current_user_can( 'manage_options' )) {
        add_menu_page(__('Mês das Criança','menu-test'), __('Mês das Criança','menu-test'), 'manage_options', 'form-crianca', 'crianca_options', 'dashicons-phone', 12 );
    }
}
add_action( 'admin_menu', 'crianca_menu' );
?>