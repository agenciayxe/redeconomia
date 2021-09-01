<?php 
require_once 'inc/load.php';

/* Links */
$argVar = array(
	'radio' => 'http://www.redeconomia.com.br/player',
	'email' => 'https://webmail.exchange.locaweb.com.br/owa/auth/logon.aspx?replaceCurrent=1&url=https%3a%2f%2fwebmail.exchange.locaweb.com.br%2fowa%2f',
	'facebook' => 'https://pt-br.facebook.com/redeconomia',
	'instagram' => 'https://www.instagram.com/souredeconomia/',
	'youtube' => 'https://www.youtube.com/user/souredeconomia',
	'appstore' => 'https://itunes.apple.com/br/app/clube-redeconomia/id1458527719?mt=8',
	'googleplay' => 'https://play.google.com/store/apps/details?id=com.valedesconto.redeconomia2',
	'quebracabeca' => 'http://redeconomia.com.br/download/quebra-cabeca-redeconomia.pdf',

	'inicio' => 7,
	'ofertas' => 13,
	'encarte' => 32993,
	'lamina' => 32995,
	'sobre' => 11,
	'sac' => 17,
	'lojas' => 15,
	'fidelidade' => 50,
	'trabalhe' => 19,
	'promocoes' => 21,
	'cadastre' => 42850,
	'newsletter' => 42850,
);
InfoVar::save($argVar);
?>