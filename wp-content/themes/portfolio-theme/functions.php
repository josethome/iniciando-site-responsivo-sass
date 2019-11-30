<?php 	
	// ATIVANDO SUPORTE A IMAGEM DESTACADA	
	add_theme_support('post-thumbnails');

	//ATIVANDO MENUS DINÂMICOS
	function register_portfolio_menus() {
		register_nav_menus(
			array(
				'header-menu' => __('Menu do Topo')
			)
		);		
	}
	
	add_action('init', 'register_portfolio_menus');