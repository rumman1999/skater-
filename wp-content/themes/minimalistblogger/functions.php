<?php
/**
 * minimalistblogger functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package minimalistblogger
 */


if (! function_exists('minimalistblogger_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */

    function minimalistblogger_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on minimalistblogger, use a find and replace
         * to change 'minimalistblogger' to the name of your theme in all the template files.
         */
        load_theme_textdomain('minimalistblogger', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(300);

        add_image_size('minimalistblogger-grid', 350, 230, true);
        add_image_size('minimalistblogger-slider', 850);
        add_image_size('minimalistblogger-small', 300, 180, true);


        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1'	=> esc_html__('Primary', 'minimalistblogger'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'flex-width'  => true,
            'flex-height' => true,
        ));

        /*
         * Add support for starter content
        */
        // Starter Content Begin
        $nav_items = array(
            'home'                 => array(
                'title'      => 'Home',
                'url'    => '#',
            ),
            'custom_blog'           => array(
                'title'      => 'Blog',
                'url'    => '#',
            ),
            'custom_news'      => array(
                'title'      => 'News',
                'url'    => '#',
            ),
            'custom_categories' => array(
                'title'      => 'Categories',
                'url'    => '#',
            ),
            'custom_about'            => array(
                'title'      => 'About',
                'url'    => '#',
            ),
            'custom_contact'            => array(
                'title'      => 'Contact',
                'url'    => '#',
            ),
        );

        $header_widgets = array('custom' => array(
            'custom_html',
            array(
            'title' => 'Lorem Ipsum',
            'content' => '<p style="text-align:center;">Accusantium et doloremque veritatis architecto, eaque ipsa quae ab illo inventore veritatis perspiciatis. Sed ut iste natus voluptatem fringilla tempor dignissim at.</p>'
            )
            ));
        
        $footer_widgets = array('custom' => array(
            'custom_html',
            array(
            'title' => 'LOREM IPSUM',
            'content' => '<p>Sed ut perspiciatis unde omnis iste natus voluptatem fringilla tempor dignissim at, pretium et arcu. Sed ut perspiciatis unde omnis iste tempor dignissim at, pretium et arcu natus voluptatem fringilla.</p>'
            )
            ));

        $starter_content = array(
            'attachments' => array(
                'featured-image-nothing-breaks-new-york' => array(
                    'post_title'   => 'Featured Image 1',
                    'post_content' => 'Attachment Description',
                    'post_excerpt' => 'Attachment Caption',
                    'file'         => 'inc/starter_content/img/nothing-breaks-new-york.png',
                ),
                'featured-image-getting-what-you-want' => array(
                    'post_title'   => 'Featured Image 2',
                    'post_content' => 'Attachment Description',
                    'post_excerpt' => 'Attachment Caption',
                    'file'         => 'inc/starter_content/img/getting-what-you-want.png',
                ),
                'featured-image-are-you-sabotaging-your-creativity' => array(
                    'post_title'   => 'Featured Image 3',
                    'post_content' => 'Attachment Description',
                    'post_excerpt' => 'Attachment Caption',
                    'file'         => 'inc/starter_content/img/are-you-sabotaging-your-creativity.png',
                ),
                'featured-image-what-ive-learned-from-road-trips' => array(
                    'post_title'   => 'Featured Image 4',
                    'post_content' => 'Attachment Description',
                    'post_excerpt' => 'Attachment Caption',
                    'file'         => 'inc/starter_content/img/what-ive-learned-from-road-trips.png',
                ),
                'featured-image-how-to-write-10000-words-a-week' => array(
                    'post_title'   => 'Featured Image 5',
                    'post_content' => 'Attachment Description',
                    'post_excerpt' => 'Attachment Caption',
                    'file'         => 'inc/starter_content/img/how-to-write-10000-words-a-week.png',
                ),
            ),
            'posts' => array(
                'custom_post_1' => require dirname(__FILE__) . "/inc/starter_content/posts/nothing_beats_new_york.php",
                'custom_post_2' => require dirname(__FILE__) . "/inc/starter_content/posts/getting_what_you_want.php",
                'custom_post_3' => require dirname(__FILE__). "/inc/starter_content/posts/are_you_sabotaging_your_creativity.php",
                'custom_post_4' => require dirname(__FILE__). "/inc/starter_content/posts/how-to-write-10000-words-a-week.php",
                'custom_post_5' => require dirname(__FILE__). "/inc/starter_content/posts/what_ive_learned_from_road_trips.php",
            ),
            'nav_menus' => array(
                'menu-1' => array(
                    'name' => 'Primary',
                    'items' => $nav_items,
                ),
            ),
            'widgets' => array(
                'headerwidget-1' => $header_widgets,
                'headerwidget-2' => $header_widgets,
                'headerwidget-3' => $header_widgets,
                'footerwidget-1' => $footer_widgets,
                'footerwidget-2' => $footer_widgets,
                'footerwidget-3' => $footer_widgets,
                'sidebar-1' => array(
                    'custom_portrait' => array(
                        'custom_html',
                        array(
                        'content' => '<div style="text-align:center;">
						<img src="'.get_template_directory_uri().'/inc/starter_content/img/portrait.png">
						<p style="text-align:center;margin-bottom:0;">
					Aliquam et elit eu nunc rhoncus viverra quis at felis et netus et malesuada fames ac turpis egestas. Aenean commodo ligula eget dolor.
						</p>'
                        )
                    ),
                    'custom_banner' => array(
                        'custom_html',
                        array(
                        'content' => '<img src="'.get_template_directory_uri().'/inc/starter_content/img/banner.png"/>'
                        )
                    ),
                ),
            )
        );
        
        add_theme_support('starter-content', $starter_content);
        // Starter Content End
    }
endif;
add_action('after_setup_theme', 'minimalistblogger_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function minimalistblogger_content_width()
{
    $GLOBALS['content_width'] = apply_filters('minimalistblogger_content_width', 640);
}
add_action('after_setup_theme', 'minimalistblogger_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function minimalistblogger_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'minimalistblogger'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'minimalistblogger'),
        'before_widget' => '<section id="%1$s" class="fbox swidgets-wrap widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="swidget"><div class="sidebar-title-border"><h3 class="widget-title">',
        'after_title'   => '</h3></div></div>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget (1)', 'minimalistblogger'),
        'id'            => 'footerwidget-1',
        'description'   => esc_html__('Add widgets here.', 'minimalistblogger'),
        'before_widget' => '<section id="%1$s" class="fbox widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="swidget"><h3 class="widget-title">',
        'after_title'   => '</h3></div>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget (2)', 'minimalistblogger'),
        'id'            => 'footerwidget-2',
        'description'   => esc_html__('Add widgets here.', 'minimalistblogger'),
        'before_widget' => '<section id="%1$s" class="fbox widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="swidget"><h3 class="widget-title">',
        'after_title'   => '</h3></div>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget (3)', 'minimalistblogger'),
        'id'            => 'footerwidget-3',
        'description'   => esc_html__('Add widgets here.', 'minimalistblogger'),
        'before_widget' => '<section id="%1$s" class="fbox widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="swidget"><h3 class="widget-title">',
        'after_title'   => '</h3></div>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Header Widget (1)', 'minimalistblogger'),
        'id'            => 'headerwidget-1',
        'description'   => esc_html__('Add widgets here.', 'minimalistblogger'),
        'before_widget' => '<section id="%1$s" class="header-widget widget swidgets-wrap %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="swidget"><div class="sidebar-title-border"><h3 class="widget-title">',
        'after_title'   => '</h3></div></div>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Header Widget (2)', 'minimalistblogger'),
        'id'            => 'headerwidget-2',
        'description'   => esc_html__('Add widgets here.', 'minimalistblogger'),
        'before_widget' => '<section id="%1$s" class="header-widget widget swidgets-wrap %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="swidget"><div class="sidebar-title-border"><h3 class="widget-title">',
        'after_title'   => '</h3></div></div>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Header Widget (3)', 'minimalistblogger'),
        'id'            => 'headerwidget-3',
        'description'   => esc_html__('Add widgets here.', 'minimalistblogger'),
        'before_widget' => '<section id="%1$s" class="header-widget widget swidgets-wrap %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="swidget"><div class="sidebar-title-border"><h3 class="widget-title">',
        'after_title'   => '</h3></div></div>',
    ));
}




add_action('widgets_init', 'minimalistblogger_widgets_init');


/**
 * Enqueue scripts and styles.
 */
function minimalistblogger_scripts()
{
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('minimalistblogger-style', get_stylesheet_uri());
    
    wp_enqueue_script('minimalistblogger-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20170823', true);
    wp_enqueue_script('minimalistblogger-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20170823', true);
    wp_enqueue_script('minimalistblogger-script', get_template_directory_uri() . '/js/script.js', array(), '20160720', true);
    wp_enqueue_script('flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), '20150423', true);
    wp_enqueue_script('minimalistblogger-accessibility', get_template_directory_uri() . '/js/accessibility.js', array(), '20160720', true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'minimalistblogger_scripts');

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
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Google fonts, credits can be found in readme.
 */

function minimalistblogger_google_fonts()
{
    wp_enqueue_style('minimalistblogger-google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700,900|Merriweather:400,700', false);
}

add_action('wp_enqueue_scripts', 'minimalistblogger_google_fonts');


/**
 * Dots after excerpt
 */

function new_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');



/**
 * Blog Pagination
 */
if (!function_exists('minimalistblogger_numeric_posts_nav')) {
    function minimalistblogger_numeric_posts_nav()
    {
        $prev_arrow = is_rtl() ? 'Previous' : 'Next';
        $next_arrow = is_rtl() ? 'Next' : 'Previous';
        
        global $wp_query;
        $total = $wp_query->max_num_pages;
        $big = 999999999; // need an unlikely integer
        if ($total > 1) {
            if (!$current_page = get_query_var('paged')) {
                $current_page = 1;
            }
            if (get_option('permalink_structure')) {
                $format = 'page/%#%/';
            } else {
                $format = '&paged=%#%';
            }
            echo wp_kses_post(paginate_links(array(
                'base'			=> str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format'		=> $format,
                'current'		=> max(1, get_query_var('paged')),
                'total' 		=> $total,
                'mid_size'		=> 3,
                'type' 			=> 'list',
                'prev_text'		=> 'Previous',
                'next_text'		=> 'Next',
            )));
        }
    }
}




/**
 *  Copyright and License for Upsell button by Justin Tadlock - 2016-2018 © Justin Tadlock. customizer button https://github.com/justintadlock/trt-customizer-pro
 */
require_once(trailingslashit(get_template_directory()) . 'justinadlock-customizer-button/class-customize.php');


/**
 * Compare page CSS
 */

function minimalistblogger_comparepage_css($hook)
{
    if ('appearance_page_minimalistblogger-info' != $hook) {
        return;
    }
    wp_enqueue_style('minimalistblogger-custom-style', get_template_directory_uri() . '/css/compare.css');
}
add_action('admin_enqueue_scripts', 'minimalistblogger_comparepage_css');

/**
 * Compare page content
 */

add_action('admin_menu', 'minimalistblogger_themepage');
function minimalistblogger_themepage()
{
    $theme_info = add_theme_page(__('MinimalistBlogger', 'minimalistblogger'), __('MinimalistBlogger', 'minimalistblogger'), 'manage_options', 'minimalistblogger-info.php', 'minimalistblogger_info_page');
}

function minimalistblogger_info_page()
{
    $user = wp_get_current_user(); ?>
	<div class="wrap about-wrap minimalistblogger-add-css">
		<div>
			<h1>
				<?php echo __('Welcome to MinimalistBlogger!', 'minimalistblogger'); ?>
			</h1>

			<div class="feature-section three-col">
				<div class="col">
					<div class="widgets-holder-wrap">
						<h3><?php echo __("Contact Support", "minimalistblogger"); ?></h3>
						<p><?php echo __("Getting started with a new theme can be difficult, if you have issues with MinimalistBlogger then throw us an email.", "minimalistblogger"); ?></p>
						<p><a target="blank" href="<?php echo esc_url('https://superbthemes.com/help-contact/', 'minimalistblogger'); ?>" class="button button-primary">
							<?php echo __("Contact Support", "minimalistblogger"); ?>
						</a></p>
					</div>
				</div>
				<div class="col">
					<div class="widgets-holder-wrap">
						<h3><?php echo __("Review Minimalistblogger", "minimalistblogger"); ?></h3>
						<p><?php echo __("Nothing motivates us more than feedback, are you are enjoying Minimalistblogger? We would love to hear what you think!", "minimalistblogger"); ?></p>
						<p><a target="blank" href="<?php echo esc_url('https://wordpress.org/support/theme/minimalistblogger/reviews/', 'minimalistblogger'); ?>" class="button button-primary">
							<?php echo __("Submit A Review", "minimalistblogger"); ?>
						</a></p>
					</div>
				</div>
				<div class="col">
					<div class="widgets-holder-wrap">
						<h3><?php echo __("Premium Edition", "minimalistblogger"); ?></h3>
						<p><?php echo __("If you enjoy MinimalistBlogger and want to take your website to the next step, then check out our premium edition here.", "minimalistblogger"); ?></p>
						<p><a target="blank" href="<?php echo esc_url('https://superbthemes.com/minimalistblogger/', 'minimalistblogger'); ?>" class="button button-primary">
							<?php echo __("Read More", "minimalistblogger"); ?>
						</a></p>
					</div>
				</div>
			</div>
		</div>
		<hr>

		<h2><?php echo __("Free Vs Premium", "minimalistblogger"); ?></h2>
		<div class="minimalistblogger-button-container">
			<a target="blank" href="<?php echo esc_url('https://superbthemes.com/minimalistblogger/', 'minimalistblogger'); ?>" class="button button-primary">
				<?php echo __("Read Full Description", "minimalistblogger"); ?>
			</a>
			<a target="blank" href="<?php echo esc_url('https://superbthemes.com/demo/minimalistblogger/', 'minimalistblogger'); ?>" class="button button-primary">
				<?php echo __("View Theme Demo", "minimalistblogger"); ?>
			</a>
		</div>


		<table class="wp-list-table widefat">
			<thead>
				<tr>
					<th><strong><?php echo __("Theme Feature", "minimalistblogger"); ?></strong></th>
					<th><strong><?php echo __("Basic Version", "minimalistblogger"); ?></strong></th>
					<th><strong><?php echo __("Premium Version", "minimalistblogger"); ?></strong></th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><?php echo __("Header Background Color", "minimalistblogger"); ?></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Custom Header Logo Or Text	", "minimalistblogger"); ?></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Hide Logo Text", "minimalistblogger"); ?></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Customize Sidebar Color", "minimalistblogger"); ?></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Premium Support", "minimalistblogger"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/cross.png'); ?>" alt="<?php echo __("Feature Is Not Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Fully SEO Optimized", "minimalistblogger"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/cross.png'); ?>" alt="<?php echo __("Feature Is Not Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Easy Google Fonts", "minimalistblogger"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/cross.png'); ?>" alt="<?php echo __("Feature Is Not Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Pagespeed Plugin", "minimalistblogger"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/cross.png'); ?>" alt="<?php echo __("Feature Is Not Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Recent Posts Widget", "minimalistblogger"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/cross.png'); ?>" alt="<?php echo __("Feature Is Not Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Logo Container Background Image", "minimalistblogger"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/cross.png'); ?>" alt="<?php echo __("Feature Is Not Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Only Show Header Image On Front Page", "minimalistblogger"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/cross.png'); ?>" alt="<?php echo __("Feature Is Not Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Custom Text On Header Image", "minimalistblogger"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/cross.png'); ?>" alt="<?php echo __("Feature Is Not Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Custom Header Image Height", "minimalistblogger"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/cross.png'); ?>" alt="<?php echo __("Feature Is Not Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Only Show Upper Widgets On Front Page", "minimalistblogger"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/cross.png'); ?>" alt="<?php echo __("Feature Is Not Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Full Width Page Template", "minimalistblogger"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/cross.png'); ?>" alt="<?php echo __("Feature Is Not Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Replace Copyright Text", "minimalistblogger"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/cross.png'); ?>" alt="<?php echo __("Feature Is Not Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Customize Upper Widgets Colors", "minimalistblogger"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/cross.png'); ?>" alt="<?php echo __("Feature Is Not Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Customize Navigation Color", "minimalistblogger"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/cross.png'); ?>" alt="<?php echo __("Feature Is Not Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Customize Post/Page Color", "minimalistblogger"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/cross.png'); ?>" alt="<?php echo __("Feature Is Not Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Customize Blog Feed Color", "minimalistblogger"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/cross.png'); ?>" alt="<?php echo __("Feature Is Not Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Customize Footer Color", "minimalistblogger"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/cross.png'); ?>" alt="<?php echo __("Feature Is Not Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Header Background Image", "minimalistblogger"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/cross.png'); ?>" alt="<?php echo __("Feature Is Not Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Customize Background Color", "minimalistblogger"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/cross.png'); ?>" alt="<?php echo __("Feature Is Not Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Access All Child Themes", "minimalistblogger"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/cross.png'); ?>" alt="<?php echo __("Feature Is Not Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Importable Demo Content	", "minimalistblogger"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/cross.png'); ?>" alt="<?php echo __("Feature Is Not Available", "minimalistblogger"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url(get_template_directory_uri() . '/icons/check.png'); ?>" alt="<?php echo __("Feature Is Available", "minimalistblogger"); ?>" /></span></td>
				</tr>
			</tbody>
		</table>
		<div class="minimalistblogger-button-container">
			<a target="blank" href="<?php echo esc_url('https://superbthemes.com/minimalistblogger/', 'minimalistblogger'); ?>" class="button button-primary">
				<?php echo __("GO PREMIUM", "minimalistblogger"); ?>
			</a>
		</div>

	</div>
	<?php
}






/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Minimalistblogger for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/pa/class-tgm-plugin-activation.php';
 *
 * Child Theme:
 * require_once get_stylesheet_directory() . '/pa/class-tgm-plugin-activation.php';
 *
 * Plugin:
 * require_once dirname( __FILE__ ) . '/pa/class-tgm-plugin-activation.php';
 */
require_once get_template_directory() . '/pa/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'minimalistblogger_register_required_plugins');

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function minimalistblogger_register_required_plugins()
{
    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

        array(
            'name'      => 'Superb Helper',
            'slug'      => 'superb-helper',
            'required'  => false,
        ),


    );

    /*
     * Array of configuration settings. Amend each line as needed.
     *
     * TGMPA will start providing localized text strings soon. If you already have translations of our standard
     * strings available, please help us make TGMPA even better by giving us access to these translations or by
     * sending in a pull-request with .po file(s) with the translations.
     *
     * Only uncomment the strings in the config array if you want to customize the strings.
     */
    $config = array(
        'id'           => 'minimalistblogger',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.


    );

    tgmpa($plugins, $config);
}



add_action('admin_init', 'minimalistblogger_spbThemesNotification', 8);

function minimalistblogger_spbThemesNotification()
{
    $notifications = include('inc/admin_notification/Autoload.php');
    $notifications->Add("minimalistblogger_notification", "Unlock All Features with Minimalistblogger Premium - Limited Time Offer", "
		
		Take advantage of the up to <span style='font-weight:bold;'>40% discount</span> and unlock all features with Minimalistblogger Premium. 
		The discount is only available for a limited time.

		<div>
		<a style='margin-bottom:15px;' class='button button-large button-secondary' target='_blank' href='https://superbthemes.com/minimalistblogger/'>Read More</a> <a style='margin-bottom:15px;' class='button button-large button-primary' target='_blank' href='https://superbthemes.com/minimalistblogger/'>Upgrade Now</a>
		</div>

		", "info");


  $options_notification_start = array("delay"=> "-1 seconds", "wpautop" => false);
  $notifications->Add("minimalistblogger_notification_start", "Let's get you started with Minimalistblogger!", '
    <span class="st-notification-wrapper">
    <span class="st-notification-column-wrapper">
      <span class="st-notification-column">
        <img src="'. esc_url( get_template_directory_uri() . '/inc/admin_notification/src/preview.png' ).'" width="150" height="177" />
      </span>

      <span class="st-notification-column">
        <h2>Why Minimalistblogger</h2>
        <ul class="st-notification-column-list">
        <li>Easy to Use & Customize</li>
        <li>Search Engine Optimized</li>
        <li>Lightweight and Fast</li>
        <li>Top-notch Customer Support</li>
        </ul>
        <a href="https://superbthemes.com/demo/minimalistblogger/" target="_blank" class="button">View Minimalistblogger Demo <span aria-hidden="true" class="dashicons dashicons-external"></span></a> 

      </span>
        <span class="st-notification-column">
        <h2>Customize Minimalistblogger</h2>
        <ul>
          <li><a href="'. esc_url( admin_url( 'customize.php' ) ) .'" class="button button-primary">Customize The Design</a></li>
          <li><a href="'. esc_url( admin_url( 'widgets.php' ) ) .'" class="button button-primary">Add/Edit Widgets</a></li>
          <li><a href="https://superbthemes.com/customer-support/" target="_blank" class="button">Contact Support <span aria-hidden="true" class="dashicons dashicons-external"></span></a> </li>
        </ul>
      </span>
      </span>
      <span class="st-notification-footer">
        Minimalistblogger is created by SuperbThemes. We have 100.000+ users and are rated <strong>Excellent</strong> on Trustpilot <img src="'. esc_url( get_template_directory_uri() . '/inc/admin_notification/src/stars.svg' ).'" width="87" height="16" />
      </span>
    </span>

<style>.st-notification-column-wrapper{width:100%;display:-webkit-box;display:-ms-flexbox;display:flex;border-top:1px solid #eee;padding-top:20px;margin-top:3px}.st-notification-column-wrapper h2{margin:0}.st-notification-footer img{margin-bottom:-3px;margin-left:10px}.st-notification-column-wrapper .button{min-width:180px;text-align:center;margin-top:10px}.st-notification-column{margin-right:10px;padding:0 10px;max-width:250px;width:100%}.st-notification-column img{border:1px solid #eee}.st-notification-footer{display:inline-block;width:100%;padding:15px 0;border-top:1px solid #eee;margin-top:10px}.st-notification-column:first-of-type{padding-left:0;max-width:160px}.st-notification-column-list li{list-style-type:circle;margin-left:15px;font-size:14px}@media only screen and (max-width:1000px){.st-notification-column{max-width:33%}}@media only screen and (max-width:800px){.st-notification-column{max-width:50%}.st-notification-column:first-of-type{display:none}}@media only screen and (max-width:600px){.st-notification-column-wrapper{display:block}.st-notification-column{width:100%;max-width:100%;display:inline-block;padding:0;margin:0}span.st-notification-column:last-of-type{margin-top:30px}}</style>

    ', "info", $options_notification_start);
  $notifications->Boot();
}
