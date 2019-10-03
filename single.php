<?php get_header(); ?>
<h1 class="title-page"><?php the_title(); ?></h1>
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