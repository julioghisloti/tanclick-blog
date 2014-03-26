<?php 

	//top
	get_header();	

?>
<section class="page _col __90pc">

	<!-- post -->
		<section class="post _col __70pc">

			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

				<section class="post-block">

					<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>

					<?php if ( has_post_thumbnail() ) { ?>
						<img src="<?php echo $src[0]; ?>" alt="" />
					<?php } ?>

					<!-- titulo -->
					<h1><?php the_title(); ?></h1>

					<!-- subtitulo -->
					<?php // $subtitulo = get_post_meta($post->ID, 'subtitulo', true); ?>
					<h2><?php // echo $subtitulo; ?></h2>


					<?php the_content(); ?>

				</section>

			<?php endwhile; ?>
			<?php else : ?>

				<h2>Nada encontrado :(</h2>

			<?php endif; ?>

		</section>
	<!-- /post -->

	<!-- sidebar -->
		<?php get_sidebar(); ?>
	<!-- /sidebar -->

</section>

<?php 

	//footer
	get_footer();

?>