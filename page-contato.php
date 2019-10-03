<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_parent_theme_file_uri( 'css/contato.min.css' );?>">
<h1 class="title-page"><div><span><?php the_title(); ?></span></div></h1>
<main class="">
    <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
        endwhile; else: ?>
            <p>Desculpe, sem posts matched your criteria.</p>
        <?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>