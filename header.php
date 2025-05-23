<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php 
        if(is_front_page() || is_home()){
            echo get_bloginfo('name');
        } else{
            echo wp_title('').' | '.get_bloginfo('name');
        }?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="language" content="pt-br">
		<meta property="og:locale" content="pt_BR">

        <meta name="description" content="Empresa especializada na fabricação de coletes salva-vidas. Possuímos produtos de alta qualidade.">
        <meta name="og:description" content="Empresa especializada na fabricação de coletes salva-vidas. Possuímos produtos de alta qualidade.">
        <meta name="owner" content="Andréia Andrade, adm.marecia@gmail.com">
		<meta name="designer" content="Jumper_Luko, jumper.luko@gmail.com">
        <meta name="generator" content="VSCode, Sass compiler">
        <meta property="og:image" content="<?php echo get_parent_theme_file_uri( 'img/og-image.png' );?>">
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="800">
		<meta property="og:image:height" content="600">
		
		<meta name="robots" content="index, follow">
		<meta name="keywords" content="Mar&Cia Náutica, coletes, salva vidas, camisa flutuadora">
		<meta name="rating" content="general">
        
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_parent_theme_file_uri( 'img/icon/apple-touch-icon.png' );?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_parent_theme_file_uri( 'img/icon/favicon-32x32.png' );?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_parent_theme_file_uri( 'img/icon/favicon-16x16.png' );?>">
        <link rel="manifest" href="<?php echo get_parent_theme_file_uri( 'manifest.json' );?>">
        <link rel="mask-icon" href="<?php echo get_parent_theme_file_uri( 'img/icon/safari-pinned-tab.svg' );?>" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#55c5d0">
        <meta name="theme-color" content="#e9f2f1">
        <script>
			if ('serviceWorker' in navigator) {
				navigator.serviceWorker.register('<?php echo get_parent_theme_file_uri( '/sw.js' );?>')
					// .then(function() { console.log("Service Worker Registered"); });
			}
		</script>

        <link rel="stylesheet" type="text/css" href="<?php echo get_parent_theme_file_uri( 'style.min.css' );?>">
        <link rel="stylesheet" type="text/css" href="<?php echo get_parent_theme_file_uri( 'css/responsive_flex-grid.min.css' );?>">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    </head>

    <body>
        <nav class="menu col-12 gcol-ss-2 gcol-m-12">
            <a href="/redes-sociais/" class="option1">REDES SOCIAIS</a>
            <a href="/quem-somos/" class="option3">QUEM SOMOS</a>

            <a href="/qualidade/" class="big-option1">QUALIDADE</a>
            <a href="/representacao/" class="big-option2">REPRESENTAÇÃO</a>
            <a href="/produtos/" class="big-option3">PRODUTOS</a>
            <a href="/contato/" class="big-option4">CONTATO</a>  
            
            <a href="/" class="logo"><img src="<?php echo get_parent_theme_file_uri( 'img/marecia-nautica.svg' );?>"/></a>
        </nav>
        <div class="menu-border"></div>