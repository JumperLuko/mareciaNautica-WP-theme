<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_parent_theme_file_uri( 'css/single.min.css' );?>">
<header class="title-post"><h1><?php the_title(); ?></h1></header>
<main class="">
    <div></div>
    <div class="content">
        <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
            endwhile; else: ?>
                <p>Desculpe, sem posts matched your criteria.</p>
            <?php endif; ?>
        </div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>