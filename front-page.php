<?php get_header(); ?>


<?php
query_posts('showposts=10');
?>

<div id="primary" class="site-content front-page">
    <div id="content" role="main">

        <h1>Recent Posts:</h1>

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> <span class="the-author-info">by <?php the_author_posts_link(); ?> </span>
            <div class="entry-content">
                <?php the_excerpt(); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
            </div><!-- .entry-content -->
        </div><!-- #post-## -->



    <?php endwhile; // end of the loop. ?>
</div><!-- #content -->
</div><!-- #primary -->


<?php get_footer(); ?>