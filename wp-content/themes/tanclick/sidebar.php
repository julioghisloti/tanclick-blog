<!-- sidebar -->
	<section class="sidebar _col __30pc">
		
		<!-- tantan-logo -->
			<section class="tantan-logo __80pc">
				<img src="<?php bloginfo('stylesheet_directory') ?>/build/img/tantan-logo.png" alt="Somos tan tan pelo sou carro!">
			</section>
		<!-- /tantan-logo -->

		<!-- ultimos-posts -->
			<section class="sidebar-block __100pc">
				<h1>Tópicos Recentes</h1>
				<ul>
					<?php
						$aRecentPosts = new WP_Query("showposts=5");
						while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();	
					?>
						<li>
							<a href="<?php the_permalink() ?>" title="Link para <?php the_title(); ?>" rel="bookmark">
								<?php the_title();?>
							</a>
						</li>

					<?php endwhile; ?>
				</ul>
			</section>
		<!-- /ultimos-posts -->

		<!-- arquivos -->
			<section class="sidebar-block __100pc">
				<h1>Arquivos</h1>
				<?php wp_get_archives('type=monthly&limit=12'); ?>
			</section>
		<!-- /arquivos -->

		<!-- facebok -->
			<section class="sidebar-block __100pc">
				<h1>FACEBOOK</h1>
				<div class="fb-like-box" data-href="https://www.facebook.com/TanTanPeloSeuCarro" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
			</section>
		<!-- /facebok -->

	</section>
<!-- /sidebar -->