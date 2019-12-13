<?php 
	// ATIVANDO MENUS DINÂMICOS
	function register_my_menus() {
		register_nav_menus(
			array(
				'header-menu' => __('Menu do Topo')
			)
		);		
	}	
	add_action('init', 'register_my_menus');

	// MEUS POSTS TYPES
	function meus_posts_types() {
		// HABILIDADES
		register_post_type('habilidades',
			array(
				'labels'			=> array(
					'name'			=> __('Habilidades'),
					'singular_name' =>	__('Habilidade')
					),
				'public'			=> true,
				'has_archive'		=> true,
				'menu_icon'			=> 'dashicons-welcome-learn-more',
				'supports'			=>	array('title', 'thumbnail', 'page-attributes'),
				)
		);
	}
	add_action('init', 'meus_posts_types');

	// TAMANHOS DINÂMICOS PARA AS IMAGENS: THUMBNAILS
	function tamanhos_thumbs() {
		add_theme_support('post-thumbnails');
		add_image_size('portfolio-thumb', 265, 150, true);
	}
	add_action('after_setup_theme', 'tamanhos_thumbs');
