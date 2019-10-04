<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_parent_theme_file_uri( 'css/single.min.css' );?>">
<h1 class="title-post"><?php the_title(); ?></h1>
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