<?php 
/*
Template name: Pais
*/
get_header(); 
get_template_part('templates/ads', 'contact');
?>
<main class="page page-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 form-father">
				<h2>Concurso Dia das Crianças com a Sadia e Redeconomia é pra você!</h2>
				
				<form action="" method="post" id="form-father">
					<div class="row">
						<div class="col-md-6">
							<input type="text" name="name" id="name" class="input-contato" placeholder="Nome completo do responsável">
						</div>
						<div class="col-md-6">
							<input type="text" name="father" id="father" class="input-contato" placeholder="Nome completo do menor (criança)">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<input type="text" name="email" id="email" class="input-contato" placeholder="Número do documento com foto do responsável">
						</div>
						<div class="col-md-6">
							<input type="text" name="phone" id="phone" class="input-contato" placeholder="Telefone de contato">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="text" name="address" id="address" class="input-contato" placeholder="Idade da criança">
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
					<!--<div class="row">
						<div class="col-md-12">
							<textarea name="message" id="message" class="input-contato" cols="30" rows="5" placeholder="Descreva a sua receita aqui"></textarea>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<h3>Envie a foto da sua receita</h3>
						</div>
						<div class="col-md-6">
							<input type="file" name="photo" class="input-contato" id="photo">
						</div>
						<div class="col-md-6">
							<button type="button" class="button-contato" id="delete-file-contact">Excluir</button>
						</div>
					</div>-->

					<br />
					<div class="my-3" id="response-father"></div>
					Ao enviar, Autorizo de livre e espontânea vontade, a Redeconomia, a utilizar e veicular a imagem do menor, o qual represento legalmente, com finalidade comercial, não recebendo qualquer tipo de remuneração Declaro estar ciente de que as imagens poderão ser divulgadas, sem prazo estipulado, em publicações impressas e/ou eletrônicas, páginas das redes sociais, exposições públicas e outros locais indicados pela organização. Declaro ainda que a cessão dos direitos de veiculação de imagem, do qual trata esta autorização, é válida exclusivamente para os usos acima estabelecidos.
					<br />

					<input type="hidden" name="action" value="father">
					<input type="submit" class="button-contato">
				</form>
	
</br>
</br>



				<div class="regulamento py-3 px-4 bg-light rounded">
					<h3>Leia com atenção!</h3>
					<p>Você é daquelas crianças que amam brincar e se divertir ?</p>
					<p>Concurso Dia das Crianças com a Sadia e Redeconomia é pra você!</p>
					<p>Concorra a 20 kits com produtos da Sadia para deixar a alimentação reforçada das crianças após as brincadeiras.</p>
					<p>Para participar você precisará:
					- Preencher todos os dados acima;
					- Postar uma foto do momento mais divertido da criança no conforto de seu lar no feed do Instagram, usando as hashtag: #Redeconomia, #MundoMágiconaRedeconomia e #SadiaRedeconomia;
					- Seguir o Instagram: @souredeconomia;</p>
					<p>As 20 melhores fotos ganharão um kit com produtos Sadia: 1 pct Batata Palito 400g, 1 pct Nuggets 300g, 1 pct Mac’n Cheese 350g, 1 pct de Hambúrguer de Frango Empanado 360g e 1 pct Salsicha Hot Dog 500g.</p>
					<p>A escolha das fotos mais divertidas será feita por nossa equipe e contará com a seleção de 20 crianças ao total, até 12 anos.</p>
					<p>Antes de enviar o formulário, verifique se todas as informações estão corretas, pois é através delas que iremos entrar em contato caso você seja o ganhador. É necessário que todos os campos estejam com as devidas respostas preenchidas. Caso não esteja, a/o participante estará desclassificado.</p>
					<p>A/O participante é livre para comentar em nossa postagem no Facebook ou Instagram, porém a foto válida será apenas a postada no seu próprio feed do Instagram usando as hashtags solicitadas.</p>
					<p>Ao postar a foto e nos marcando, você estará concordando e autorizando a divulgação da mesma em nossas redes sociais e/ou outros meios pertencentes à Redeconomia no dia do resultado.</p>
					<p>O período de participação vai do dia 02 de Outubro, assim que a postagem estiver no ar, até o dia 20 de Outubro de 2020, às 18h00. A divulgação em nossas redes sociais será no dia 23 de Outubro de 2020.</p>
					<p>Serão desclassificados funcionários, gerentes, diretores, seus parentes e todo o pessoal envolvido diretamente com a produção da promoção. Não serão aceitos inscrições incompletas, que não estiverem cumprido todas as etapas da promoção, ou que não permitam a identificação do cliente que o preencheu;</p>

					<h3>Para os ganhadores:</h3>
					<p>O período de retirada será entre 29 a 31 de outubro de 2020. É necessário ir à loja que foi selecionada no questionário portando seu documento de identificação, com o nome completo do responsável.</p>
					<p>Em caso de impossibilidade da retirada neste período, é preciso informar em algum de nossos canais de contato: Facebook (@redeconomia) e Instagram (@souredeconomia).</p>
				</div>
			</div>
		</div>
	</div>
</main>
<?php 
get_footer(); 
?>