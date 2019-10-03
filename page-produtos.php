<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_parent_theme_file_uri( 'css/produtos.min.css' );?>">
<h1 class="title-page"><div><span><?php the_title(); ?></span></div></h1>
<main class="gcol-12">
    <div class="produtos gcol-3">
        <?php $catquery = new WP_Query( 'category_name=produtos&orderby=title&order=asc' );
        while($catquery->have_posts()) : $catquery->the_post();
            ?>
            <a class="produto" href="<?php the_permalink() ?>" rel="bookmark">
                <h2><?php the_title(); ?></h2>
                <?php if( has_post_thumbnail() ):
                echo get_the_post_thumbnail();
                endif; 
            echo '</a>';
        endwhile; ?> 
        <?php wp_reset_postdata(); ?>
    </div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>