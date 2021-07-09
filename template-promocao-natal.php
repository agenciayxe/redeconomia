<?php 
/*
Template Name: Promoção de Natal
*/
get_header(); 
?>
<main id="promotion-natal">
	<div class="container">
		<div class="content-text">
			<?php 
			if (have_posts()) {
				while (have_posts()) {
					the_post();
					the_content();
				}
			}
			?>
		</div>
	</div>
</main>
<script>
	$(document).ready(function () {
		var $doc = $('html, body');
		var main = $("#promotion-natal").offset().top - 210;
		$doc.stop().animate({scrollTop:main}, 500);
	});
</script>
<?php 
get_footer(); 
?>