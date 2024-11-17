<?php get_header(); ?>

<!-- Banner Start Here -->
<section class="inner-banner" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/news-bg.png); background-position: center center; background-size: cover;">
        <div class="container">
            <div class="banner-content">
                <h1>Blog Detail</h1>
            </div>
        </div>
    </section>
    <!-- Banner End Here -->

  <!-- News Start Here -->
  <section class="news">
    <div class="container">
        <div class="row">
        <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
            <div class="col-12">
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
                                    <p> <?php the_content(); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;
                else : ?>
                    <p>No content found.</p>
                <?php endif; ?>
        </div>
    </div>
</section>
<!-- News  End Here -->
<?php get_footer(); ?>
