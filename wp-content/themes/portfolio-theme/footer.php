</main>
		<footer>
			<div class="logo-rodape">
				<a href="<?php bloginfo('url'); ?>">
					<img src="<?php bloginfo('template_url');  ?>/images/logo-portfolio.png" alt="Logotipo Portfólio">
				</a>
				<p>Horário de atendimento: segunda a sexta-feira
					<strong> das </strong> 9:00h <strong> às </strong>  18:00h
				</p>
				<p>Copyright &copy; 2019-<?php echo date('Y'); ?>	 Portfólio Developer - Criado por José A. Thomé - Todos os direitos reservados. 
					<a href="mailto:<?php bloginfo('admin_email'); ?>"><?php bloginfo('admin_email'); ?>						
					</a>
				</p>	
			</div>		
		</footer>
	</div>

	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<script src="<?php bloginfo('template_url');  ?>/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url');  ?>/bower_components/wow/dist/wow.min.js"></script>

	<?php if(is_page('portfolio')) : ?>
	<script src="<?php bloginfo('template_url');  ?>/bower_components/lightbox2/dist/js/lightbox.min.js"></script>
	<?php endif; ?>	

	<?php if(is_front_page()) : ?>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bower_components/slick-carousel/slick/slick.min.js">			
	</script>
	<?php endif; ?>
	
	<?php if(is_front_page()) : ?>
	<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>	
	<?php endif; ?>

	<script>
		$(function() {			
			$('.toggle').click(function() {
				$('.layout').toggleClass('ativo');
				$('.menu-responsivo').toggleClass('ativo');
				$(this).toggleClass('ativo');				
			});
			new WOW().init();

			// TO DO: TRECHO DE CÓDIGO FALHA NOS LINKS DO MENU				
		});			
	</script>
	<?php wp_footer(); ?>
</body>
</html>