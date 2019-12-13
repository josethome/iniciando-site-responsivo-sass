<section class="sobre">
	<div class="container">
		<div class="textos">
			<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit. Distinctio facere unde natus cumque, rem sed recusandae voluptates error. Quibusdam quaerat distinctio eligendi, vero quos doloribus. Doloribus adipisci, praesentium perspiciatis eius et consectetur, minus fugit quod mollitia dolorem laborum omnis totam placeat quibusdam distinctio sed. Quae adipisci corporis culpa maiores, deserunt, amet molestias quidem placeat commodi quos magnam rem doloribus odio impedit praesentium voluptatem id fuga nisi veritatis porro aliquid aliquam eaque pariatur ad! Ab iure sapiente explicabo, nam quo dicta inventore rem excepturi debitis corrupti maxime provident architecto illo. Reprehenderit.
			</p> 					
		</div>

		<h1 class="titulo">Tecnologias habitualmente utilizadas em nossos projetos
		</h1>

		<?php query_posts('post_type=habilidades&post_per_page=-1'); ?>		

		<ul class="habilidades">

			<?php if(have_posts()): ?>

				<?php while(have_posts()): the_post(); ?>			

			<li class="habilidade-<?php the_field('nivel'); ?>"> 
					<h2>
						<style>
							.<?php the_field('icone'); ?> {
								<?php if(get_field('cor_do_icone')): ?>
									color: <?php the_field('cor_do_icone'); ?>;
								<?php else : ?>
									color: #000;
								<?php endif; ?>
							}
						</style>
						<i class="fab <?php the_field('icone'); ?>"></i> <strong><?php the_title(); ?></strong> // <?php the_field('nivel') ?>0%
						<div class="barra"><span></span></div>
					</h2>
				</li>

			<?php endwhile; ?> 

			<?php else : ?>

				Não há habilidades cadastrada!

			<?php endif; ?>

		</ul>

		<?php wp_reset_query(); ?> 					

		<a href="#" class="botao medio">
			<i class="fa fa-book"> Acessar Portfólio</i>
		</a>
	</div>
</section>