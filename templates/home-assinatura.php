<section class="section section-signature">
	<div class="container">
		<div class="row">
			<?php
			if ($_GET['a'] == 'b') {
				?>
				<div class="col-md-6 d-flex align-items-center">
					<div class="title-signature">
						<h1>Cadastre-se e<br /> Receba novidades e promoções</h1>
					</div>
				</div>
				<div class="col-md-6">
					<button type="button" original-value="Cadastre-se" class="button-cadastre">Receba Ofertas</button>
				</div>
				<?php
			}
			else {
				?>
				<div class="col-md-6 d-flex align-items-center">
					<div class="title-signature">
						<h1>Cadastre-se e e<br /> Receba novidades e promoções</h1>
					</div>
				</div>
				<div class="col-md-6">
					<?php echo do_shortcode('[dinamize-form id="36861"]'); ?>
					<?php 
					/*
					<form class="form-area" action="">
						<div class="row">
							<div class="col-12 col-lg-5">
								<input type="text" class="form-control input-field" name="name" value="" placeholder="Nome: ">
							</div>
							<div class="col-12 col-lg-5">
								<input type="email" class="form-control input-field" name="email" value="" placeholder="E-mail: ">
							</div>
							<div class="col-12 col-lg-2">
								<button class="btn btn-default button-form">Enviar</button>
							</div>
						</div>
					</form>
					*/
					?>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>