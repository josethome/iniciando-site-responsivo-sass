<!DOCTYPE html>
<html lang="pt-br">
<head>   
	<meta charset="UTF-8">
	<title>Portfólio - Site com designer responsivo</title>

	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	

    <!-- Bootstrap SASS-CSS -->
    <link rel="stylesheet" href="css/<?php echo $style; ?>.css">
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="bower_components/wow/css/libs/animate.css">    
    <link rel="stylesheet" href="css/plugins.css">
    <!-- <link rel="stylesheet" href="bower_components/font-awesome/css/fontawesome.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	<link rel="icone" href="images/portfolio.png">	
</head>
<body>
	
	<?php include('includes/organisms/menu-responsivo.php'); ?>

	<div class="layout"> 	
		<header>
			<div class="container">
				<div class="logo wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">
					<a href="index.php">
						<img src="images/logo-portfolio.png" alt="Logotipo Portfólio">
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
							<a href="#"><i class="fab fa-facebook-f"></i></a>
						</li>

						<li>
							<a href="#"><i class="fab fa-github-alt"></i></a> 
						</li>
					</ul>
				</div>

				<h2><?php echo $chamada; ?></h2>
				<p class="lead">Portfólio Web Designer</p>	
			</div>	
		</header>
		<main>