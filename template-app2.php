<?php 
/*
Template Name: App2
*/
get_header();
?>
<main class="page-biography section">
	<div class="container">
		<div class="box-biography">
				

					<section class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<div class="title-section">
										<h3>
											Club Redeconomia
										</h3>
										<p>
											O App que oferece descontos exclusivos em diversos produtos nas nossas mais de 90 lojas.

 
										</p>
									</div>
								</div>
								<div class="col-md-12">
									<div class="content-section">
										<p><b>Baixe Agora:</b> 
											<div class="single-app">
								<a href="<?php echo InfoVar::show('googleplay'); ?>">
									<img src="<?php echo bloginfo('template_url'); ?>/img/icons/icon-playstore.png" alt="">
								</a>
							</div>
							<div class="single-app">
								<a href="<?php echo InfoVar::show('appstore'); ?>">
									<img src="<?php echo bloginfo('template_url'); ?>/img/icons/icon-appstore.png" alt="">
								</a>
							</div>
										
									</div>
								</div>
							</div>
						</div>
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

						
						</div>



	 			</div>
					</section>



		</div>
	</div>
	<div class="content-icons py-5 my-5">
		<div class="container">
			<div class="col-md-12">
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
							
	 			</div>



		</div>
	</div>

</main>
<?php get_footer(); ?>