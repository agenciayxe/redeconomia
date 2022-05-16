<?php
/*
Template Name: Nova Roleta
*/
?>
<!DOCTYPE html>
<html class="h-100">

<head>

    <title><?php echo wp_title('-'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
    <meta name="google-site-verification" content="B5PVfICz_RztOqwyQiHKCpsvsoUA1FbvTp8gmHgcPQM" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.min.css">
    <link href="<?php bloginfo('template_url'); ?>/inc/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/swiper.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css?v=1.1.22">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110492274-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-110492274-1');
    </script>
    <link rel="shortcut icon" type="image/x-icon" href="https://www.redeconomia.com.br/wp-content/uploads/2019/06/logo-ico.png">
    <!-- Global site tag (gtag.js) - Google Ads: 824599583 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-824599583"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-824599583');
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2693151697400320');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=2693151697400320&ev=PageView
	&noscript=1" />
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
    <meta property="fb:admins" content="100003466640029" />
    <?php wp_head(); ?>
    <?php flush(); ?>
    <!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
    <script src="<?php echo get_bloginfo('template_url'); ?>/roleta/js/winwheel.js"></script>
    <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js" integrity="sha512-UxP+UhJaGRWuMG2YC6LPWYpFQnsSgnor0VUF3BHdD83PS/pOpN+FYbZmrYN+ISX8jnvgVUciqP/fILOXDjZSwg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/roleta/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #222;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center h-100">
    <main class="page-biography section">
        <div class="container">
            <!-- <div class="row d-flex justify-content-center">
                <div class="col-md-12 d-flex justify-content-center">
                    <img src="<?php echo get_bloginfo('template_url'); ?>/roleta/logo-roleta-premiada.png" class="img-fluid" width="250" alt="">
                </div>
            </div> -->
            <div class="row d-flex justify-content-center">
                <div width="370" height="370" class="the_wheel">
                    <canvas id="canvas" width="370" height="370">
                        <p style="{color: white}" align="center">Sorry, your browser doesn't support canvas. Please try another.</p>
                    </canvas>
                </div>
            </div>
            <div class="row d-flex justify-content-center button-roleta">
                <div class="power_controls">
                    <form id="form-action" action="" method="post" enctype="multipart/form-data">   
                        <div class="my-3">
                            <button type="submit" class="btn btn-roleta" id="spin_button">GIRAR ROLETA</button>
                        </div>
                        <div class="spanMessage"></div>
                        <input type="hidden" name="action" value="roleta" />
                    </form>

                </div>
            </div>
            <script>
                function getRandom(min, max) {
                    return Math.floor(Math.random() * (max - min) ) + min;
                }
                $(document).ready(function() {
                    $('#modalRoleta').modal('show');
                });

                function gtag_report_conversion() {
                    gtag('create', 'AW-824599583', 'auto');
                    gtag('event', 'conversion', {
                        'send_to': 'AW-824599583/cNbWCMOUzcQBEJ_ImYkD'
                    });
                    console.log('Ads');
                }
                var listOptions = [
                    
                    { 'fillStyle': '#da030b','text': '#TôDentro' },
                    { 'fillStyle': '#f8c449','text': 'Não foi \n dessa vez' },
                    
                    { 'fillStyle': '#da030b','text': '#TôDentro' },
                    { 'fillStyle': '#f8c449','text': 'Não foi \n dessa vez' },
                    
                    { 'fillStyle': '#da030b','text': '#TôDentro' },
                    { 'fillStyle': '#f8c449','text': 'Não foi \n dessa vez' },
                    
                    { 'fillStyle': '#da030b','text': '#TôDentro' },
                    { 'fillStyle': '#f8c449','text': 'Não foi \n dessa vez' },
                ];
                let theWheel = new Winwheel({
                    'outerRadius': 156,
                    'innerRadius': 60,
                    'textFontSize': 14,
                    'textOrientation': 'horizontal',
                    'textAlignment': 'center',
                    'numSegments': 8,
                    'segments': listOptions,
                    'animation': {
                        'type': 'spinToStop',
                        'duration': 10,
                        'spins': 3,
                        'callbackFinished': alertPrize,
                        'callbackSound': playSound,
                        'soundTrigger': 'pin'
                    },
                    'pins': // Turn pins on.
                    {
                        'number': 24,
                        'fillStyle': 'silver',
                        'outerRadius': 1,
                    }
                });

                let audio = new Audio('https://www.redeconomia.com.br/wp-content/themes/redeconomia/roleta/tick.mp3');

                function playSound() {
                    audio.pause();
                    audio.currentTime = 0;
                    audio.play();
                }

                let wheelPower = 0;
                let wheelSpinning = false;

                function ajaxStateChange(spinResponse = 1) {
                    if (wheelSpinning == false) {
                        
                        wheelSpinning = true;
                        theWheel.stopAnimation(false);
                        theWheel.rotationAngle = 0;
                        theWheel.draw();

                        theWheel.animation.spins = 4;
                        let stopAt = theWheel.getRandomForSegment(spinResponse);
                        theWheel.animation.stopAngle = stopAt;
                        theWheel.startAnimation();
                    }
                }
                var sendRoleta = false;
                var titleText = '';
                var contentText = '';
                var formRoleta = $("#form-action");
                formRoleta.submit(function(e) {
                    e.preventDefault();
                    ajaxStateChange(getRandom(1, 8));
                });

                

                function alertPrize(indicatedSegment) {
                    wheelSpinning = false;
                }
            </script>
        </div>
    </main>

    <script src="<?php bloginfo('template_url'); ?>/js/swiper.min.js"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5bbf6f323dad74f2"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.pkgd.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="<?php bloginfo('template_url'); ?>/js/swiper.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/inc/bxslider/jquery.bxslider.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/functions.js?v=1.1.19"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/functions-store.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/TRACK_2382.js"></script>
    <script>
        $('.modal-destaque').modal('show');
    </script>

    <?php wp_footer(); ?>
</body>

</html>