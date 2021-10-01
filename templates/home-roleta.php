
<div class="modal fade" id="modalRoleta" tabindex="-1" aria-labelledby="modalRoleta" aria-hidden="true">
  <div class="modal-dialog modal-xl ">
    <div class="modal-content ">
			<div class="modal-body content-roleta">
				
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="row">
					<div class="col-md-12 d-flex justify-content-center">
						<img src="<?php echo get_bloginfo('template_url'); ?>/roleta/campanha.png" class="img-fluid" width="250" alt="">
					</div>
				</div>
				<div class="content-center row d-flex">
					<div class="col-md-6 d-flex justify-content-center">
						<div width="345" height="345" class="the_wheel">
							<canvas id="canvas" width="320" height="320">
								<p style="{color: white}" align="center">Sorry, your browser doesn't support canvas. Please try another.</p>
							</canvas>
						</div>
					</div>
					<div class="col-md-6  d-flex justify-content-center align-items-center">
						<div class="power_controls">
							<form id="form-action" action="" method="post" enctype="multipart/form-data">
								<div class="my-3">
									<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome completo" required>
								</div>
								<div class="my-3">
									<input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF" required>
								</div>
								<div class="my-3">
									<input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required>
								</div>
								<div class="my-3">
									<input type="text" name="telefone" id="telefone" class="form-control" placeholder="Telefone" required>
								</div>
								<div class="my-3">
									<select name="loja" id="loja" class="form-control area-contato">
										<option disabled selected>Loja mais próxima</option>
										<?php
										$listLojas = array(
											'post_type' => 'lojas',
											'posts_per_page' => -1
										);
										$wpLojas = new WP_Query($listLojas);

										if ($wpLojas->have_posts()) {
											while ($wpLojas->have_posts()) {
												$wpLojas->the_post();
												$categoryLojas = get_the_terms(get_the_ID(), 'lojas');
												?>
												<option value="<?php echo get_the_ID(); ?>"><?php echo $categoryLojas[0]->name . ' - ' . get_the_title(); ?></option>
												<?php
											}
										}
										?>
									</select>
									<div class="my-3">
										<input type="checkbox" name="aceito" id="aceito" value="sim"> Aceito os termos e condições
									</div>
								</div>
								<div class="my-3">
									<button type="submit" class="btn btn-roleta" id="spin_button" >Participar</button>
								</div>
								<div class="my-3">
									<a href="https://www.redeconomia.com.br/regulamento-roleta-premiada/" class="text-white">VEJA O REGULAMENTO E REGRAS</a>
								</div>
								<div class="spanMessage"></div>
								<input type="hidden" name="action" value="roleta" />
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() { 	
		$('#modalRoleta').modal('show');
	});
	
	function gtag_report_conversion() {
		gtag('create', 'AW-824599583', 'auto');
		gtag('event', 'conversion', { 'send_to': 'AW-824599583/cNbWCMOUzcQBEJ_ImYkD' });
		console.log('Ads');
	}

	let theWheel = new Winwheel({
		'outerRadius'     : 136,        
		'innerRadius'     : 54,         
		'textFontSize'    : 9,         
		'textOrientation' : 'horizontal',
		'textAlignment'   : 'center',    
		'numSegments'     : 17,         
		'segments'        :             
		[                                                  
			<?php
				$listPremios = $wpdb->get_results( "SELECT *  FROM roleta_premios" );
				$h = 0;
				foreach ($listPremios as $singlePremios) {
					?>
					{'fillStyle' : '<?php if ($h) { echo '#f8c449'; } else { echo '#da030b';} ?>', 'text' : '<?php echo $singlePremios->nome; ?>'}, 
					
					<?php
					$h = ($h) ? 0: 1;
				}
			?>
		],
		'animation' : { 'type'     : 'spinToStop', 'duration' : 10, 'spins'    : 3,  'callbackFinished' : alertPrize, 'callbackSound'    : playSound, 'soundTrigger'     : 'pin' },
		'pins' :                // Turn pins on.
			{
				'number'     : 24,
				'fillStyle'  : 'silver',
				'outerRadius': 1,
			}
	});

	let audio = new Audio('https://www.redeconomia.com.br/wp-content/themes/redeconomia/roleta/tick.mp3');
	function playSound() { audio.pause(); audio.currentTime = 0; audio.play(); }

	let wheelPower    = 0;
	let wheelSpinning = false;

	function ajaxStateChange(spinResponse = 1) {
		if (wheelSpinning == false) {
			theWheel.stopAnimation(false);
			theWheel.rotationAngle = 0;
			theWheel.draw();

			theWheel.animation.spins = 4;
			let stopAt = theWheel.getRandomForSegment(spinResponse);
			theWheel.animation.stopAngle = stopAt;
			theWheel.startAnimation();
			wheelSpinning = true;
		}
	}
	var sendRoleta = false; var titleText = ''; var contentText = ''; var formRoleta = $("#form-action");
	formRoleta.submit( function (e) {
		gtag_report_conversion();
		if (!sendRoleta) {
			e.preventDefault();
			var content = new FormData(formRoleta[0]);
			$.ajax({
				type: 'POST',
				url: roleta_object.location,
				data: content,
				processData: false,
				contentType: false
			}).done( function(returnSend) {
				var contentReturn = JSON.parse(returnSend);
				if (contentReturn.status) { 
					$(".power_controls").html('<h3 class="text-center">Aguarde a roleta terminar de girar!</h3>');
					titleText = contentReturn.title;
					contentText = contentReturn.message;
					ajaxStateChange(contentReturn.spin);
				}
				else { $('.spanMessage').html('<div class="alert alert-danger" role="alert">' + contentReturn.response + '</div>'); }
			});
		}
	});

	function alertPrize(indicatedSegment) { 
		$(".power_controls").html('<h3 class="text-center roleta-title">' + titleText + '</h3><p class="text-center roleta-text">' + contentText + '</p>');
	}

</script>