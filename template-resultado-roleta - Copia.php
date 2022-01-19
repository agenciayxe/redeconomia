<?php 
/*
Template name: Resultado da Roleta
*/
get_header(); 
?>
<main class="page page-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-6 my-3">
				
				<h3>Total de Cadastros</h3>
				
				<?php 
				
				$wpdb->get_results( "SELECT *  FROM roleta_cadastros" );
				$quantidadeCadastros = $wpdb->num_rows;

				?>
				<p><strong><?php echo $quantidadeCadastros; ?> cadastros</strong> no sistema</p>
			</div>
			<div class="col-md-6 my-3">
				
				<h3>Quantidade de Premiados</h3>
				
				<?php 
				
				$wpdb->get_results( "SELECT *  FROM roleta_cadastros WHERE premio_id != 3 AND  premio_id != 7 AND  premio_id != 11 AND  premio_id != 14" );
				$quantidadeCadastros = $wpdb->num_rows;

				?>
				<p><strong><?php echo $quantidadeCadastros; ?> premiados</strong> no sistema</p>
			</div>
			<div class="col-md-12 my-3">
				<h3>Relatório de Prêmios</h3>
				<?php 
				
				$listPremios = $wpdb->get_results( "SELECT *  FROM roleta_premios" );
				?>
				<table class="table">
					<thead>
						<tr>
						<th scope="col">ID</th>
						<th scope="col">Nome do Prêmio</th>
						<th scope="col">Prêmios Recebidos</th>
						<th scope="col">Quantidade Liberada</th>
						<th scope="col">Média cadastro/premio</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($listPremios as $singlePremios){
							?>
							<tr>
								<th scope="row">#<?php echo $singlePremios->id; ?></th>
								<td><?php echo $singlePremios->nome_normal; ?></td>
								<td><?php echo $singlePremios->drawn; ?></td>
								<td><?php echo $singlePremios->quantity; ?></td>
								<td><?php echo $singlePremios->media; ?></td>
							</tr>
							<?php
						}
						?>
					</tbody>
				</table>
			</div>
			
			<div class="col-md-12 my-3">
				<h3>Relatório de Premiados</h3>
				<?php 
				
				$listPremiados = $wpdb->get_results( "SELECT *  FROM roleta_cadastros WHERE premio_id != 3 AND  premio_id != 7 AND  premio_id != 11 AND  premio_id != 14" );
				?>
				<table class="table">
					<thead>
						<tr>
						<th scope="col">Nome</th>
						<th scope="col">E-mail</th>
						<th scope="col">Telefone</th>
						<th scope="col">CPF</th>
						<th scope="col">Loja</th>
						<th scope="col">Nome do Prêmio</th>
						<th scope="col">Data e Hora</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($listPremiados as $singlePremiados){
								$listLojas = array(
									'post_type' => 'lojas',
									'posts_per_page' => 1,
									'p' =>  $singlePremiados->loja,
								);
								$wpLojas = new WP_Query($listLojas);
								if ($wpLojas->have_posts()) {
									while ($wpLojas->have_posts()) {
										$wpLojas->the_post();
										$categoryLojas = get_the_terms(get_the_ID(), 'lojas');
										$nomeLoja = $categoryLojas[0]->name . ' - ' . get_the_title();
									}
								}

								$listPremios = $wpdb->get_results( "SELECT *  FROM roleta_premios WHERE id='{$singlePremiados->premio_id}'" );
								$quantity = $wpdb->num_rows;
								if ($quantity == 1) {
									foreach ($listPremios as $singlePremios) {
										$nomeDoPremio = $singlePremios->nome_normal;
									}
								}
							?>
							<tr>
								<td><?php echo $singlePremiados->nome; ?></td>
								<td><?php echo $singlePremiados->email; ?></td>
								<td><?php echo $singlePremiados->telefone; ?></td>
								<td><?php echo $singlePremiados->cpf; ?></td>
								<td><?php echo $nomeLoja; ?></td>
								<td><?php echo $nomeDoPremio; ?></td>
								<td><?php echo strftime("%d/%m/%Y %H:%M", strtotime($singlePremiados->data_hora)); ?></td>
							</tr>
							<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</main>
<?php 
get_footer(); 
?>