<?php 
/*
Template name: Encarte
*/
get_header(); 
?>
<main class="page page-market">
	<div class="container">
		<?php 
		date_default_timezone_set("America/Sao_Paulo");
		$momentoMarcado = strftime("%Y-%m-%d %H:%M:%S", mktime(7, 0, 0, 3, 8, 2019)); /* SIGA A ORDEM COM ATENÇÃO ---> HORA / MINUTOS / SEGUNDOS / MÊS / DIA / ANO */
		$momentoFinalizado = strftime("%Y-%m-%d %H:%M:%S", mktime(23, 59, 0, 3, 15, 2019)); /* SIGA A ORDEM COM ATENÇÃO ---> HORA / MINUTOS / SEGUNDOS / MÊS / DIA / ANO */
		$momentoAtual = strftime("%Y-%m-%d %H:%M:%S", strtotime("now"));
		if ($momentoAtual > $momentoMarcado && $momentoAtual < $momentoFinalizado) {
		    ?>
			    <div class="text-center">
			    	<div class="swiper-button-prev"></div>
			    	<div class="swiper-button-next"></div>
			    </div>
				<div class="market-slide swiper-container">
				    <!-- Additional required wrapper -->
				    <div class="swiper-wrapper">
				        <!-- Slides -->
				        <div class="swiper-slide"><div class="swiper-zoom-container"><img src="<?php bloginfo('template_url'); ?>/img/encarte/2019-03-08/1.jpg" class="img-fluid" alt=""></div></div>
				        <div class="swiper-slide"><div class="swiper-zoom-container"><img src="<?php bloginfo('template_url'); ?>/img/encarte/2019-03-08/2.jpg" class="img-fluid" alt=""></div></div>
				    </div>

				    <!-- If we need pagination -->
				    <div class="swiper-pagination"></div>

				    <!-- If we need scrollbar -->
				    <div class="swiper-scrollbar"></div>
				</div>
		    <?php 
				/* <!-- <?php echo $momentoAtual; ?> --> */
		}
		else {
			?>
			<h3 class="text-center">Atenção. Grande surpresa de ofertas dia 8/3. Aguardem!</h3>
			<?php
		}
		?>
	</div>
</main>
<?php 
get_footer(); 
?>