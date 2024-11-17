<?php
get_header(); ?>
  <!-- Banner Start Here -->
  <section class="inner-banner" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/news-bg.png); background-position: center center; background-size: cover;">
        <div class="container">
            <div class="banner-content">
                <h1>Projects</h1>
            </div>
        </div>
    </section>
    <!-- Banner End Here -->

  <!-- News Start Here -->
   <!-- Filter Form -->
   
  <section class="news">
    <div class="container">
        <div class="row">
        <form method="GET" action="" class="project-filter-form">
        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" id="start_date" value="<?php echo isset($_GET['start_date']) ? esc_attr($_GET['start_date']) : ''; ?>">

        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" id="end_date" value="<?php echo isset($_GET['end_date']) ? esc_attr($_GET['end_date']) : ''; ?>">

        <button type="submit">Filter</button>
    </form>

    <?php
    // Fetch filter values
    $start_date = isset($_GET['start_date']) ? sanitize_text_field($_GET['start_date']) : '';
    $end_date = isset($_GET['end_date']) ? sanitize_text_field($_GET['end_date']) : '';

    // Query Arguments
    $meta_query = array();

    if ($start_date) {
        $meta_query[] = array(
            'key'     => '_project_start_date',
            'value'   => $start_date,
            'compare' => '>=',
            'type'    => 'DATE',
        );
    }

    if ($end_date) {
        $meta_query[] = array(
            'key'     => '_project_end_date',
            'value'   => $end_date,
            'compare' => '<=',
            'type'    => 'DATE',
        );
    }

    // Main Query
    $args = array(
        'post_type'      => 'project',
        'posts_per_page' => -1,
        'meta_query'     => $meta_query,
    );

    $projects_query = new WP_Query($args);

    if ($projects_query->have_posts()) : ?>
            <?php while ($projects_query->have_posts()) : $projects_query->the_post(); ?>
            <div class="col-12 col-md-4">
                <div class="news-outer">
                    <div class="news-content">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <p><strong>Description:</strong> <?php the_excerpt(); ?></p>
                        <p><strong>Start Date:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), '_project_start_date', true)); ?></p>
                        <p><strong>End Date:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), '_project_end_date', true)); ?></p>
                        <p><strong>URL:</strong> <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_project_url', true)); ?>" target="_blank">
                        <?php echo esc_html(get_post_meta(get_the_ID(), '_project_url', true)); ?></a></p>
                        <div class="news-btn"><a href="<?php the_permalink();?> ">READ MORE ></a></div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
        <p>No projects found.</p>
    <?php endif;

    wp_reset_postdata();
    ?>
        </div>
    </div>
</section>

<!-- history start here -->
<section class="history">
        <div class="container">
            <div class="row">
                <div class="12">
                    <div class="history-content">
                        <h2>Ready to take on history?</h2>
                        <a href="#">Schedule a tour</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- history end here -->
<!-- News  End Here -->
<?php get_footer();

?>

<style>
    .project-filter-form {
    margin-bottom: 20px;
    padding: 15px;
    border: 1px solid #ddd;
    background-color: #f9f9f9;
    border-radius: 5px;
    display: flex;
    gap: 15px;
    align-items: center;
}

.project-filter-form label {
    font-weight: bold;
}

.project-filter-form input,
.project-filter-form button {
    padding: 5px 10px;
    font-size: 14px;
}

.project-filter-form button {
    background-color: #0073aa;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

.project-filter-form button:hover {
    background-color: #005b8c;
}

</style>