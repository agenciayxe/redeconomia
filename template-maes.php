<?php 
/*
Template name: Mães
*/
get_header(); 
get_template_part('templates/ads', 'contact');
?>
<main class="page page-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 form-mother">
				<h2>Promoção do Mês das mães</h2>
				<form action="" method="post" id="form-mother">
					<div class="row">
						<div class="col-md-6">
							<input type="text" name="name" id="name" class="input-contato" placeholder="Nome Completo">
						</div>
						<div class="col-md-6">
							<input type="text" name="mother" id="mother" class="input-contato" placeholder="Nome da Mãe">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<input type="text" name="email" id="email" class="input-contato" placeholder="E-mail">
						</div>
						<div class="col-md-6">
							<input type="text" name="phone" id="phone" class="input-contato" placeholder="Telefone">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="text" name="address" id="address" class="input-contato" placeholder="Endereço">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<select name="store" id="store" class="input-contato">
								<option selected disabled>Selecione uma loja</option>
								<?php
									$listStores = array(
										'post_type' => 'lojas',
										'posts_per_page' => -1
									);
									$queryStores = new WP_Query($listStores);
									if ($queryStores->have_posts()) {
										while ($queryStores->have_posts()) {
											$queryStores->the_post();
											?>
											<option value="<?php echo get_the_title(); ?> - <?php echo get_the_content(); ?>"><?php echo get_the_title(); ?> - <?php echo get_the_content(); ?></option>
											<?php
										}
									}
								?>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<textarea name="message" id="message" class="input-contato" cols="30" rows="5" placeholder="Minha mãe merece ganhar um vale compras de 300 reais porque:"></textarea>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<h3>Foto com a mãe</h3>
						</div>
						<div class="col-md-6">
							<input type="file" name="photo" class="input-contato" id="photo">
						</div>
						<div class="col-md-6">
							<button type="button" class="button-contato" id="delete-file-contact">Excluir</button>
						</div>
					</div>
					<input type="hidden" name="action" value="mother">
					<input type="submit" class="button-contato">
					<br />
					<div id="response-mother"></div>
				</form>

				<div class="regulamento py-3 px-4 bg-light rounded">
					<h3>Leia com atenção!</h3>
					<p>Esta é sua chance de dar um presente incrível para sua mãe. Um vale compras de 300 reais! Qual mãe não gostaria de um presente desses, não é mesmo?</p>
					<p>Para participar você precisará preencher todos os dados acima e completar a frase "Minha mãe merece ganhar um vale compras de 300 reais porque...". A escolha das melhores frases será feita por nossa equipe e contará com a escolha de 10 mães no total, dependendo da disponibilidade da loja escolhida.</p>
					<p>Antes de enviar o questionário, verifique se todas as informações estão corretas, pois é através delas que iremos entrar em contato caso a mãe seja a ganhadora. É necessário que todos os campos estejam com as devidas respostas. Caso não esteja, a/o concorrente estará desclassificada.</p>
					<p>A/O participante é livre para comentar em nossa postagem no Facebook ou Instagram, porém a resposta válida será apenas a enviada nesta página.</p>
					<p>Ao enviar a foto, você estará concordando e autorizando a divulgação da mesma em nossas redes sociais e/ou outros meios pertencentes à Redeconomia. </p>
					<p>O período de participação vai do dia 01 de maio, assim que a postagem estiver no ar, até o dia 27 de maio de 2020, às 12h00. A divulgação em nossas redes sociais será no dia 28 de maio 2020.</p>
					<h3>Para os filhos das mães ganhadoras:</h3>
					<p>O período de retirada e uso do vale compras é do dia 28 ao dia 30 de maio de 2020. É necessário ir à loja que foi selecionada no questionário portando seu documento de identificação, com o nome completo e nome da mãe.</p>
					<p>Em caso de impossibilidade da retirada neste período, é preciso informar em algum de nossos canais de contato: Facebook, Instagram, Telefone ou E-mail.</p>
				</div>
			</div>
			<!--
			<div class="col-md-6 info-contact">
				<div class="list-info-contacts">
					<a href="https://www.facebook.com//">
						<div class="single-contact">
							<div class="contact-icon">
								<i class="icons icon-red icon-facebook"></i>
							</div>
							<div class="contact-icon">
								/
							</div>
						</div>
					</a>
					<a href="https://www.instagram.com//">
						<div class="single-contact">
							<div class="contact-icon">
								<i class="icons icon-red icon-instagram"></i>
							</div>
							<div class="contact-icon">
								@
							</div>
						</div>
					</a>
				</div>
			</div>
			-->
		</div>
	</div>
</main>
<?php 
get_footer(); 
?>