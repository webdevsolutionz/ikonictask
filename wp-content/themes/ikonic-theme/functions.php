<?php
/**
 * ikonic theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ikonic_theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ikonic_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ikonic theme, use a find and replace
		* to change 'ikonic-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'ikonic-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'ikonic-theme' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'ikonic_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'ikonic_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ikonic_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ikonic_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'ikonic_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ikonic_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ikonic-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ikonic-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ikonic_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ikonic_theme_scripts() {
	wp_enqueue_style( 'ikonic-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'ikonic-theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'ikonic-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ikonic_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function ikonic_task()
{

	// Register main stylesheet
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;0,900;1,300;1,400;1,600;1,700;1,900&display=swap', [], null );
	wp_enqueue_style( 'font-awesome-free', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '', 'all');
	wp_enqueue_style('style-cs', get_template_directory_uri() . '/assets/css/stylesheet.css','', 'all');
	wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/css/slick.css', array(), '', 'all');
	wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), '', 'all');

    // Adding scripts file in the footer
	// wp_enqueue_script('Jquery','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js', array('jquery'), '', true);
    wp_enqueue_script('jquery', true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '', 'all');
	wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.js', array(), '', 'all');
	wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'ikonic_task', 999);


function register_custom_menu() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'ikonic_theme')
        )
    );
}
add_action('after_setup_theme', 'register_custom_menu');


class Custom_Nav_Walker extends Walker_Nav_Menu {

    // Start Level (for <ul> tags)
    function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth); // Indentation for nested levels
        $classes = ($depth > 0) ? 'sub-menu sub-menu-level-' . $depth : 'sub-menu';
        $output .= "\n$indent<ul class=\"" . esc_attr($classes) . "\">\n";
    }

    // End Level (for closing </ul>)
    function end_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    // Start Element (for <li> tags)
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        // Classes for the <li> element
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        // Add class for items with children
        if (!empty($args->has_children)) {
            $classes[] = 'menu-item-has-children';
        }

        // Combine all classes
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        // ID for the <li> element
        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names .'>';

        // Attributes for the <a> element
        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
        $atts['href']   = !empty($item->url) ? $item->url : '';
        $atts['class']  = 'menu-link';

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);

        // Build attributes string
        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $attributes .= ' ' . $attr . '="' . esc_attr($value) . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);

        // Add arrow for dropdown items
        if (!empty($args->has_children)) {
            $title .= '<span class="arrow-down"><img src="' . get_template_directory_uri() . '/assets/images/ang-down.svg" alt="Arrow"></span>';
        }

        $item_output = isset($args->before) ? $args->before : '';
        $item_output .= '<a' . $attributes . '>';
        $item_output .= isset($args->link_before) ? $args->link_before : '';
        $item_output .= $title;
        $item_output .= isset($args->link_after) ? $args->link_after : '';
        $item_output .= '</a>';
        $item_output .= isset($args->after) ? $args->after : '';

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $args, $depth);
    }

    // End Element (for closing </li>)
    function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</li>\n";
    }
}



// Function to create a custom post type called "Project"
function create_project_post_type() {
    // Labels for the Project post type
    $labels = array(
        'name'               => __('Projects'), // Plural name
        'singular_name'      => __('Project'),  // Singular name
        'menu_name'          => __('Projects'), // Menu label
        'name_admin_bar'     => __('Project'),  // Name in the admin bar
        'add_new'            => __('Add New'),  // Add new project label
        'add_new_item'       => __('Add New Project'), // Add new item label
        'edit_item'          => __('Edit Project'), // Edit project label
        'new_item'           => __('New Project'), // New project label
        'view_item'          => __('View Project'), // View project label
        'search_items'       => __('Search Projects'), // Search projects label
        'not_found'          => __('No projects found'), // Not found message
        'not_found_in_trash' => __('No projects found in Trash'), // Not found in trash message
    );

    // Arguments for the Project post type
    $args = array(
        'labels'             => $labels,
        'public'             => true, // Makes the post type public
        'has_archive'        => true, // Enables archive pages
        'rewrite'            => array('slug' => 'projects'), // URL slug for projects
        'supports'           => array('title', 'editor', 'thumbnail'), // Features supported
        'show_in_rest'       => true, // Enables the block editor (Gutenberg)
        'menu_icon'          => 'dashicons-portfolio', // Menu icon in the admin dashboard
    );

    // Register the post type
    register_post_type('project', $args);
}
add_action('init', 'create_project_post_type');

// Function to add custom meta boxes for the Project post type
function add_project_meta_boxes() {
    add_meta_box(
        'project_details', // Meta box ID
        'Project Details', // Meta box title
        'project_meta_box_callback', // Callback function for rendering the meta box
        'project', // Post type to display this meta box on
        'normal', // Context: where to display the box
        'high' // Priority: high priority
    );
}
add_action('add_meta_boxes', 'add_project_meta_boxes');

// Callback function for rendering the Project Details meta box
function project_meta_box_callback($post) {
    // Add a nonce field for security
    wp_nonce_field('save_project_details', 'project_meta_nonce');

    // Retrieve existing meta values, if available
    $project_start_date = get_post_meta($post->ID, '_project_start_date', true);
    $project_end_date = get_post_meta($post->ID, '_project_end_date', true);
    $project_url = get_post_meta($post->ID, '_project_url', true);

    // Display input fields for custom meta data
    echo '<p><label for="project_start_date">Start Date:</label>';
    echo '<input type="date" id="project_start_date" name="project_start_date" value="' . esc_attr($project_start_date) . '" /></p>';

    echo '<p><label for="project_end_date">End Date:</label>';
    echo '<input type="date" id="project_end_date" name="project_end_date" value="' . esc_attr($project_end_date) . '" /></p>';

    echo '<p><label for="project_url">Project URL:</label>';
    echo '<input type="url" id="project_url" name="project_url" value="' . esc_attr($project_url) . '" /></p>';
}

// Function to save custom meta data for the Project post type
function save_project_details($post_id) {
    // Verify the nonce for security
    if (!isset($_POST['project_meta_nonce']) || !wp_verify_nonce($_POST['project_meta_nonce'], 'save_project_details')) {
        return;
    }

    // Prevent saving during autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check if the user has permission to edit the post
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save the Start Date
    if (isset($_POST['project_start_date'])) {
        update_post_meta($post_id, '_project_start_date', sanitize_text_field($_POST['project_start_date']));
    }

    // Save the End Date
    if (isset($_POST['project_end_date'])) {
        update_post_meta($post_id, '_project_end_date', sanitize_text_field($_POST['project_end_date']));
    }

    // Save the Project URL
    if (isset($_POST['project_url'])) {
        update_post_meta($post_id, '_project_url', esc_url($_POST['project_url']));
    }
}
add_action('save_post', 'save_project_details');




function register_projects_api_route() {
    // Define a custom REST API route: /wp-json/custom/v1/projects.
    register_rest_route('custom/v1', '/projects', array(
        'methods' => 'GET', // HTTP method allowed for this endpoint.
        'callback' => 'get_projects', // Function to handle requests to this endpoint.
    ));
}
add_action('rest_api_init', 'register_projects_api_route'); // Hook to initialize the route.



function get_projects() {
    // Define the query arguments to fetch 'project' posts.
    $args = array(
        'post_type' => 'project', // Retrieve only 'project' posts.
        'posts_per_page' => -1, // Get all projects (no limit on number of posts).
    );

    // Execute the query to fetch project posts.
    $query = new WP_Query($args);
    $projects = array(); // Initialize an array to store project data.

    // Check if the query found any posts.
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post(); // Set up post data.

            // Add project details to the response array.
            $projects[] = array(
                'title' => get_the_title(), // Project title.
                'url' => get_permalink(), // Project URL.
                'start_date' => get_post_meta(get_the_ID(), '_project_start_date', true), // Start date.
                'end_date' => get_post_meta(get_the_ID(), '_project_end_date', true), // End date.
            );
        }
        wp_reset_postdata(); // Reset global post data.
    }

    // Return the response as a JSON array.
    return rest_ensure_response($projects);
}

// ACF Global settings
if( function_exists('acf_add_options_page') ) {
    // Create the Options page
    acf_add_options_page(array(
        'page_title'    => 'Global Settings',
        'menu_title'    => 'Global Settings',
        'menu_slug'     => 'global-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    // Create a sub-page for Header Settings
    acf_add_options_sub_page(array(
        'page_title'    => 'Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'global-settings',
    ));

    // Create a sub-page for Footer Settings
    acf_add_options_sub_page(array(
        'page_title'    => 'Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'global-settings',
    ));
}



// Register Footer Menu
function theme_register_menus() {
    register_nav_menus(
        array(
            'footer_menu' => __( 'Footer Menu' ),
        )
    );
}
add_action( 'after_setup_theme', 'theme_register_menus' );


// Register Privacy Menu
function theme_register_menus_privacy() {
    register_nav_menus(
        array(
            'privacy_menu' => __( 'Privacy Menu' ),
        )
    );
}
add_action( 'after_setup_theme', 'theme_register_menus_privacy' );

