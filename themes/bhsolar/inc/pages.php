<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////

add_action('init', function(){
	
	// Blog
	if( ! get_page_by_path('blog') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Blog',
			'post_name'   => 'blog',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// Intro
	if( ! get_page_by_path('baner-home') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Banner home',
			'post_name'   => 'baner-home',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// Slider
	if( ! get_page_by_path('section-slider') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Sección slider',
			'post_name'   => 'section-slider',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// Video
	if( ! get_page_by_path('seccion-video') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Sección video',
			'post_name'   => 'seccion-video',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// Sección icono
	if( ! get_page_by_path('seccion-icono') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Sección icono',
			'post_name'   => 'seccion-icono',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// Sección iconos
	if( ! get_page_by_path('seccion-iconos') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Sección iconos',
			'post_name'   => 'seccion-iconos',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// Sección iconos redondos
	if( ! get_page_by_path('seccion-iconosround') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Sección iconos redondos',
			'post_name'   => 'seccion-iconosround',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// Faqs
	if( ! get_page_by_path('preguntas-frecuentes') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Preguntas frecuentes',
			'post_name'   => 'preguntas-frecuentes',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// Condiciones
	if( ! get_page_by_path('condiciones') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Condiciones',
			'post_name'   => 'condiciones',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

});