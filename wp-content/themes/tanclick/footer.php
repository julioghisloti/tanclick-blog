<!-- footer-all -->
	<footer class="footer-all">
		
		<!-- footer -->
			<div class="footer __90pc">
				
				<!-- facebook -->
				<div class="facebook _col __50pc">
					<img src="<?php bloginfo('stylesheet_directory') ?>/build/img/facebook-logo.png" height="40" alt="Conheça nosso Facebook">
				</div>

				<!-- apoio -->
				<div class="apoio _col __50pc">
					<ul>
						<li>APOIO</li>
						<li><img src="<?php bloginfo('stylesheet_directory') ?>/build/img/click-logo.png" height="40" alt="Apoio CLICK Automotiva"></li>
					</ul>
				</div>

			</div>
		<!-- /footer -->

		<!-- footer_tel -->
			<div class="footer-tel">
				<span>(11) 3931-7988 | Av. Itaberaba, 363 | CEP: 02734-000 | Freguesia do Ó - São Paulo - SP - Brasil | e-mail: tanclick@tanclick.com.br</span>
			</div>
		<!-- /footer_tel -->

	</footer>
<!-- /footer-all -->

<!-- script -->
<script src="<?php bloginfo('stylesheet_directory') ?>/build/js/jquery.js"></script>
<?php if( is_home() ){ ?><script src="<?php bloginfo('stylesheet_directory') ?>/build/js/home.js"></script><?php } ?>
<?php if( is_home() ){ ?><script src="<?php bloginfo('stylesheet_directory') ?>/build/js/jquery.cycle.lite.js"></script><?php } ?>

<!-- facebook likebox -->
<div id="fb-root"></div>
<script>
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

	//Redireciona o Menu mobile
	$(function (){
		$('#menu-mob').on('change', function(e) {
			var $option = $(this.options[this.selectedIndex]),
			external = $option.data('external'),
			url = $option.attr('value');

			if (url != '') {
				if (external) {
					window.open(url, 'window-' + Math.random());
				} else {
					document.location.href = url;
				}
			}
		});
	});

</script>

</body>
</html>
