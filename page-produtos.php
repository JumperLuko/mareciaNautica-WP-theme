<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_parent_theme_file_uri( 'css/produtos.min.css' );?>">
<main class="">

<!-- https://www.wpbeginner.com/wp-tutorials/how-to-display-recent-posts-from-a-specific-category-in-wordpress/ -->
<?php $catquery = new WP_Query( 'category_name=produtos' ); ?>
<ul>
<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
<li><h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
<ul><li><?php the_content(); ?></li>
</ul>
</li>
<?php endwhile; ?> 
</ul>
<?php wp_reset_postdata(); ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>