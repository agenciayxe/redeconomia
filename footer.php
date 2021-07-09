	<?php echo get_template_part('templates/ads', 'footer'); ?>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6 footer-data">
					<div class="element-footer">
						<img src="<?php bloginfo('template_url'); ?>/img/logo.png" class="img-fluid footer-logo" alt="">
					</div>
				</div>
				<div class="col-md-6 footer-about">
					<div class="element-footer">
						<div class="footer-site">
							<div class="list-socials">
								<div class="single-socials">
									<a href="<?php echo InfoVar::show('facebook'); ?>" target="_blank">
										<i class="icons icon-red icon-facebook">
										</i>
									</a>
								</div>
								<div class="single-socials">
									<a href="<?php echo InfoVar::show('instagram'); ?>" target="_blank">
										<i class="icons icon-red icon-instagram">
										</i>
									</a>
								</div>
								<div class="single-socials">
									<a href="<?php echo InfoVar::show('youtube'); ?>" target="_blank">
										<i class="icons icon-red icon-youtube">
										</i>
									</a>
								</div>
							</div>
						</div>
						<h3>Baixe Nosso Aplicativo</h3>
						<div class="footer-app">
							<div class="single-app">
								<a href="<?php echo InfoVar::show('appstore'); ?>">
									<img src="<?php echo bloginfo('template_url'); ?>/img/icons/icon-appstore.png" alt="">
								</a>
							</div>
							<div class="single-app">
								<a href="<?php echo InfoVar::show('googleplay'); ?>">
									<img src="<?php echo bloginfo('template_url'); ?>/img/icons/icon-playstore.png" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<?php
	if (is_front_page()) {
		?>
		<script>
		$(document).ready(function () {
            function gtag_report_conversion() {
                gtag('create', 'AW-824599583', 'auto');
                gtag('event', 'conversion', { 'send_to': 'AW-824599583/cNbWCMOUzcQBEJ_ImYkD' });
                console.log('Ads');
            }
            function callConversion() {
                gtag_report_conversion();
            }
            $(".form-area").on('submit', function() { callConversion() });
        });
		</script>
		<?php
	}
	if (!isset($_COOKIE['cookie_accepted'])) {
		?>
		<section id="cookie-alert" class="active">
			<div class="container">
				<div class="row">
					<div class="col col-9 column-text">
						<p>Utilizamos cookies em nosso site para personalizar e melhorar sua experiência conosco, oferecendo conteúdos personalizados para você. Ao clicar em aceitar você concorda com nossa <a href="<?php echo get_page_link(40938); ?>"><strong>Política de Privacidade</strong></a>.</p>
					</div>
					<div class="col col-3 column-button">
						<button id="validate-continue" class="button white cookie-save">Continuar</button>
					</div>
				</div>
			</div>
		</section>
		<?php
	}
	?>
	
	<script>
		$("#validate-continue").on('click', function () { 
			$.post(search_object.location, {
				action: 'cookie',
				make: 'save'
			}, function (storeReturn) {
				$("#cookie-alert").remove();
			});
			return false;
		});
	</script>
	<div class="box-back-top" id="box-back-top">
		<i class="fas fa-arrow-up"></i>
	</div>
	
	<script src="<?php bloginfo('template_url'); ?>/js/swiper.min.js"></script>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5bbf6f323dad74f2"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.pkgd.min.js"></script>
	

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<script src="<?php bloginfo('template_url'); ?>/js/swiper.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/inc/bxslider/jquery.bxslider.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/functions.js?v=1.1.19"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/functions-store.js"></script>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/TRACK_2382.js"></script>
	<?php /* modal('home', 'LIVE ASSERJ NO CRISTO REDENTOR', '<img src="' . get_bloginfo('template_url') . '/img/pop-up-redeconomia.jpg" class="img-fluid">' ); */ ?>
	<script>
		// $("#modal-home").modal('show');
	</script>

	<?php wp_footer(); ?>
</body>
</html>