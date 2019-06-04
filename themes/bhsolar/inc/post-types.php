<?php

// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


add_action('init', function(){

	// slider
	$labels = array(
		'name'          => 'Slider',
		'singular_name' => 'Slider',
		'add_new'       => 'Nuevo Slider',
		'add_new_item'  => 'Nuevo Slider',
		'edit_item'     => 'Editar Slider',
		'new_item'      => 'Nuevo Slider',
		'all_items'     => 'Slider',
		'view_item'     => 'Ver Slider',
		'search_items'  => 'Buscar Slider',
		'not_found'     => 'No hay Slider.',
		'menu_name'     => 'Slider'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php?post_type=page',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'thumbnail' )
	);
	register_post_type( 'slider', $args );

	// Iconos
	$labels = array(
		'name'          => 'Iconos info',
		'singular_name' => 'Iconos info',
		'add_new'       => 'Nuevo Iconos info',
		'add_new_item'  => 'Nuevo Iconos info',
		'edit_item'     => 'Editar Iconos info',
		'new_item'      => 'Nuevo Iconos info',
		'all_items'     => 'Iconos info',
		'view_item'     => 'Ver Iconos info',
		'search_items'  => 'Buscar Iconos info',
		'not_found'     => 'No hay Iconos info.',
		'menu_name'     => 'Iconos info'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php?post_type=page',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'iconos' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor' )
	);
	register_post_type( 'iconos', $args );

	// Faqs
	$labels = array(
		'name'          => 'FAQ',
		'singular_name' => 'FAQ',
		'add_new'       => 'Nuevo FAQ',
		'add_new_item'  => 'Nuevo FAQ',
		'edit_item'     => 'Editar FAQ',
		'new_item'      => 'Nuevo FAQ',
		'all_items'     => 'FAQ',
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
		'show_in_menu'       => 'edit.php?post_type=page',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'faqs' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor' )
	);
	register_post_type( 'faqs', $args );

	// Iconos Redondos
	$labels = array(
		'name'          => 'Iconos Redondos',
		'singular_name' => 'Iconos Redondos',
		'add_new'       => 'Nuevo Iconos Redondos',
		'add_new_item'  => 'Nuevo Iconos Redondos',
		'edit_item'     => 'Editar Iconos Redondos',
		'new_item'      => 'Nuevo Iconos Redondos',
		'all_items'     => 'Iconos Redondos',
		'view_item'     => 'Ver Iconos Redondos',
		'search_items'  => 'Buscar Iconos Redondos',
		'not_found'     => 'No hay Iconos Redondos.',
		'menu_name'     => 'Iconos Redondos'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php?post_type=page',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'iconosround' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor' )
	);
	register_post_type( 'iconosround', $args );

});