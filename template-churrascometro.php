<?php 
/*
Template Name: Churrascometro
*/
get_header(); 
get_template_part('templates/ads', 'about');
?>
<main class="page-biography section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
				$listagemTypes = array(
					array('title' => 'Carnes', 'slug' => 'carnes'),
					array('title' => 'Complementos', 'slug' => 'complementos'),
					array('title' => 'Acompanhamentos', 'slug' => 'acompanhamentos'),
					array('title' => 'Suprimentos', 'slug' => 'suprimentos'),
					array('title' => 'Bebidas', 'slug' => 'bebidas'),
				);
				$listagemParametros = array(
					'carnes' => array(
						array('title' => 'Carne Bovina', 'slug' => 'carne_bovina', 'adulto' => 200, 'crianca' => 100, 'medida' => 'g'),
						array('title' => 'Drumet', 'slug' => 'drumet', 'adulto' => 180, 'crianca' => 90, 'medida' => 'g'),
						array('title' => 'Linguiça', 'slug' => 'linguica', 'adulto' => 100, 'crianca' => 50, 'medida' => 'g'),
					),
					'complementos' => array(
						array('title' => 'Queijo Coalho', 'slug' => 'queijo_coalho', 'adulto' => 100, 'crianca' => 50, 'medida' => 'g'),
					),
					'acompanhamentos' => array(
						array('title' => 'Arroz', 'slug' => 'arroz', 'adulto' => 115, 'crianca' => 57.5, 'medida' => 'g'),
						array('title' => 'Vinagrete', 'slug' => 'vinagrete', 'adulto' => 35, 'crianca' => 17.5, 'medida' => 'g'),
						array('title' => 'Farofa', 'slug' => 'farofa', 'adulto' => 30, 'crianca' => 15, 'medida' => 'g'),
					),
					'suprimentos' => array(
						array('title' => 'Copo', 'slug' => 'copo', 'adulto' => 3, 'crianca' => 1.5, 'medida' => 'unid'),
						array('title' => 'Prato', 'slug' => 'prato', 'adulto' => 2, 'crianca' => 1, 'medida' => 'unid'),
						array('title' => 'Guardanapo', 'slug' => 'guardanapo', 'adulto' => 5, 'crianca' => 2.5, 'medida' => 'unid'),
						array('title' => 'Garfo', 'slug' => 'garfo', 'adulto' => 2, 'crianca' => 1, 'medida' => 'unid'),
						array('title' => 'Faca', 'slug' => 'faca', 'adulto' => 2, 'crianca' => 1, 'medida' => 'unid'),
						array('title' => 'Colher', 'slug' => 'colher', 'adulto' => 2, 'crianca' => 1, 'medida' => 'unid'),
						array('title' => 'Sal Grosso', 'slug' => 'sal_grosso', 'adulto' => 10, 'crianca' => 5, 'medida' => 'g'),
						array('title' => 'Carvão', 'slug' => 'carvao', 'adulto' => 360, 'crianca' => 180, 'medida' => 'g'),
					),
					'bebidas' => array(
						array('title' => 'Refrigerante', 'slug' => 'refrigerante', 'adulto' => 500, 'crianca' => 250, 'medida' => 'ml'),
						array('title' => 'Cerveja', 'slug' => 'cerveja', 'adulto' => 500, 'crianca' => 0, 'medida' => 'ml'),
						array('title' => 'Suco', 'slug' => 'suco', 'adulto' => 500, 'crianca' => 250, 'medida' => 'ml'),
					),
				);
				// if ((!$_COOKIE['dados'] && !$_POST) || ($_GET['action'] && $_GET['action'] == 'new')) {
				if (!$_POST || ($_GET['action'] && $_GET['action'] == 'new')) {
					?>
						<form action="<?php echo get_page_link(33945); ?>" class="form" method="post" id="calculadora" name="Calculadora do Churrasco">
							<div class="row">
								<div class="col-md-12">
									<h3 class="no-margin my-3">Quantas Pessoas?</h3>
								</div>
								<div class="col-md-6">
									<label for="form-field-homens" class="elementor-field-label">Adultos</label>
									<input type="number" name="adultos" id="form-field-adultos" class="input-contato" value="0" min="0" max="">
								</div>
								<div class="col-md-6">
									<label for="form-field-criancas" class="elementor-field-label">Crianças de até 12 anos</label>
									<input type="number" name="criancas" id="form-field-criancas" class="input-contato" value="0" min="0" max="">
								</div>
							</div>
							

							<div class="row">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-12">
											<h3>Quais carnes?</h3>
										</div>
										<div class="col-md-12">
											<div class="elementor-field-subgroup">
												<?php 
												foreach ($listagemParametros['carnes'] as $singleCarne) {
													?>
													<div>
														<input type="checkbox" value="<?php echo $singleCarne['slug']; ?>" id="<?php echo $singleCarne['slug']; ?>" name="carnes[]">
														<label for="<?php echo $singleCarne['slug']; ?>">
															<?php echo $singleCarne['title']; ?>
														</label>
													</div>
													<?php 
												}
												?>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<h3>Complementos</h3>
										</div>
										<div class="col-md-12">
											<div class="elementor-field-subgroup">
												<?php 
												foreach ($listagemParametros['complementos'] as $singleComplemento) {
													?>
													<div>
														<input type="checkbox" value="<?php echo $singleComplemento['slug']; ?>" id="<?php echo $singleComplemento['slug']; ?>" name="complementos[]">
														<label for="<?php echo $singleComplemento['slug']; ?>">
															<?php echo $singleComplemento['title']; ?>
														</label>
													</div>
													<?php 
												}
												?>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<h3>Acompanhamentos</h3>
										</div>
										<div class="col-md-12">
											<div class="elementor-field-subgroup">
												<?php 
												foreach ($listagemParametros['acompanhamentos'] as $singleComplemento) {
													?>
													<div>
														<input type="checkbox" value="<?php echo $singleComplemento['slug']; ?>" id="<?php echo $singleComplemento['slug']; ?>" name="acompanhamentos[]">
														<label for="<?php echo $singleComplemento['slug']; ?>">
															<?php echo $singleComplemento['title']; ?>
														</label>
													</div>
													<?php 
												}
												?>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-12">
											<h3>Suprimentos</h3>
										</div>
										<div class="col-md-12">
											<div>
												<?php 
												foreach ($listagemParametros['suprimentos'] as $singleSuprimento) {
													?>
													<div>
														<input type="checkbox" value="<?php echo $singleSuprimento['slug']; ?>" id="<?php echo $singleSuprimento['slug']; ?>" name="suprimentos[]">
														<label for="<?php echo $singleSuprimento['slug']; ?>">
															<?php echo $singleSuprimento['title']; ?>
														</label>
													</div>
													<?php 
												}
												?>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<h3>Bebidas</h3>
										</div>
										<div class="col-md-12">
											<div>
												<?php 
												foreach ($listagemParametros['bebidas'] as $singleBebida) {
													?>
													<div>
														<input type="checkbox" value="<?php echo $singleBebida['slug']; ?>" id="<?php echo $singleBebida['slug']; ?>" name="bebidas[]">
														<label for="<?php echo $singleBebida['slug']; ?>">
															<?php echo $singleBebida['title']; ?>
														</label>
													</div>
													<?php 
												}
												?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<small>
										Enviando essa mensagem, você está aceitando nossa
										<a target="_blank" href="/termos-de-uso/">
											Política de Privacidade e Termos de Uso
										</a>
										.
									</small>
								</div>
								<div class="col-md-12">
									<button type="submit" class="my-3" id="bt-sumit-calculo">
										<span>
											<span class=" elementor-button-icon">
												<i class="fa fa-calculator" aria-hidden="true"></i>
											</span>
											<span class="elementor-button-text">
												Calcular meu churrasco
											</span>
										</span>
									</button>
								</div>
							</div>
						</form>
					<?php
				}
				else {
					$dados = (isset($_POST)) ? $_POST : $_COOKIE['dados'];
					/*
					if (isset($_POST['adultos'])) { setCookie("dados", $dados, time()+3600*3); }
					$dados = json_decode($dados);
					*/
					?>
					<h3 class="my-3">Resultado do Churrascometro</h3>
					<table class="table table-bordered">
						<tbody>
							<?php
								foreach ($listagemTypes as $singleType ) {
									$slugType = $singleType['slug'];
									if (!empty($dados[$slugType])) {
										?>
										<tr>
											<th><?php echo $singleType['title']; ?></th>
											<th>Quantidade</th>
										</tr>
										<?php
										foreach ($listagemParametros[$slugType] as $singleParametro) {
											$slugParametro = $singleParametro['slug'];
											if (in_array($slugParametro, $dados[$slugType])) {
												?>
												<tr>
													<td><?php echo $singleParametro['title']; ?></td>
													<td><?php echo ($dados['adultos'] * $singleParametro['adulto']) + ($dados['crianca'] * $singleParametro['crianca']); ?> <?php echo $singleParametro['medida']; ?></td>
												</tr>
												<?php
											}
										}
									}
								}
							?>
						</tbody>
					</table>
					
					<div class="col-md-12">
						<a href="?action=new">
							<button type="submit" class="my-3" id="bt-sumit-calculo">
								<span>
									<span class=" elementor-button-icon">
										<i class="fa fa-calculator" aria-hidden="true"></i>
									</span>
									<span class="elementor-button-text">
										Fazer Novo Calculo
									</span>
								</span>
							</button>
						</a>
					</div>
					<?php 
				}
				?>				
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>