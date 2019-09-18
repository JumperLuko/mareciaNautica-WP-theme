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
        
        <link rel="stylesheet" type="text/css" href="<?php echo get_parent_theme_file_uri( 'style.min.css' );?>">
        <link rel="stylesheet" type="text/css" href="<?php echo get_parent_theme_file_uri( 'css/responsive_flex-grid.min.css' );?>">
    </head>

    <body>
        <nav class="menu gcol--12">
            <a href="" class="option1">VAGAS DE EMPREGO</a>
            <a href="" class="option2">REDES SOCIAIS</a>
            <a href="" class="option3">QUEM SOMOS</a>

            <a href="" class="big-option1">QUALIDADE</a>
            <a href="" class="big-option2">REPRESENTAÇÃO</a>
            <a href="" class="big-option3">PRODUTOS</a>
            <a href="" class="big-option4">CONTATO</a>  
            
            <a href="/" class="logo"><img src="<?php echo get_parent_theme_file_uri( 'img/marecia-nautica.svg' );?>"/></a>
        </nav>
        <div class="menu-border"></div>