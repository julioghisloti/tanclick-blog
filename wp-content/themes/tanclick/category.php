<?php 

	//top
	get_header();
	$categ = $_SERVER['REQUEST_URI'];

?>

<section class="page _col __90pc">
	
	<!-- post -->
		<section class="post _col __70pc">

			<?php query_posts('category_name='.$categ.'&showposts=-1'); ?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<section class="page __90pc">

					<!-- Thumbnail -->
					<?php if ( has_post_thumbnail() ) { ?>
						<div class="post_list-thumbnail"><?php the_post_thumbnail(); ?></div>
					<?php } ?>

					<!-- Post -->
					<div class="post-text">

						<!-- Titulo -->
						<h1>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
								<?php the_title(); ?>
							</a>
						</h1>

						<?php the_content('Leia mais'); ?>

					</div>


				</section>

			<?php endwhile; ?>

		</section>
	<!-- /post -->

	<!-- sidebar -->
		<?php get_sidebar(); ?>
	<!-- /sidebar -->

	<?php endif; ?>

</section>

<?php 

	//footer
	get_footer();

?>