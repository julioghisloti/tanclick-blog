<?php 

	//top
	get_header();

?>

	<!-- slider -->
		<section class="slider">

			<!-- slider_view -->
				<ul>
					<li style="background-image: url(<?php bloginfo('stylesheet_directory') ?>/build/img/foto-slider.png);">
						
					</li>
					<li></li>
					<li></li>
				</ul>
			<!-- /slider_view -->

			<!-- slider_arrow -->
				<div class="slider-arrow">
					
					<div class="arrow _left"></div>
					<div class="arrow _right"></div>

				</div>
			<!-- /slider_arrow -->

			<!-- slider_pager -->
				<div class="slider-pager">
			<!-- /slider_pager -->
			
		</section>
	<!-- /slider -->

	<!-- destaques -->
		<section class="destaques __80pc">			

			<!-- destaque_block -->
				<div class="destaque-block _col __50pc">

					<?php $myquery = new WP_Query( 'category_name=cuidados-basicos&posts_per_page=1' ); ?>
					<?php if ($myquery->have_posts()) : while ($myquery->have_posts()) : $myquery->the_post(); ?>

						<!-- destaque_img -->
							<div class="destaque-block-img _col __50pc">
								<img src="<?php bloginfo('stylesheet_directory') ?>/build/img/img-destaque.png" />
							</div>
						<!-- /destaque_img -->

						<!-- seta_destaque -->
							<div class="arrow-destaque left"></div>
						<!-- /seta_destaque -->

						<!-- destaque_txt -->
							<div class="destaque-block-txt _col __50pc">
								<div class="title">
									<i class="cuidados"></i><a href="<?php echo get_site_url(); ?>/arquivos/category/cuidados-basicos"><h1>CUIDADOS BÁSICOS</h1></a>
								</div>
								
								<h2><?php the_title();?></h2>

								<p>
									<?php echo excerpt('10'); ?>
								</p>
								<a href="<?php echo get_permalink(); ?>">[+]</a>
							</div>
						<!-- /destaque_txt -->

					<?php endwhile; endif; wp_reset_query(); ?>

				</div>
			<!-- /destaque_block -->

			<!-- destaque_block -->
				<div class="destaque-block _col __50pc">

					<?php $myquery = new WP_Query( 'category_name=cuidados-basicos&posts_per_page=1' ); ?>
					<?php if ($myquery->have_posts()) : while ($myquery->have_posts()) : $myquery->the_post(); ?>

						<!-- destaque_img -->
							<div class="destaque-block-img _col __50pc">
								<img src="<?php bloginfo('stylesheet_directory') ?>/build/img/img-destaque.png" />
							</div>
						<!-- /destaque_img -->

						<!-- seta_destaque -->
							<div class="arrow-destaque left"></div>
						<!-- /seta_destaque -->

						<!-- destaque_txt -->
							<div class="destaque-block-txt _col __50pc">
								<div class="title">
									<i class="novidades"></i><a href="<?php echo get_site_url(); ?>/arquivos/category/novidades"><h1>NOVIDADES</h1></a>
								</div>

								<h2><?php the_title();?></h2>

								<p>
									<?php echo excerpt('10'); ?>
								</p>
								<a href="<?php echo get_permalink(); ?>">[+]</a>
							</div>
						<!-- /destaque_txt -->

					<?php endwhile; endif; wp_reset_query(); ?>

				</div>
			<!-- /destaque_block -->

			<!-- destaque_block -->
				<div class="destaque-block _destaque-bottom _col __50pc">

					<?php $myquery = new WP_Query( 'category_name=cuidados-basicos&posts_per_page=1' ); ?>
					<?php if ($myquery->have_posts()) : while ($myquery->have_posts()) : $myquery->the_post(); ?>

						<!-- destaque_txt -->
							<div class="destaque-block-txt _col __50pc">
								<div class="title">
									<i class="promocoes"></i><a href="<?php echo get_site_url(); ?>/arquivos/category/promocoes"><h1>PROMOÇÕES</h1></a>
								</div>

								<h2><?php the_title();?></h2>

								<p>
									<?php echo excerpt('10'); ?>
								</p>
								<a href="<?php echo get_permalink(); ?>">[+]</a>
							</div>
						<!-- /destaque_txt -->

						<!-- seta_destaque -->
							<div class="arrow-destaque right"></div>
						<!-- /seta_destaque -->

						<!-- destaque_img -->
							<div class="destaque-block-img _col __50pc">
								<img src="<?php bloginfo('stylesheet_directory') ?>/build/img/img-destaque.png" />
							</div>
						<!-- /destaque_img -->

					<?php endwhile; endif; wp_reset_query(); ?>

				</div>
			<!-- /destaque_block -->

			<!-- destaque_block -->
				<div class="destaque-block _destaque-bottom _col __50pc">

					<?php $myquery = new WP_Query( 'category_name=cuidados-basicos&posts_per_page=1' ); ?>
					<?php if ($myquery->have_posts()) : while ($myquery->have_posts()) : $myquery->the_post(); ?>

						<!-- destaque_txt -->
							<div class="destaque-block-txt _col __50pc">
								<div class="title">
									<i class="servicos"></i><a href="<?php echo get_site_url(); ?>/arquivos/category/novos-servicos"><h1>NOVOS SERVIÇOS</h1></a>
								</div>

								<h2><?php the_title();?></h2>

								<p>
									<?php echo excerpt('10'); ?>
								</p>
								<a href="<?php echo get_permalink(); ?>">[+]</a>
							</div>
						<!-- /destaque_txt -->

						<!-- seta_destaque -->
							<div class="arrow-destaque right"></div>
						<!-- /seta_destaque -->


						<!-- destaque_img -->
							<div class="destaque-block-img _col __50pc">
								<img src="<?php bloginfo('stylesheet_directory') ?>/build/img/img-destaque.png" />
							</div>
						<!-- /destaque_img -->

					<?php endwhile; endif; wp_reset_query(); ?>

				</div>
			<!-- /destaque_block -->

		</section>
	<!-- /destaques -->


<?php 

	//footer
	get_footer();

?>