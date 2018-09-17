<div id="primary" class="sidebar">
    <?php do_action( 'before_sidebar' ); ?>
    <?php if ( ! dynamic_sidebar( 'sidebar-primary' ) ) : ?>
        <aside id="search" class="widget widget_search">
           <?php get_search_form(); ?>
        </aside>
        
        <aside id="archives" class"widget">
            <h1 class="widget-title"><?php _e( 'Archives', 'shape' ); ?></h1>
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>

        <aside id="category" class"widget">
        <h1 class="widget-title"><?php _e( 'Categories', 'shape' ); ?></h1>
            <ul>
                <?php wp_list_categories( array(
                    'orderby' => 'name',
                    'show_count' => true,
                    'title_li' => ''
                ) ); ?>
            </ul>
        </aside>

   <?php endif; ?>
</div>