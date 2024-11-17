<?php
/**
 * Template Name: Home
 */
get_header(); ?>
 <!-- Banner Start Here -->
 <section class="banner">
    <div class="container">
        <div class="row flex-column-reverse flex-md-row">
            <!-- Left Column (Text Content) -->
            <div class="col-12 col-md-5">
                <div class="col-left">
                    <!-- Display Banner Title if it exists -->
                    <?php if( get_field('banner_title') ): ?>
                        <h1><?php the_field('banner_title'); ?></h1>
                    <?php endif; ?>

                    <!-- Display Banner Description if it exists -->
                    <?php if( get_field('banner_description') ): ?>
                        <p><?php the_field('banner_description'); ?></p>
                    <?php endif; ?>
                    <!-- Display Call-to-Action Link if it exists -->
                    <?php 
                    $link = get_field('banner_cta'); // Retrieve the CTA field
                    if( $link ): 
                        $link_url = $link['url']; // Get URL
                        $link_title = $link['title']; // Get title
                        $link_target = $link['target'] ? $link['target'] : '_self'; // Check for target (default to _self) ?>
                        <!-- Display the CTA Link -->
                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <?php echo esc_html( $link_title ); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <!-- Right Column (Image) -->
            <div class="col-12 col-md-7 p-0">
                <div class="col-right">
                    <!-- Display Banner Image if it exists -->
                    <?php 
                    $banner_img = get_field('banner_image'); // Retrieve the banner image
                    if( !empty($banner_img) ): ?>
                        <!-- Output the image with URL and Alt text -->
                        <img src="<?php echo esc_url($banner_img['url']); ?>" alt="<?php echo esc_attr($banner_img['alt']); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End Here -->
<!-- what we do Start Here -->
<section class="what-we-do">
    <div class="container">
        <div class="row flex-column-reverse flex-md-row">
            <!-- Left Column (Image) -->
            <div class="col-12 col-md-7">
                <div class="col-left">
                    <?php 
                    // Retrieve the image for the left column (what_we_do_left_image ACF field)
                    $we_we_do_img = get_field('what_we_do_left_image'); 
                    if( !empty($we_we_do_img) ): ?>
                        <!-- Output the image with URL and Alt text -->
                        <img src="<?php echo esc_url($we_we_do_img['url']); ?>" alt="<?php echo esc_attr($we_we_do_img['alt']); ?>" />
                    <?php endif; ?> 
                </div>
            </div>
            <!-- Right Column (Text and CTA) -->
            <div class="col-12 col-md-5">
                <div class="col-right">
                    <!-- Display the title if it exists (what_we_do_title ACF field) -->
                    <?php if( get_field('what_we_do_title') ): ?>
                        <h2><?php the_field('what_we_do_title'); ?></h2>
                    <?php endif; ?>

                    <!-- Display the list if it exists (what_we_do_list ACF field) -->
                    <?php if( get_field('what_we_do_list') ): ?>
                        <?php the_field('what_we_do_list'); ?>
                    <?php endif;?>

                    <!-- Display the CTA link if it exists (what_we_do_cta ACF field) -->
                    <?php 
                    $link = get_field('what_we_do_cta'); // Retrieve the CTA field
                    if( $link ): 
                        $link_url = $link['url']; // Get the URL from the CTA field
                        $link_title = $link['title']; // Get the title of the CTA link
                        $link_target = $link['target'] ? $link['target'] : '_self'; // Get target (default to _self if not specified) ?>
                        <!-- Display the CTA Link -->
                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <?php echo esc_html( $link_title ); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- what we do End Here -->
<!-- vision Start Here -->
<div class="vision">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-5">
				<div class="col-left">
				<?php if( get_field('vision_title') ): ?>
                    <h2><?php the_field('vision_title'); ?></h2>
                    <?php endif; ?>
					<?php if( get_field('vision_description') ): ?>
                        <p><?php the_field('vision_description'); ?></p>
                    <?php endif; ?>
					<?php 
                    $link = get_field('vision_cta'); // Retrieve the CTA field
                    if( $link ): 
                        $link_url = $link['url']; // Get the URL from the CTA field
                        $link_title = $link['title']; // Get the title of the CTA link
                        $link_target = $link['target'] ? $link['target'] : '_self'; // Get target (default to _self if not specified) ?>
                        <!-- Display the CTA Link -->
                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <?php echo esc_html( $link_title ); ?>
                        </a>
                    <?php endif; ?>
				</div>
			</div>
			<div class="col-12 col-md-7">
				<div class="col-right">
				<?php 
                    // Retrieve the image for the left column (what_we_do_left_image ACF field)
                    $vision_img = get_field('vision_image'); 
                    if( !empty($vision_img) ): ?>
                        <!-- Output the image with URL and Alt text -->
                        <img src="<?php echo esc_url($vision_img['url']); ?>" alt="<?php echo esc_attr($vision_img['alt']); ?>" />
                    <?php endif; ?> 
				</div>
			</div>
		</div>
	</div>
</div>
<!-- vision End Here -->
    <!-- Historical start Here -->
    <section class="historical">
        <div class="container">
		            <?php if( get_field('historical_title') ): ?>
                    <h2><?php the_field('historical_title'); ?></h2>
                    <?php endif; ?>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="historical-content-outer">
                        <div class="historical-img">
                        <?php 
                    // Retrieve the image for the left column (what_we_do_left_image ACF field)
                    $img1 = get_field('history_image_1'); 
                    if( !empty($img1) ): ?>
                        <!-- Output the image with URL and Alt text -->
                        <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr($img1['alt']); ?>" />
                    <?php endif; ?> 
                        </div>
                        <div class="historical-content">
                        <?php if( get_field('history_title_1') ): ?>
                            <h4><?php the_field('history_title_1'); ?></h4>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="historical-content-outer">
                        <div class="historical-img">
                        <?php 
                    // Retrieve the image for the left column (what_we_do_left_image ACF field)
                    $img2 = get_field('history_image_2'); 
                    if( !empty($img2) ): ?>
                        <!-- Output the image with URL and Alt text -->
                        <img src="<?php echo esc_url($img2['url']); ?>" alt="<?php echo esc_attr($img2['alt']); ?>" />
                    <?php endif; ?> 
                        </div>
                        <div class="historical-content">
                        <?php if( get_field('history_title_2') ): ?>
                            <h4><?php the_field('history_title_2'); ?></h4>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="historical-content-outer">
                        <div class="historical-img">
                        <?php 
                    // Retrieve the image for the left column (what_we_do_left_image ACF field)
                    $img3 = get_field('history_image_3'); 
                    if( !empty($img3) ): ?>
                        <!-- Output the image with URL and Alt text -->
                        <img src="<?php echo esc_url($img3['url']); ?>" alt="<?php echo esc_attr($img3['alt']); ?>" />
                    <?php endif; ?> 
                        </div>
                        <div class="historical-content">
                        <?php if( get_field('history_title_3') ): ?>
                            <h4><?php the_field('history_title_3'); ?></h4>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="historical-content-outer">
                        <div class="historical-img">
                        <?php 
                    // Retrieve the image for the left column (what_we_do_left_image ACF field)
                    $img4 = get_field('history_image_3'); 
                    if( !empty($img4) ): ?>
                        <!-- Output the image with URL and Alt text -->
                        <img src="<?php echo esc_url($img4['url']); ?>" alt="<?php echo esc_attr($img4['alt']); ?>" />
                    <?php endif; ?> 
                        </div>
                        <div class="historical-content">
                            <?php if( get_field('history_title_4') ): ?>
                            <h4><?php the_field('history_title_4'); ?></h4>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                <?php 
                    $link = get_field('history_cta'); // Retrieve the CTA field
                    if( $link ): 
                        $link_url = $link['url']; // Get the URL from the CTA field
                        $link_title = $link['title']; // Get the title of the CTA link
                        $link_target = $link['target'] ? $link['target'] : '_self'; // Get target (default to _self if not specified) ?>
                        <!-- Display the CTA Link -->
                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <?php echo esc_html( $link_title ); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </section>
    <!-- Historical End Here -->
<!-- News Section Start -->
<section class="news">
    <div class="container">
        <!-- Section Title -->
        <h2>News</h2>
        <div class="row g-0">

        <?php
        // Get the current page number for pagination
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
        
        // Arguments for WP_Query to fetch 'post' post type with pagination
        $args = array(
            'post_type'      => 'post', // Fetch posts of type 'post'
            'posts_per_page' => 3, // Display 3 posts per page
            'paged'          => $paged, // Use the current page for pagination
        );

        // Create a new instance of WP_Query
        $query = new WP_Query($args);

        // Check if there are posts matching the query
        if ($query->have_posts()) :
            // Loop through the posts
            while ($query->have_posts()) : $query->the_post(); ?>

            <!-- Post Item Start -->
            <div class="col-12 col-md-4">
                <div class="news-outer">
                    <div class="news-img">
                        <?php 
                        // Check if the post has a featured image
                        if (has_post_thumbnail()) : ?>
                            <!-- Display the featured image -->
                            <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                        <?php else : ?>
                            <!-- Display a default image if no featured image is set -->
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/news-1.png" alt="Default Image">
                        <?php endif; ?>
                    </div>
                    <div class="news-content">
                        <!-- Post Title -->
                        <h4><?php the_title(); // Display the post title ?></h4>
                        <!-- Post Date -->
                        <span><?php echo get_the_date(); // Display the post's publish date ?></span>
                        <!-- Post Excerpt -->
                        <p><?php echo wp_trim_words(get_the_content(), 20, '...'); // Trim content to 20 words ?></p>
                        <!-- Read More Button -->
                        <div class="news-btn">
                            <a href="<?php the_permalink(); // Link to the full post ?>">READ MORE ></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Post Item End -->

            <?php endwhile; // End of the loop
            // Reset post data after the custom query
            wp_reset_postdata(); 
        else : ?>
            <!-- Message if no posts are found -->
            <p>No posts found.</p>
        <?php endif; ?>

            <!-- More News Button -->
            <div class="col-12 text-center">
                <a href="/ikonictask/blog" class="nw-btn">More news</a>
            </div>
        </div>
    </div>
</section>
<!-- News Section End -->


<!-- History Section Start -->
<section class="history">
    <div class="container">
        <div class="row">
            <div class="12">
                <div class="history-content">
                    <?php 
                    // Check if the 'history_title' field is set and display it
                    if ( get_field('history_title') ): ?>
                        <h2><?php the_field('history_title'); // Output the value of 'history_title' ?></h2>
                    <?php endif; ?>

                    <?php 
                    // Retrieve the 'history_button' field which is a link field
                    $link = get_field('history_button');
                    if ( $link ): 
                        $link_url = $link['url']; // Extract the URL from the 'history_button' field
                        $link_title = $link['title']; // Extract the link title from the 'history_button' field
                        $link_target = $link['target'] ? $link['target'] : '_self'; // Extract the target attribute, defaulting to '_self' if not set
                    ?>
                        <!-- Display the Call-to-Action (CTA) link -->
                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <?php echo esc_html( $link_title ); // Output the title of the link ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- History Section End -->

<?php get_footer();
