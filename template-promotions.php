<?php
/*
Template name: Promoções
*/
get_header(); 
get_template_part('templates/ads', 'promotions');
?>
<main class="page page-promotions">
	<div class="container">
		<h2>O cliente Redeconomia aqui sempre ganha. Aqui todo dia tem uma economia diferente! Fique por dentro dos nossos sorteios</h2>
		<div class="list-promotions">
			<?php
				$argsStore = array(
					'post_type' => 'promocoes',
					'posts_per_page' => -1
				);
				$storeList = new WP_Query($argsStore);
				if ($storeList->have_posts()) {
					while ($storeList->have_posts()) {
						$storeList->the_post();
						?>
						<div class="box-promotions">
							<div class="img-thumb" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_id(), 'medium_large'); ?>');"></div>
							<div class="content">
								<h1><?php echo get_the_title(); ?></h1>
								<?php echo the_content(); ?>
								<?php 
								if (get_field('participar') != '') {
									?>
									<a href="<?php echo get_field('participar'); ?>"><button type="button" class="button-contato">Participar</button></a>
									<?php
								}
								if (get_field('regulamento') != '') {
									?>
									<button type="button" class="button-contato" data-toggle="modal" data-target="#modal-regulamento-<?php echo get_the_ID(); ?>">Regulamento</button>
									<?php 
									modal('regulamento-' . get_the_ID(), 'Regulamento - ' . get_the_title(), get_field('regulamento') );
								}
								if (get_field('vencedores') != '') {
									?>
									<button type="button" class="button-contato" data-toggle="modal" data-target="#modal-vencedores-<?php echo get_the_ID(); ?>">Vencedores</button>
									<?php
									modal('vencedores-' . get_the_ID(), 'Vencedores - ' . get_the_title(), get_field('vencedores') );
								}
								if (get_field('semana_1') != '') {
									?>
									<button type="button" class="button-contato" data-toggle="modal" data-target="#modal-semana_1-<?php echo get_the_ID(); ?>">Dicas Semana 1</button>
									<?php
									modal('semana_1-' . get_the_ID(), 'Dicas Semana 1 - ' . get_the_title(), get_field('semana_1') );
								}
								if (get_field('semana_2') != '') {
									?>
									<button type="button" class="button-contato" data-toggle="modal" data-target="#modal-semana_2-<?php echo get_the_ID(); ?>">Dicas Semana 2</button>
									<?php
									modal('semana_2-' . get_the_ID(), 'Dicas Semana 2 - ' . get_the_title(), get_field('semana_2') );
								}
								if (get_field('semana_3') != '') {
									?>
									<button type="button" class="button-contato" data-toggle="modal" data-target="#modal-semana_3-<?php echo get_the_ID(); ?>">Dicas Semana 3</button>
									<?php
									modal('semana_3-' . get_the_ID(), 'Dicas Semana 3 - ' . get_the_title(), get_field('semana_3') );
								}
								if (get_field('semana_4') != '') {
									?>
									<button type="button" class="button-contato" data-toggle="modal" data-target="#modal-semana_4-<?php echo get_the_ID(); ?>">Dicas Semana 4</button>
									<?php
									modal('semana_4-' . get_the_ID(), 'Dicas Semana 4 - ' . get_the_title(), get_field('semana_4') );
								}
								if (get_field('semana_5') != '') {
									?>
									<button type="button" class="button-contato" data-toggle="modal" data-target="#modal-semana_5-<?php echo get_the_ID(); ?>">Dicas Semana 5</button>
									<?php
									modal('semana_5-' . get_the_ID(), 'Dicas Semana 5 - ' . get_the_title(), get_field('semana_5') );
								}
								if (get_field('semana_6') != '') {
									?>
									<button type="button" class="button-contato" data-toggle="modal" data-target="#modal-semana_6-<?php echo get_the_ID(); ?>">Dicas Semana 6</button>
									<?php
									modal('semana_6-' . get_the_ID(), 'Dicas Semana 6 - ' . get_the_title(), get_field('semana_6') );
								}
								if (get_field('semana_7') != '') {
									?>
									<button type="button" class="button-contato" data-toggle="modal" data-target="#modal-semana_7-<?php echo get_the_ID(); ?>">Dicas Semana 7</button>
									<?php
									modal('semana_4-' . get_the_ID(), 'Dicas Semana 7 - ' . get_the_title(), get_field('semana_7') );
								}
								?>
							</div>
						</div>
						<?php
					}
				}
			?>
		</div>
	</div>

</main>
<?php 
get_footer(); 
?>