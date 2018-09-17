
<?php
/*
Template Name: Ponlawith Annet
*/
?>

<? get_header(); ?>

<div id="primary" class="container">
    <!-- Content -->
    <div id="main" class="main">
        <?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>

                    <div class="post">
 
                        <!-- Display the Title as a link to the Post's permalink. -->
                        <h2>
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
                        <small><?php the_time( 'F jS, Y' ); ?> by <?php the_author_posts_link(); ?></small>

                        <div class="entry">
                            <?php the_content(); ?>
                        </div>
                        
                        <p class="postmetadata">
                            <?php esc_html_e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
                    </div>

                <? endwhile; ?>
                    
                <div class="posts-pagination">
                    <?the_posts_pagination( array( 
                        'screen_reader_text' => ' ',
                        'mid_size' => 2, 
                        'prev_text', 
                        'next_text' 
                        ) );
                    wp_reset_postdata();?>
                </div>
            <? else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <? endif; ?>
    </div>

    <!-- Side bar -->
    <div id="side-bar" class="side-bar">
        <?php get_sidebar(); ?>
    </div>
</div>

<? get_footer(); ?>