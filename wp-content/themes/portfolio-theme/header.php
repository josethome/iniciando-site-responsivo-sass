<!DOCTYPE html>
<html lang="pt-br">
<head>   
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); echo " - "; bloginfo('description'); ?></title>

	<!-- Bootstrap SASS-CSS --> <!-- Link abaixo: chama o tema wordpress ativo -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/<?php global $style; echo $style; ?>.css">
   	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/geral.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bower_components/wow/css/libs/animate.css">

    <?php if(is_front_page()) : ?>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bower_components/slick-carousel/slick/slick-theme.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bower_components/slick-carousel/slick/slick.css">
    <?php endif; ?>

	<?php if(is_page('portfolio')) : ?>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bower_components/lightbox2/dist/css/lightbox.min.css">
	<?php endif; ?>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/plugins.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bower_components/font-awesome/css/fontawesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	<link rel="icone" href="<?php bloginfo('template_url'); ?>/images/portfolio.png">

	<?php wp_head(); ?>	
</head>
<body <?php body_class(); ?>>
	
	<?php include('includes/organisms/menu-responsivo.php'); ?>

	<div class="layout">

		<style>
			<?php if(get_the_post_thumbnail()) : ?>
				header {
					background-image: url('<?php the_post_thumbnail_url(); ?>');
				}
			<?php else : ?>
				header {
					background-image: url('<?php bloginfo('template_url'); ?>/images/fundo-pagina-inicial.jpg');
				}
			<?php endif; ?>
		</style>

		<header>
			<div class="container">
				<div class="logo wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">
					<a href="<?php bloginfo('url'); ?>">
						<img src="<?php bloginfo('template_url');  ?>/images/logo-portfolio.png" alt="Logotipo Portfólio">
					</a>			
				</div>

				<div class="links">
					
					<?php include('includes/organisms/menu.php'); ?>

					<!-- Menu toggle -->
					<a class="toggle" href="javascript:;"> 				
						<span></span>
						<span></span>
						<span></span>
					</a>

					<ul class="social">
						<li>
							<a href="#"><i class="fab fa-facebook-f" title="Facebook"></i></a>
						</li>

						<li>
							<a href="#"><i class="fab fa-github-alt" title="Git Hub"></i></a>
						</li>
					</ul>
				</div>

				<div class="slide">	
					<?php 
						query_posts('post_type=slide');
						while(have_posts()): the_post(); 
					?>
						<div class="item">						
							<h2><?php echo $chamada; ?></h2>
							<p class="lead"><?php the_content(); ?></p>
						</div>					
					<?php 
						endwhile; 
						wp_reset_query();
					?>						
				</div>
				
			</div>	
		</header>
		<main>