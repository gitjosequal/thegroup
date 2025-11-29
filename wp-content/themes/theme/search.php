<?php get_header('image'); ?>

<div class="search-results-container container py-5">
    <?php if (have_posts()) : ?>
        <header class="search-results-header mb-4">
            <h3 class="search-results-title text-center">
                <?php printf(esc_html__('Search Results for: %s', 'your-theme-textdomain'), '<span>' . get_search_query() . '</span>'); ?>
            </h3>
        </header>

        <div class="row g-4">
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-md-4">
                    <div class="card card-hieght shadow-container">
                        <div class="shadowed"></div>
                        <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="<?php the_title_attribute(); ?>">
                            <?php else : ?>
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/dummy-thumbnail.jpg'); ?>" class="card-img-top" alt="Dummy Thumbnail">
                            <?php endif; ?>

                            <div class="card-body">
                                <h5 class="card-title text-center"><?php the_title(); ?></h5>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <div class="pagination mt-4">
            <?php 
            // Use WordPress pagination
            echo paginate_links(array(
                'total' => $wp_query->max_num_pages,
                'type'  => 'list', // Bootstrap pagination requires <ul> structure
            ));
            ?>
        </div>
    <?php else : ?>
        <div class="no-results text-center py-5">
            <h2><?php esc_html_e('No results found.', 'your-theme-textdomain'); ?></h2>
            <p><?php esc_html_e('Try searching with different keywords.', 'your-theme-textdomain'); ?></p>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>