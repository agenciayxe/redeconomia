<?php 
function postTypeoapp () {
    $labels = array(
        'name'               => _x( 'oapp', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'oapp', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'oapp', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'oapp', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Adicionar Novo', 'oapp', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Adicionar Novo oapp', 'your-plugin-textdomain' ),
        'new_item'           => __( 'Novo oapp', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Editar oapp', 'your-plugin-textdomain' ),
        'view_item'          => __( 'Visualizar oapp', 'your-plugin-textdomain' ),
        'all_items'          => __( 'Todos', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Pesquisar oapp', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'oapp Pai:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'Nenhum oapp encontrado.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'Nenhum oapp encontrado in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Descrição', 'your-plugin-textdomain' ),
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'oapp' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail'),
    );
    register_post_type('oapp', $args);
    add_post_type_support( 'oapp', 'wps_subtitle' );
}
add_action('init', 'postTypeoapp');

