<?php get_header(); ?>

<!-- Banner Start Here -->
<section class="inner-banner" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/news-bg.png); background-position: center center; background-size: cover;">
        <div class="container">
            <div class="banner-content">
                <h1>Project Detail</h1>
            </div>
        </div>
    </section>
    <!-- Banner End Here -->

  <!-- News Start Here -->
  <section class="news">
    <div class="container">
        <div class="row">
		<?php while (have_posts()) : the_post(); ?>
            <div class="col-12">
                <div class="news-outer">
                    <div class="news-content">
					<p><strong>Description:</strong> <?php the_content(); ?></p>
					<p><strong>Start Date:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), '_project_start_date', true)); ?></p>
					<p><strong>End Date:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), '_project_end_date', true)); ?></p>
					<p><strong>Project URL:</strong> 
                    <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_project_url', true)); ?>" target="_blank">
                        <?php echo esc_html(get_post_meta(get_the_ID(), '_project_url', true)); ?>
                    </a>
                        <div class="news-btn"><a href="<?php echo get_post_type_archive_link('project'); ?>">Back to Projects</a></div>
                    </div>
                </div>
            </div>
			<?php endwhile; ?>
        </div>
    </div>
</section>
<!-- News  End Here -->
<?php get_footer(); ?>
