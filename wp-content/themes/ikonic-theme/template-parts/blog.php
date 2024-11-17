<?php
/**
 * Template Name: Blog
 */
get_header(); ?>

<!-- Banner Start Here -->
<section class="inner-banner" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/news-bg.png); background-position: center center; background-size: cover;">
        <div class="container">
            <div class="banner-content">
                <h1>News</h1>
            </div>
        </div>
    </section>
    <!-- Banner End Here -->
<section class="news-main">
    <div class="container">
        <div class="row">
            <?php
            // WP_Query to fetch all posts
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => -1, // Fetch all posts
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                $counter = 0; // Counter to track posts
                while ($query->have_posts()) : $query->the_post();
                    if ($counter === 0) : // Display the first post in news-main section ?>
                        <div class="col-12 col-md-4">
                            <div class="col-left">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                                <?php else : ?>
                                    <img src="assets/images/news-main.png" alt="Default Image">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="col-right">
                                <h2><?php the_title(); ?></h2>
                                <span><?php echo get_the_date(); ?></span>
                                <p><?php echo wp_trim_words(get_the_content(), 30, '...'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="nw-btn">More news ></a>
                            </div>
                        </div>
                    <?php endif;
                    $counter++;
                endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
</section>

<section class="news">
    <div class="container">
        <div class="row">
        <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Get current page
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 3, // Number of posts per page
                'paged'          => $paged,
            );
            $query = new WP_Query($args);

                if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="col-12 col-md-4">
                            <div class="news-outer">
                                <div class="news-img">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                                    <?php else : ?>
                                        <img src="assets/images/news-1.png" alt="Default Image">
                                    <?php endif; ?>
                                </div>
                                <div class="news-content">
                                    <h4><?php the_title(); ?></h4>
                                    <span><?php echo get_the_date(); ?></span>
                                    <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
                                    <div class="news-btn"><a href="<?php the_permalink(); ?>">READ MORE ></a></div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p>No posts found.</p>
            <?php endif; ?>
            <div class="col-12 text-center">
            <?php
            echo paginate_links(array(
                'total'        => $query->max_num_pages,
                'current'      => $paged,
                'prev_text'    => __('« Prev'),
                'next_text'    => __('Next »'),
            ));
            ?>
            </div>
        </div>
    </div>
</section>

<!-- News  End Here -->
<?php get_footer();

?>
