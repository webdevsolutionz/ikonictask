<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ikonic_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- Header Start Here -->
    <header>
        <div class="main-navigation">
            <div class="container">
                <div class="logo">
				<?php
				$website_logo = get_field('add_logo', 'option');
				if( !empty($website_logo) ):?>
				<a href="<?php echo site_url(); ?>"><img src="<?php echo $website_logo['url']; ?>" alt="<?php echo $website_logo['alt']; ?>"></a>
				<?php endif; ?>
                </div>
                <div class="main-nav">
                    <div class="mobile-logo">
						<?php
				$website_mob_logo = get_field('add_mobile_logo', 'option');
				if( !empty($website_mob_logo) ):?>
				<a href="<?php echo site_url(); ?>"><img src="<?php echo $website_mob_logo['url']; ?>" alt="<?php echo $website_mob_logo['alt']; ?>"></a>
				<?php endif; ?>
					</div>
					<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container' => false,
					'menu_class' => 'nav-bar',
					'depth' => 3,
					'walker' => new Custom_Nav_Walker(),
					'fallback_cb' => false,
				) );
				?>
                </div>
                <div id="btnHamburger">
                    <span></span>
                    <!-- <span></span>  -->
                    <span></span>
                </div>
                
            </div>
        </div>
    </header>
    <!-- Header End Here -->
	 
	 
