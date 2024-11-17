<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ikonic_theme
 */
?>
  <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="footer-logo">
                        <ul>
                            <li>
                            <?php 
                            // Get the logo image field from the options page
                            $img1 = get_field('company_logo_1', 'option');
                            if ($img1) : ?>
                                <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr($img1['alt']); ?>" />
                            <?php endif; ?>
                            </li>
                            <li>
                            <?php 
                            // Get the logo image field from the options page
                            $img2 = get_field('company_logo_2', 'option');
                            if ($img2) : ?>
                                <img src="<?php echo esc_url($img2['url']); ?>" alt="<?php echo esc_attr($img2['alt']); ?>" />
                            <?php endif; ?>
                        </li>
                            <li>
                                
                            <?php 
                            // Get the logo image field from the options page
                            $img3 = get_field('company_logo_3', 'option');
                            if ($img3) : ?>
                                <img src="<?php echo esc_url($img3['url']); ?>" alt="<?php echo esc_attr($img3['alt']); ?>" />
                            <?php endif; ?>
                        </li>
                        </ul>
                        <?php 
                            // Get the logo image field from the options page
                            $img4 = get_field('lhv_logo', 'option');
                            if ($img4) : ?>
                                <img src="<?php echo esc_url($img4['url']); ?>" alt="<?php echo esc_attr($img4['alt']); ?>" />
                            <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 col-md-2">
                <div class="footer-menu">
                    <ul>
                        <?php 
                        wp_nav_menu( array(
                            'theme_location' => 'footer_menu', // This should match the registered location
                            'container' => false,              // Don't wrap in a container element
                            'menu_class' => '',                // You can add a CSS class here
                            'items_wrap' => '%3$s',            // Only display the <li> items (without <ul>)
                        ) );
                        ?>
                    </ul>
                </div>

                </div>

                <div class="col-12 col-md-3">
                    <div class="footer-address">
                        <h6>
                        <?php
                        // Display the footer text from ACF options page
                        $ctc_label = get_field('address_label', 'option');
                        if ($ctc_label) : ?>
                            <?php echo esc_html($ctc_label); ?>
                        <?php endif; ?>
                        </h6>
                        <p> 
                        <?php
                        // Display the footer text from ACF options page
                        $adrs = get_field('address_detail', 'option');
                        if ($adrs) : ?>
                            <p><?php echo esc_html($adrs); ?></p>
                        <?php endif; ?>
                        </p>
                        <ul>
                            <li>
                                <a href=""><img src="<?php echo get_template_directory_uri()?>/assets/images/Path 9.png"></a>
                            </li>
                            <li>
                                <a href=""><img src="<?php echo get_template_directory_uri()?>/assets/images/Path 7.png"></a>
                            </li>
                            <li>
                                <a href=""><img src="<?php echo get_template_directory_uri()?>/assets/images/instagram.png"></a>
                            </li>
                            <li>
                                <a href=""><img src="<?php echo get_template_directory_uri()?>/assets/images/Path 12.png"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div class="footer-contact">
                        <h6><?php
                        // Display the footer text from ACF options page
                        $ph_label = get_field('phone_label', 'option');
                        if ($ph_label) : ?>
                            <?php echo esc_html($ph_label); ?>
                        <?php endif; ?></h6>
                        <ul>
                            <li>
                                <label><?php
                        // Display the footer text from ACF options page
                        $ph_lab = get_field('phone_label', 'option');
                        if ($ph_lab) : ?>
                            <?php echo esc_html($ph_lab); ?>
                        <?php endif; ?> </label><a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a>
                            </li>
                            <li>
                                <label><?php
                        // Display the footer text from ACF options page
                        $fax_lab = get_field('fax_label', 'option');
                        if ($fax_lab) : ?>
                            <?php echo esc_html($fax_lab); ?>
                        <?php endif; ?> </label><a href="tel: <?php the_field('fax_number', 'option'); ?>"> <?php the_field('fax_number', 'option'); ?></a>
                            </li>
                            <li>
                                <label><?php
                        // Display the footer text from ACF options page
                        $email_lab = get_field('email_label', 'option');
                        if ($email_lab) : ?>
                            <?php echo esc_html($email_lab); ?>
                        <?php endif; ?> </label><a href="mailto:<?php the_field('email_label', 'option'); ?>"><?php the_field('company_email', 'option'); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <ul>
            <?php 
                        wp_nav_menu( array(
                            'theme_location' => 'privacy_menu', // This should match the registered location
                            'container' => false,              // Don't wrap in a container element
                            'menu_class' => '',                // You can add a CSS class here
                            'items_wrap' => '%3$s',            // Only display the <li> items (without <ul>)
                        ) );
                        ?>
            </ul>
        </div>
        </footer>
	<?php wp_footer(); ?>

</body>
</html>

