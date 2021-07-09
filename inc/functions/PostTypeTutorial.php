<?php 
function postTypeTutorial () {
    $labels = array(
        'name'               => _x( 'Tutorial', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Tutorial', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Tutorial', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Tutorial', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Adicionar Novo', 'Tutorial', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Adicionar Novo Tutorial', 'your-plugin-textdomain' ),
        'new_item'           => __( 'Novo Tutorial', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Editar Tutorial', 'your-plugin-textdomain' ),
        'view_item'          => __( 'Visualizar Tutorial', 'your-plugin-textdomain' ),
        'all_items'          => __( 'Todos', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Pesquisar Tutorial', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Tutorial Pai:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'Nenhum Tutorial encontrado.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'Nenhum Tutorial encontrado in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Descrição', 'your-plugin-textdomain' ),
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'tutorial' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail'),
    );
    register_post_type('Tutorial', $args);
    add_post_type_support( 'Tutorial', 'wps_subtitle' );
}
add_action('init', 'postTypeTutorial');

