<?php 
/*
Template Name: Aplicativo
*/
get_header(); 

?>

<section class="section section-offers">
	 <div class="container">
	 	<div class="content-offers">
	 		<div class="d-flex row justify-content-center">
	 			<div class="col-md-6">
					<h3 class="text-center">Veja como usar o Club Redeconomia</h3>
					<div class="banner-home-default offers-banner">
							
						<?php
						date_default_timezone_set("America/Sao_Paulo");
						$timeCurrent = (string) strftime('%Y-%m-%d %H:%M:%S', strtotime('now'));
						$arraySlide = array(
							'post_type' => 'tutorial',
							'posts_per_page' => 1,
							'order' => 'DESC',
							'orderby' => 'date',
							'meta_key' => 'validadetuto',
							'meta_value' => $timeCurrent,
							'meta_compare' => '>'
						);
						$querySlide = new WP_Query($arraySlide);
						if ($querySlide->have_posts()) {
							while ($querySlide->have_posts()) {
								$querySlide->the_post();
								$offersSlide = get_field('tutorial');
								?>
								<div class="market-slide swiper-offers">
									<div class="swiper-button-prev"></div>
									<div class="swiper-button-next"></div>
									<div class="swiper-wrapper">
										<?php
										foreach ($offersSlide as $offersSingle) {
											if ($offersSingle['url']) {
												?><div class="swiper-slide"><div class="banner-slide-single" style="background-image: url('<?php echo $offersSingle['url']; ?>');"></div></div><?php
											}
										}
										
										?>
									</div>
								</div>
							<?php 
							}
						}
						wp_reset_query();
						?>
					</div>

					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<h3 class="text-center">Aplicativo para Android</h3>
					<div class="footer-app">
						<div align="center" class="single-app">
							<a href="<?php echo InfoVar::show('googleplay'); ?>">
								<img src="<?php echo bloginfo('template_url'); ?>/img/icons/icon-playstore.png" alt="">
							</a>
						</div>
					</div>
	 			</div>
	 			<div class="col-md-6">
					<h3 class="text-center">Ofertas disponíveis no APP</h3>
					<div class="banner-home-default offers-banner">
						
						<?php
						date_default_timezone_set("America/Sao_Paulo");
						$timeCurrent = (string) strftime('%Y-%m-%d %H:%M:%S', strtotime('now'));
							$arraySlide = array(
								'post_type' => 'oapp',
								'posts_per_page' => 1,
								'order' => 'DESC',
								'orderby' => 'date',
								'meta_key' => 'validadeapp',
								'meta_value' => $timeCurrent,
								'meta_compare' => '>'
							);
							$querySlide = new WP_Query($arraySlide);
							if ($querySlide->have_posts()) {
								while ($querySlide->have_posts()) {
									$querySlide->the_post();
									$offersSlide = get_field('oapp');
									?>
									<div class="market-slide swiper-offers">
										<div class="swiper-button-prev"></div>
										<div class="swiper-button-next"></div>
										<div class="swiper-wrapper">
											<?php
											foreach ($offersSlide as $offersSingle) {
												if ($offersSingle['url']) {
													?><div class="swiper-slide"><div class="banner-slide-single" style="background-image: url('<?php echo $offersSingle['url']; ?>');"></div></div><?php
												}
											}
											
											?>
										</div>
									</div>
								<?php 
								}
							}
							wp_reset_query();
						?>
					</div>
					<p>&nbsp;</p>
					<p>&nbsp;</p>	
					<h3 class="text-center">Aplicativo para iPhone</h3>
					<div class="footer-app">
						<div align="center" class="single-app">
							<a href="<?php echo InfoVar::show('appstore'); ?>">
								<img src="<?php echo bloginfo('template_url'); ?>/img/icons/icon-appstore.png" alt="">
							</a>
						</div>
					</div>
	 			</div>
	 		</div>
	 	</div>
	 </div>
</section>

<?php get_footer(); ?>