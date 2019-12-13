<section class="textos wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
	<div class="container">
		<h4> 
			<i class="fa fa-quote-left fa-2x"></i>				
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea optio, blanditiis vero nobis maiores omnis architecto 
			<br>
			assumenda, illum aspernatur quaerat dolorem itaque quos numquam, facere quidem dicta. Harum deleniti, aliquid!	
			<i class="fa fa-quote-right fa-2x"></i>  
		</h4>				
	</div>		
</section>
		
<section class="portfolio">
	<div class="container">

		<?php query_posts('post_type=post'); ?>

		<ul>
			
			<?php while(have_posts()): the_post(); ?>

			<li>
				<figure class="imghvr-reveal-right">
					<img src="<?php the_post_thumbnail_url('portfolio-thumb');  ?>" alt="Thumb">
					<figcaption>
						<a href="<?php the_post_thumbnail_url('the_post_thumbnail');  ?>" data-lightbox="roadtrip" data-title="<?php the_content(); ?>">
							<h3><?php the_title(); ?></h3>
							<p><?php the_content(); ?></p>
						</a>
						<div class="overlay"></div>
					</figcaption>
				</figure>
			</li>

			<?php endwhile; ?>

		</ul>

		<?php wp_reset_query(); ?>

	</div>
</section>