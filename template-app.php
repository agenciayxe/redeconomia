<?php 
/*
Template Name: App da Redeconomia
*/
get_header(); 
get_template_part('templates/ads', 'brochure');
?>
<main class="page-app section">
	<div class="container">
		<div class="box-app box-1" id="box-1">
			<img src="<?php echo get_bloginfo('template_url'); ?>/img/app/box-1-title.png" class="title-main" alt="">
			<a href="#box-2" class="link-app"><img src="<?php echo get_bloginfo('template_url'); ?>/img/app/box-2-title.png" class="link-main" alt=""></a>
			<a href="#box-3" class="link-app"><img src="<?php echo get_bloginfo('template_url'); ?>/img/app/box-3-title.png" class="link-main" alt=""></a>
			<a href="#box-4" class="link-app"><img src="<?php echo get_bloginfo('template_url'); ?>/img/app/box-4-title.png" class="link-main" alt=""></a>
			<a href="#box-5" class="link-app"><img src="<?php echo get_bloginfo('template_url'); ?>/img/app/box-5-title.png" class="link-main" alt=""></a>
			<a href="#box-6" class="link-app"><img src="<?php echo get_bloginfo('template_url'); ?>/img/app/box-6-title.png" class="link-main" alt=""></a>
		</div>
		<div class="box-app box-2" id="box-2">
			<div class="link-install">
				<a href="https://play.google.com/store/apps/details?id=com.valedesconto.redeconomia2" target="_blank"><img src="<?php echo get_bloginfo('template_url'); ?>/img/app/box-2-google.png" class="link-img" alt=""></a>
			</div>
			<div class="link-install">
				<a href="https://apps.apple.com/br/app/clube-redeconomia/id1458527719" target="_blank"><img src="<?php echo get_bloginfo('template_url'); ?>/img/app/box-2-apple.png" class="link-img" alt=""></a>
			</div>
		</div>
		<div class="box-app box-3" id="box-3">
			<img src="<?php echo get_bloginfo('template_url'); ?>/img/app/box-3-title.png" class="title-box" alt="">
			<img src="<?php echo get_bloginfo('template_url'); ?>/img/app/box-3-img.png" class="img-box" alt="">
		</div>
		<div class="box-app box-4" id="box-4">
			<img src="<?php echo get_bloginfo('template_url'); ?>/img/app/box-4-title.png" class="title-box" alt="">
			<img src="<?php echo get_bloginfo('template_url'); ?>/img/app/box-4-img.png" class="img-box" alt="">
		</div>
		<div class="box-app box-5" id="box-5">
			<img src="<?php echo get_bloginfo('template_url'); ?>/img/app/box-5-title.png" class="title-box" alt="">
			<img src="<?php echo get_bloginfo('template_url'); ?>/img/app/box-5-img.png" class="img-box" alt="">
		</div>
		<div class="box-app box-6" id="box-6">
			<img src="<?php echo get_bloginfo('template_url'); ?>/img/app/box-6-title.png" class="title-box" alt="">
			<img src="<?php echo get_bloginfo('template_url'); ?>/img/app/box-6-img.png" class="img-box" alt="">
		</div>
	</div>
</main>
<?php get_footer(); ?>