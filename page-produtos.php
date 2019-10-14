<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_parent_theme_file_uri( 'css/produtos.min.css' );?>">
<header class="title-page"><div><h1><?php the_title(); ?></h1></div></header>
<main class="gcol-12">
    <div class="produtos-tags">
        <div>
            <a href="."><h2>Todos Produtos</h2></a>
            <ul>
                <?php
                $tags = get_tags();
                if ( $tags ) :
                    foreach ( $tags as $tag ) : ?>
                        <li><a href="?tag=<?php echo $tag->slug ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a></li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="produtos gcol-ss-2 gcol-s-3">
        <?php 
        if($_GET["tag"] == null){
            $catquery = new WP_Query( 'category_name=produtos&orderby=title&order=asc' );
        }else{
            $tagSlug = $_GET["tag"];
            $catquery = new WP_Query( "category_name=produtos&orderby=title&order=asc&tag=$tagSlug" );
        }
            while($catquery->have_posts()) : $catquery->the_post();
                ?>
                <a class="produto" href="<?php the_permalink() ?>" rel="bookmark">
                    <h2><?php the_title(); ?></h2>
                    <?php if( has_post_thumbnail() ):
                    echo get_the_post_thumbnail();
                    endif; 
                echo '</a>';
            endwhile; 
        ?> 
        <?php wp_reset_postdata(); ?>
    </div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>