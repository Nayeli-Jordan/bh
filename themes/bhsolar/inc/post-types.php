<?php

// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


add_action('init', function(){

	// Anuncio
	$labels = array(
		'name'          => 'Anuncio',
		'singular_name' => 'Anuncio',
		'add_new'       => 'Nuevo anuncio',
		'add_new_item'  => 'Nuevo anuncio',
		'edit_item'     => 'Editar anuncio',
		'new_item'      => 'Nuevo anuncio',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver anuncio',
		'search_items'  => 'Buscar anuncio',
		'not_found'     => 'No hay anuncio.',
		'menu_name'     => 'Anuncio'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'add' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title' )
	);
	register_post_type( 'add', $args );	

	// Faqs
	$labels = array(
		'name'          => 'FAQ',
		'singular_name' => 'FAQ',
		'add_new'       => 'Nuevo FAQ',
		'add_new_item'  => 'Nuevo FAQ',
		'edit_item'     => 'Editar FAQ',
		'new_item'      => 'Nuevo FAQ',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver FAQ',
		'search_items'  => 'Buscar FAQ',
		'not_found'     => 'No hay FAQ.',
		'menu_name'     => 'FAQ'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'faqs' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor' )
	);
	register_post_type( 'faqs', $args );	

});