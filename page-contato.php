<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_parent_theme_file_uri( 'css/contato.min.css' );?>">
<main class="">
    <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif;
    ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>