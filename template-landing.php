<?php
/*
Template name: Landing Page - Newsletter
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo wp_title('-'); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110492274-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-110492274-1');
	</script>
	<link rel="shortcut icon" type="image/x-icon" href="https://www.redeconomia.com.br/wp-content/uploads/2019/06/logo-ico.png"> 
	<!-- Global site tag (gtag.js) - Google Ads: 824599583 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-824599583"></script>
	<script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-824599583'); </script>

	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '2693151697400320'); 
	fbq('track', 'PageView');
	</script>
	<noscript>
	<img height="1" width="1" 
	src="https://www.facebook.com/tr?id=2693151697400320&ev=PageView
	&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->

	<?php 
	if (is_single() || is_page()) {
		$postCurrent = get_post(get_the_id());
		?>
		<meta property="og:locale" content="pt_BR">
		<meta property="og:url" content="<?php echo get_the_permalink(); ?>">
		<meta property="og:title" content="<?php echo wp_title('-'); ?>">
		<meta property="og:site_name" content="<?php bloginfo('title'); ?>">
		<meta property="og:description" content="<?php echo $postCurrent->post_excerpt; ?>">
		<?php 
		if (get_the_post_thumbnail()) {
			$idThumbnail = get_post_thumbnail_id(get_the_id());
			$imageData = wp_get_attachment_image_src($idThumbnail, 'medium_large');
			?>
			<meta property="og:image" content="<?php echo get_the_post_thumbnail_url(get_the_id(), 'thumbnail'); ?>">
			<meta property="og:image:type" content="image/jpeg">
			<meta property="og:image:width" content="<?php echo $imageData[1]; ?>">
			<meta property="og:image:height" content="<?php echo $imageData[2]; ?>">
			<?php 
		}
		?>
		<meta property="og:type" content="website">
		<meta property="og:type" content="article">
		<meta property="article:published_time" content="<?php echo get_the_date(); ?>">
		<?php  
	}
	?>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.3&appId=637169509760254&autoLogAppEvents=1"></script>
	<meta property="fb:app_id" content="637169509760254" />
	<meta property="fb:admins" content="100003466640029"/>
    <link rel="shortcut icon" type="image/x-icon" href="https://www.redeconomia.com.br/wp-content/uploads/2019/06/logo-ico.png"> 
    <style>
        body {
            margin: 0px;
            background-color: #efefef;
            /* color: #9D0308; */
            color: #da030b;
        }
        a, a:visited, a:focus, a:hover {
            color: #029030;
        }
        header {
            text-align: center;
        }
        header .logo {
            margin: 20px auto;
        }
        header h2.title {
            text-transform: uppercase;
            font-size: 25px;
        }
        p {
            font-size: 18px;
        }
        section .form-signature form .form-control {
            display: block;
            width: 100%;
            margin: 15px 0px;
            padding: 25px 15px;
            background-color: #9D0308;
            color: #efefef;
            border-radius: 5px;
            border: none;
        }
        section .form-signature form .form-control::placeholder {
            color: #efefef;
        }
        section .form-signature form .form-select {
            display: block;
            width: 100%;
            margin: 15px 0px;
            padding: 15px 15px;
            background-color: #9D0308;
            color: #efefef;
            border-radius: 5px;
            border: none;
        }
        section .form-signature form button, section .form-signature form input[type=button], section .form-signature form .btn {
            background-color: transparent;
            font-size: 20px;
            margin: 15px 0px;
            border: solid 1px #9d0308;
            color: #9d0308;
            float: right;
        }
        section .form-signature form button:hover, section .form-signature form input[type=button]:hover, section .form-signature form .btn:hover { background-color: #9d0308; border-color: #9d0308; color: #efefef; }
        section .section-text {
            text-align: center;
        }
        section .section-text .img-destaque {
            max-width: 300px;
            width: 100%;
            display: block;
            margin: 0px auto;
        }
        @media screen and (max-width: 576px) {
            section .img-destaque {
                max-width: 250px;
                margin: 0px auto;
                display: block;
            }
            header h2.title {
                text-transform: uppercase;
                font-size: 18px;
            }
            header p {
                font-size: 14px;
            }
        }
        @media screen and (min-width: 576px) and (max-width: 768px) {

            header h2.title {
                text-transform: uppercase;
                font-size: 20px;
            }
            header p {
                font-size: 16px;
            }
        }
    </style>
    <?php
    wp_head();
    ?>
</head>
<body>
    <main>
        <div class="container">
            <header class="topo">
                <img src="<?php echo get_bloginfo('template_url'); ?>/img/logo.png" class="logo" alt="">
                <h2 class="title">Que bom ter você aqui! </h2>
            </header>
            <section>
                <div class="row my-3 d-flex">
                    <div class="col-md-6 section-text">
                        <p><strong>Ficamos muito felizes por você ficar ainda mais pertinho da gente! </strong></p>
                        <p>Preencha o formulário para receber todas as novidades, informações, lembretes e claro, muita promoção para você economizar mais.</p>
                        <p>Mas não se esqueça, todos os campos são obrigatórios</p>
                        <img src="<?php echo get_bloginfo('template_url'); ?>/img/landing/newsletter.png" class="img-destaque img-fluid" alt="">
                    </div>
                    <div class="col-md-6 form-signature">
                        <form action="" method="post">
                            <input type="text" name="nome" class="form-control" placeholder="Nome">
                            
                            <input type="text" name="email" class="form-control" placeholder="E-mail">

                            <select name="bairro" class="form-select">
                                <option selected="selected" disabled>Bairro</option>
                                <option value="">teste</option>
                                <option value="">teste</option>
                                <option value="">teste</option>
                            </select>

                            <select name="genero" class="form-select" id="">
                                <option selected="selected" disabled>Gênero</option>
                                <option value="">teste</option>
                                <option value="">teste</option>
                                <option value="">teste</option>
                            </select>
                            
                            <input type="checkbox" name="accept"> Concordo em receber comunicações por email de acordo com a <a href="https://www.redeconomia.com.br/politica-de-privacidade/" target="_blank">Política de Privacidade</a>.

                            <button type="submit" class="btn btn-primary d-block">Enviar</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php
    wp_footer();
    ?>
</body>
</html>