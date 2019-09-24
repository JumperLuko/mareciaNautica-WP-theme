<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_parent_theme_file_uri( 'css/home.min.css' );?>">
<?php echo do_shortcode("[metaslider id='25']"); ?>
<?php get_sidebar(); ?>
<a href="https://www.instagram.com/marecianautica/" class="ainherit centerText" target="_BLANK" title="@marecianautica"><h1 style="margin-top: 150px;">Siga-nos no Instagram</h1></a>
<?php echo do_shortcode("[wdi_feed id='1']"); ?>
<?php get_footer(); ?>