<?php
function registrar_post_projeto() {
    $labels = array(
        'name'               => 'Projetos',
        'singular_name'      => 'Projeto',
        'menu_name'          => 'Projetos',
        'name_admin_bar'     => 'Projeto',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Projeto',
        'new_item'           => 'Novo Projeto',
        'edit_item'          => 'Editar Projeto',
        'view_item'          => 'Visualizar Projeto',
        'all_items'          => 'Todos os Projetos',
        'search_items'       => 'Buscar Projetos',
        'not_found'          => 'Nenhum projeto encontrado.',
        'not_found_in_trash' => 'Nenhum projeto encontrado na lixeira.'
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'projeto' ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => null,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'menu_icon'   => 'dashicons-format-aside',
    );

    register_post_type( 'projeto', $args );
}
add_action( 'init', 'registrar_post_projeto' );
?>