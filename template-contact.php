<?php 
/*
Template name: Contato
*/
get_header(); 
get_template_part('templates/ads', 'contact');
?>
<main class="page page-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 form-contact">
				<form action="" method="post" id="form-contact">
					<input type="text" name="name" id="name" class="input-contato" placeholder="Nome">
					<input type="text" name="email" id="email" class="input-contato" placeholder="E-mail">
					<input type="text" name="phone" id="phone" class="input-contato" placeholder="Telefone">
					<textarea name="message" id="message" class="input-contato" cols="30" rows="5" placeholder="Digite sua mensagem"></textarea>
					<input type="hidden" name="action" value="contact">
					<input type="submit" class="button-contato">
					<br />
					<div id="response-contact"></div>
				</form>
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