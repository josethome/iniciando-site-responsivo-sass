</main>
		<footer>
			<div class="logo-rodape">
				<a href="index.php">
					<img src="images/logo-portfolio.png" alt="Logotipo Portfólio">
				</a>
				<p>Horário de atendimento: segunda a sexta-feira
					<strong> das </strong> 9:00h <strong> às </strong>  18:00h
				</p>
				<p>Copyright &copy; 2019-2019 Portfólio - Criado por José A. Thomé - Todos os direitos reservados.</p>	
			</div>		
		</footer>
	</div>

	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/wow/dist/wow.min.js"></script>	
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