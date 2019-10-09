<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_parent_theme_file_uri( 'css/page.min.css' );?>">
<article class="col--11 col-8" style="margin: 0 auto 100px auto;">
    <header class="title-page"><div><h1><?php the_title(); ?></h1></div></header>
    <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
        endwhile; else: ?>
            <p>Desculpe, sem posts matched your criteria.</p>
        <?php endif; ?>
</article>
<?php get_sidebar(); ?>
<?php get_footer(); ?>