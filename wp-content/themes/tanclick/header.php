<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!--[if IE]><link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory') ?>/build/img/favicon.ico"><![endif]-->
	<link rel="icon" href="<?php bloginfo('stylesheet_directory') ?>/build/img/favicon.ico">

	<!-- title -->
	<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>

	<!-- style base -->
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/build/css/base.css">

	<!-- style -->
	<?php if( is_home() ){ ?><link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/build/css/home.css"><?php } ?>
	<?php if( is_single() ){ ?><link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/build/css/post.css"><?php } ?>
	<?php if( is_archive() ){ ?><link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/build/css/post.css"><?php } ?>
	<?php if( is_page() ){ ?><link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/build/css/post.css"><?php } ?>
	<?php if( is_search() ){ ?><link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/build/css/post.css"><?php } ?>


</head>
<body>

	<!-- topo_all -->
		<header class="top-all">

			<!-- top -->
				<div class="top __90pc">

					<!-- logo -->
						<div class="logo _col __50pc">
							<a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('stylesheet_directory') ?>/build/img/logo.png" alt="TanClick"></a>
						</div>
					<!-- /logo -->

					<!-- search -->
						<div class="search-all _col __50pc">
							<form role="search" method="get" id="searchform" class="searchform" action="http://localhost/_tanclick/">
								<input type="text" class="search" value="Pesquisar" name="s" id="s"/>
								<button id="searchsubmit"><img src="<?php bloginfo('stylesheet_directory') ?>/build/img/search-icon.png" alt=""></button>
							</form>
							<?php //get_search_form();?>
						</div>
					<!-- /search -->

				</div>
			<!-- /top -->

		</header>
	<!-- /topo_all -->

	<!-- menu_all -->
		<div class="menu-all">
			
			<!-- menu -->
				<nav class="menu __90pc">
					<ul>
						<li><a href="<?php echo get_site_url(); ?>/sobre">Sobre</a></li>
						<li><a href="<?php echo get_site_url(); ?>/arquivos/category/dicas-servicos">Dicas e Serviços</a></li>
						<li><a href="<?php echo get_site_url(); ?>/arquivos/category/noticias">Notícias</a></li>
						<li><a href="<?php echo get_site_url(); ?>/arquivos/category/lancamentos">Lançamentos</a></li>
						<li><a href="<?php echo get_site_url(); ?>/arquivos/category/curiosidades">Curiosidades</a></li>
						<li><a href="<?php echo get_site_url(); ?>/contato">Contato</a></li>
					</ul>
				</nav>
			<!-- /menu -->

			<select name="" class="menu-mob __90pc" id="">
				<option value="">Sobre</option>
				<option value="">Dicas e Serviços</option>
				<option value="">Notícias</option>
				<option value="">Lançamentos</option>
				<option value="">Curiosidades</option>
				<option value="">Contato</option>
			</select>

		</div>
	<!-- /menu_all -->
	
</body>
</html>