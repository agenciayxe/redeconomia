<section class="section section-offers">
	 <div class="container">
	 	<div class="content-offers">
	 		<div class="d-flex row justify-content-center">
	 			<div class="col-md-6">
					<?php
					date_default_timezone_set("America/Sao_Paulo");
					$timeCurrent = (string) strftime('%Y-%m-%d %H:%M:%S', strtotime('now'));
					$postEncarte = array(
						'post_type' => 'video',
						'posts_per_page' => 1,
						'meta_key' => 'validade',
						'meta_value' => $timeCurrent,
						'meta_compare' => '>'
					);
					$enQuery = new WP_Query($postEncarte);
					if ($enQuery->have_posts()) {
						while ($enQuery->have_posts()) {
							$enQuery->the_post();
							$video = get_field('video');
							if ($video) {
								?>
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
								<?php
							}
							else { ?><h3 class="text-center">Sem vídeo de ofertas no momento!</h3><?php }
						}
					}
					else { ?><h3 class="text-center">Sem vídeo de ofertas no momento!</h3><?php }

					 /* echo do_shortcode('[youtube_channel]'); */ 
					?>
	 			</div>
	 			<div class="col-md-6">
					
						<div class="banner-home-default offers-banner">
							<?php
							date_default_timezone_set("America/Sao_Paulo");
							$timeCurrent = (string) strftime('%Y-%m-%d %H:%M:%S', strtotime('now'));
							if (is_front_page()) {
								$arraySlide = array(
									'post_type' => 'ofertas',
									'posts_per_page' => 1,
									'order' => 'DESC',
									'orderby' => 'date',
									'meta_key' => 'validade',
									'meta_value' => $timeCurrent,
									'meta_compare' => '>'
								);
								$querySlide = new WP_Query($arraySlide);
								if ($querySlide->have_posts()) {
									while ($querySlide->have_posts()) {
										$querySlide->the_post();
										$offersSlide = get_field('ofertas');
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
							}
							else {
								?><div class="home-banner pages-banner d-flex" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->id, 'full'); ?>');"><h2><?php echo titleName(); ?></h2></div><?php
							}
							?>
						</div>
	 			</div>
				
				<?php
				date_default_timezone_set("America/Sao_Paulo");
				$timeCurrent = (string) strftime('%Y-%m-%d %H:%M:%S', strtotime('now'));
				$postEncarte = array(
					'post_type' => 'encarte',
					'posts_per_page' => 1,
					'meta_key' => 'validade',
					'meta_value' => $timeCurrent,
					'meta_compare' => '>'
				);
				$enQuery = new WP_Query($postEncarte);
				if ($enQuery->have_posts()) {
					?>
					<div class="col-md-6 offers-buttons mt-3">
						<a href="<?php echo get_page_link(InfoVar::show('encarte')); ?>">
							<div class="button-offer offer-encarte">
								<div class="icon-offer icon-encarte"></div>
								<div class="title-offer">Encarte de Ofertas</div>
							</div>
						</a>
					</div>
					<?php
				}
				date_default_timezone_set("America/Sao_Paulo");
				$timeCurrent = (string) strftime('%Y-%m-%d %H:%M:%S', strtotime('now'));
				$postEncarte = array(
					'post_type' => 'lamina',
					'posts_per_page' => 1,
					'meta_key' => 'validade',
					'meta_value' => $timeCurrent,
					'meta_compare' => '>'
				);
				$enQuery = new WP_Query($postEncarte);
				if ($enQuery->have_posts()) {
					?>
					<div class="col-md-6 offers-buttons mt-3">
						<a href="<?php echo get_page_link(InfoVar::show('lamina')); ?>">
							<div class="button-offer offer-lamina">
								<div class="icon-offer icon-lamina"></div>
								<div class="title-offer">Lâmina de Ofertas</div>
							</div>
						</a>
					</div>
					<?php
				}
				?>
				
	 		</div>
	 	</div>
	 </div>
</section>