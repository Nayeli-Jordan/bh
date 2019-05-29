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

});