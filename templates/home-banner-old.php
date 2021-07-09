<div class="home-section home-topo container-fluid">
	<div class="row">
		<div class="col-lg-2 col-md-3">
			<nav class="home-banner-bar">
				<?php 
				wp_nav_menu( 
					array( 
						'theme_location' => 'menumobile', 
						'menu_class' => 'header-menu',
						'menu_id' => 'header-nav',
						'container_class' => 'menu-principal-header', 
						'container_id' => 'menu-principal-header' ,
						'walker' => new OrganizacaoMenuPrincipal()
					) 
				);
				?>
			</nav>
		</div>
		<?php
		date_default_timezone_set("America/Sao_Paulo");
		$timeCurrent = (string) strftime('%Y-%m-%d %H:%M:%S', strtotime('now'));
		if (is_front_page() || get_post_type() == 'dicas') {
			$arraySlide = array(
				'post_type' => 'slide',
				'order' => 'DESC',
				'orderby' => 'date',
				'posts_per_page' => -1
			);
			$querySlide = new WP_Query($arraySlide);
			if ($querySlide->have_posts()) {
				?>
				<div class="home-banner col-lg-10 col-md-9 col-12">
					<div class="row">
						<div class="market-slide swiper-content">
					    	<div class="swiper-button-prev"></div>
					    	<div class="swiper-button-next"></div>
						    <div class="swiper-wrapper">
						    	<?php
									while ($querySlide->have_posts()) {
										$querySlide->the_post();
										if ((get_field('validade') && get_field('validade') > $timeCurrent) || !get_field('validade')) {
											$bannerImage = get_the_post_thumbnail_url(get_the_ID());
											?><div class="swiper-slide"><div class="banner-slide-single" style="background-image: url('<?php echo $bannerImage; ?>');"></div></div><?php
										}
									}
								?>
						    </div>
						</div>
					</div>
				</div>
				<?php 
			}
			wp_reset_query();
		}
		else {
			?><div class="home-banner col-lg-10 col-md-9 col-12" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->id, 'full'); ?>');"><!-- <img src="<?php echo get_the_post_thumbnail_url($post->id, 'full'); ?>" alt=""> --></div><?php
		}
		?>		
	</div>
</div>