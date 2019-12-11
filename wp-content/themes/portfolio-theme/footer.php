</main>
		<footer>
			<div class="logo-rodape">
				<a href="<?php bloginfo('url'); ?>">
					<img src="<?php bloginfo('template_url'); ?>/images/logo-portfolio.png" alt="Logotipo Portfólio">
				</a>
				<p>Horário de atendimento: segunda a sexta-feira
					<strong> das </strong> 9:00h <strong> às </strong>  18:00h
				</p>
				<p>Copyright &copy; 2019-<?php echo date('Y'); ?> Portfólio - Criado por José A. Thomé - Todos os direitos reservados.
					<a href="mailto:<?php bloginfo('admin_email'); ?>"><?php bloginfo('admin_email'); ?>						
					</a>
				</p>	
			</div>		
		</footer>
	</div>

	<script src="<?php bloginfo('template_url'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/bower_components/wow/dist/wow.min.js"></script>	
	<script>
		$(function() {			
			$('.toggle').click(function() {
				$('.layout').toggleClass('ativo');
				$('.menu-responsivo').toggleClass('ativo');
				$(this).toggleClass('ativo');
			});
			new WOW().init();			
		});
	</script>
</body>
</html>