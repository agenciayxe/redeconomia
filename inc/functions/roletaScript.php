<?php 
function scriptRoleta() {
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/script-roleta.js', array(), '', true );
    wp_localize_script( 'scripts', 'roleta_object',
        array( 
            'location' => admin_url( 'admin-ajax.php' ),
            'action' => 'roleta',
            'name' => 'roletaSave', 
        )
    );
}
add_action( 'wp_enqueue_scripts', 'scriptRoleta' );
?>