<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_parent_theme_file_uri( 'css/contato.min.css' );?>">
<main class="">
    <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
            ?><h2><?php the_title(); ?></h2><?php
            the_content();
        endwhile; else: ?>
            <p>Desculpe, sem posts matched your criteria.</p>
        <?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>