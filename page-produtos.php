<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_parent_theme_file_uri( 'css/produtos.min.css' );?>">
<main class="">
    <?php the_title();
    echo do_shortcode("[catlist name='Produtos']");
    ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>