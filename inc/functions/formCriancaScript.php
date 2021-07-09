<?php 
function script_crianca() {
    // $idPage = get_the_ID();
    global $post;
    $slugPage = $post->post_name;
    if ($slugPage == 'mes-das-crianca') {
        wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/script-crianca.js', array(), '', true );
        wp_localize_script( 'scripts', 'ajax_object',
            array( 
                'location' => admin_url( 'admin-ajax.php' ),
                'contact' => 'crianca',
                'save' => 'save_contact', 
            )
        );
    }
}
add_action( 'wp_enqueue_scripts', 'script_crianca' );
?>