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
        
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_parent_theme_file_uri( 'img/icon/apple-touch-icon.png' );?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_parent_theme_file_uri( 'img/icon/favicon-32x32.png' );?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_parent_theme_file_uri( 'img/icon/favicon-16x16.png' );?>">
        <link rel="manifest" href="<?php echo get_parent_theme_file_uri( 'manifest.json' );?>">
        <link rel="mask-icon" href="<?php echo get_parent_theme_file_uri( 'img/icon/safari-pinned-tab.svg' );?>" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#55c5d0">
        <meta name="theme-color" content="#ffffff">
        <link rel="icon" type="image/png" href="<?php echo get_parent_theme_file_uri( 'img/icon/icon.png' );?>">
        <script>
			if ('serviceWorker' in navigator) {
				navigator.serviceWorker.register('<?php echo get_parent_theme_file_uri( '/sw.js' );?>')
					// .then(function() { console.log("Service Worker Registered"); });
			}
		</script>

        <link rel="stylesheet" type="text/css" href="<?php echo get_parent_theme_file_uri( 'style.min.css' );?>">
        <link rel="stylesheet" type="text/css" href="<?php echo get_parent_theme_file_uri( 'css/responsive_flex-grid.min.css' );?>">
    </head>

    <body>
        <nav class="menu col-12 gcol-m-12">
            <a href="" class="option1">VAGAS DE EMPREGO</a>
            <a href="" class="option2">REDES SOCIAIS</a>
            <a href="" class="option3">QUEM SOMOS</a>

            <a href="" class="big-option1">QUALIDADE</a>
            <a href="" class="big-option2">REPRESENTAÇÃO</a>
            <a href="/produtos/" class="big-option3">PRODUTOS</a>
            <a href="/contato/" class="big-option4">CONTATO</a>  
            
            <a href="/" class="logo"><img src="<?php echo get_parent_theme_file_uri( 'img/marecia-nautica.svg' );?>"/></a>
        </nav>
        <div class="menu-border"></div>