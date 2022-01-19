<?php 
/*
Template name: Resultado do Instagram
*/
get_header(); 
?>
<main class="page page-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 my-3">
				<h3>Relatório de Prêmios</h3>
				<?php 
				
				$listPremios = $wpdb->get_results( "SELECT username, id, COUNT(*) AS num FROM wp_interacoes GROUP BY username ORDER BY COUNT(*) DESC LIMIT 100" );
				?>
				<table class="table">
					<thead>
						<tr>
						<th scope="col">Instagram</th>
						<th scope="col">Quantidade</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($listPremios as $singlePremios){
							?>
							<tr>
								<td><a href="https://www.instagram.com/<?php echo $singlePremios->username; ?>" target="_blank">@<?php echo $singlePremios->username; ?></a></td>
								<td><?php echo $singlePremios->num; ?> interações</td>
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