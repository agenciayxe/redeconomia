<?php 
function script_father() {
    // $idPage = get_the_ID();
    global $post;
    $slugPage = $post->post_name;
    if ($slugPage == 'dia-das-criancas') {
        wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/script-father.js', array(), '', true );
        wp_localize_script( 'scripts', 'ajax_object',
            array( 
                'location' => admin_url( 'admin-ajax.php' ),
                'contact' => 'father',
                'save' => 'save_contact', 
            )
        );
    }
}
add_action( 'wp_enqueue_scripts', 'script_father' );
?>