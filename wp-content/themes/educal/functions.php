<?php

/**
 * educal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package educal
 */

if ( !function_exists( 'educal_setup' ) ):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function educal_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on educal, use a find and replace
         * to change 'educal' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'educal', get_template_directory() . '/languages' );

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
        register_nav_menus( [
            'main-menu' => esc_html__( 'Main Menu', 'educal' ),
            'category-menu' => esc_html__( 'Category Menu', 'educal' ),
            'header-search-menu' => esc_html__( 'Search Menu', 'educal' ),
        ] );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ] );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'educal_custom_background_args', [
            'default-color' => 'ffffff',
            'default-image' => '',
        ] ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        //Enable custom header
        add_theme_support( 'custom-header' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', [
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ] );

        /**
         * Enable suporrt for Post Formats
         *
         * see: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support( 'post-formats', [
            'image',
            'audio',
            'video',
            'gallery',
            'quote',
        ] );

        // Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );

        // Add support for full and wide align images.
        add_theme_support( 'align-wide' );

        // Add support for editor styles.
        add_theme_support( 'editor-styles' );

        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );

        // enable woocommerce
        add_theme_support('woocommerce');

        remove_theme_support( 'widgets-block-editor' );

        add_image_size( 'educal-case-details', 1170, 600, [ 'center', 'center' ] );
    }
endif;
add_action( 'after_setup_theme', 'educal_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function educal_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'educal_content_width', 640 );
}
add_action( 'after_setup_theme', 'educal_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function educal_widgets_init() {

    $footer_style_2_switch = get_theme_mod( 'footer_style_2_switch', true );
    $footer_style_3_switch = get_theme_mod( 'footer_style_3_switch', false );

    /**
     * blog sidebar
     */
    register_sidebar( [
        'name'          => esc_html__( 'Blog Sidebar', 'educal' ),
        'id'            => 'blog-sidebar',
        'before_widget' => '<div id="%1$s" class="sidebar__widget mb-60 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="sidebar__widget-title mb-35">',
        'after_title'   => '</h3>',
    ] );


    register_sidebar(array(
        'name' => esc_html__('Product Sidebar', 'educal'),
        'id' => 'product-sidebar',
        'before_widget' => '<div id="%1$s" class="product-widgets side-cat %2$s mb-45">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="product-widget-title">',
        'after_title' => '</h6>',
    ));


    $footer_widgets = get_theme_mod( 'footer_widget_number', 4 );


    // footer default
    for ( $num = 1; $num <= $footer_widgets; $num++ ) {
        register_sidebar( [
            'name'          => sprintf( esc_html__( 'Footer %1$s', 'educal' ), $num ),
            'id'            => 'footer-' . $num,
            'description'   => sprintf( esc_html__( 'Footer %1$s', 'educal' ), $num ),
            'before_widget' => '<div id="%1$s" class="footer__widget footer-col-'.$num.' mb-50 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="footer__widget-title mb-22">',
            'after_title'   => '</h3>',
        ] );
    }

    // footer 2
    if ( $footer_style_2_switch ) {
        for ( $num = 1; $num <= $footer_widgets; $num++ ) {

            register_sidebar( [
                'name'          => sprintf( esc_html__( 'Footer Style 2 : %1$s', 'educal' ), $num ),
                'id'            => 'footer-2-' . $num,
                'description'   => sprintf( esc_html__( 'Footer Style 2 : %1$s', 'educal' ), $num ),
                'before_widget' => '<div id="%1$s" class="footer__widget mb-50 %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="footer__widget-title footer__widget-title-2 mb-22">',
                'after_title'   => '</h3>',
            ] );
        }
    }    

    // footer 2
    if ( $footer_style_3_switch ) {
        for ( $num = 1; $num <= $footer_widgets; $num++ ) {
            register_sidebar( [
                'name'          => sprintf( esc_html__( 'Footer Style 3 : %1$s', 'educal' ), $num ),
                'id'            => 'footer-3-' . $num,
                'description'   => sprintf( esc_html__( 'Footer Style 3 : %1$s', 'educal' ), $num ),
                'before_widget' => '<div id="%1$s" class="footer__widget mb-50 %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<div class="footer__widget-title mb-25"><h3>',
                'after_title'   => '</h3></div>',
            ] );
        }
    }


}
add_action( 'widgets_init', 'educal_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

define( 'EDUCAL_THEME_DIR', get_template_directory() );
define( 'EDUCAL_THEME_URI', get_template_directory_uri() );
define( 'EDUCAL_THEME_CSS_DIR', EDUCAL_THEME_URI . '/assets/css/' );
define( 'EDUCAL_THEME_JS_DIR', EDUCAL_THEME_URI . '/assets/js/' );
define( 'EDUCAL_THEME_INC', EDUCAL_THEME_DIR . '/inc/' );

/**
 * educal_scripts description
 * @return [type] [description]
 */
function educal_scripts() {

    /**
     * all css files
     */

    wp_enqueue_style( 'educal-fonts', educal_fonts_url(), array(), '1.0.0' );
    if( is_rtl() ){
        wp_enqueue_style( 'bootstrap-rtl', EDUCAL_THEME_CSS_DIR.'bootstrap.rtl.min.css', array() );
    }else{
        wp_enqueue_style( 'bootstrap', EDUCAL_THEME_CSS_DIR.'bootstrap.min.css', array() );
    }
    wp_enqueue_style( 'animate', EDUCAL_THEME_CSS_DIR . 'animate.min.css', [] );
    wp_enqueue_style( 'nice-select', EDUCAL_THEME_CSS_DIR . 'nice-select.css', [] );
    wp_enqueue_style( 'backtotop', EDUCAL_THEME_CSS_DIR . 'backToTop.css', [] );
    wp_enqueue_style( 'preloader', EDUCAL_THEME_CSS_DIR . 'preloader.css', [] );
    wp_enqueue_style( 'meanmenu', EDUCAL_THEME_CSS_DIR . 'meanmenu.css', [] );
    wp_enqueue_style( 'swiper-bundle', EDUCAL_THEME_CSS_DIR . 'swiper-bundle.css', [] );
    wp_enqueue_style( 'owl-carousel', EDUCAL_THEME_CSS_DIR . 'owl.carousel.min.css', [] );
    wp_enqueue_style( 'jquery-fancybox', EDUCAL_THEME_CSS_DIR . 'jquery.fancybox.min.css', [] );
    wp_enqueue_style( 'fontawesome5pro', EDUCAL_THEME_CSS_DIR . 'fontAwesome5Pro.css', [] );
    wp_enqueue_style( 'elegantfont', EDUCAL_THEME_CSS_DIR . 'elegantFont.css', [] );
    wp_enqueue_style( 'educal-default', EDUCAL_THEME_CSS_DIR . 'default.css', [] );
    wp_enqueue_style( 'educal-shop', EDUCAL_THEME_CSS_DIR . 'shop.css', [] );
    // wp_enqueue_style( 'educal-gutenberg-custom', EDUCAL_THEME_CSS_DIR . 'gutenberg-custom.css', [] );
    wp_enqueue_style( 'educal-core', EDUCAL_THEME_CSS_DIR . 'educal-core.css', [], time() );
    wp_enqueue_style( 'educal-unit', EDUCAL_THEME_CSS_DIR . 'educal-unit.css', [] );
    wp_enqueue_style( 'educal-custom', EDUCAL_THEME_CSS_DIR . 'educal-custom.css', [] );
    wp_enqueue_style( 'educal-style', get_stylesheet_uri() );
    wp_enqueue_style( 'educal-responsive', EDUCAL_THEME_CSS_DIR . 'responsive.css', [], time()  );

    // all js
    wp_enqueue_script( 'bootstrap-bundle', EDUCAL_THEME_JS_DIR . 'bootstrap.bundle.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'backtotop', EDUCAL_THEME_JS_DIR . 'backToTop.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'jquery-nice-select', EDUCAL_THEME_JS_DIR . 'jquery.nice-select.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'isotope-pkgd', EDUCAL_THEME_JS_DIR . 'isotope.pkgd.min.js', [ 'imagesloaded' ], false, true );
    wp_enqueue_script( 'jquery-fancybox', EDUCAL_THEME_JS_DIR . 'jquery.fancybox.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'jquery-counterup', EDUCAL_THEME_JS_DIR . 'jquery.counterup.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'waypoints', EDUCAL_THEME_JS_DIR . 'waypoints.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'jquery-meanmenu', EDUCAL_THEME_JS_DIR . 'jquery.meanmenu.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'owl-carousel', EDUCAL_THEME_JS_DIR . 'owl.carousel.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'swiper-bundle', EDUCAL_THEME_JS_DIR . 'swiper-bundle.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'parallax', EDUCAL_THEME_JS_DIR . 'parallax.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'wow', EDUCAL_THEME_JS_DIR . 'wow.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'educal-main', EDUCAL_THEME_JS_DIR . 'main.js', [ 'jquery' ], false, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'educal_scripts' );

/*
Register Fonts
 */
function educal_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'educal' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap';
    }
    return $font_url;
}

// wp_body_open
if ( !function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}

/**
 * Implement the Custom Header feature.
 */
require EDUCAL_THEME_INC . 'custom-header.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require EDUCAL_THEME_INC . 'template-functions.php';

if (  function_exists('tutor') ) {
    require EDUCAL_THEME_INC . 'educal-tutor.php';
}

if ( class_exists( 'LearnPress' ) ) {
    require EDUCAL_THEME_INC . 'educal-learpress.php';
}

if ( class_exists( 'SFWD_LMS' ) ) {
    require EDUCAL_THEME_INC . 'educal-learndash.php';
}

/**
 * Custom template helper function for this theme.
 */
require EDUCAL_THEME_INC . 'template-helper.php';

/**
 * initialize kirki customizer class.
 */
include_once EDUCAL_THEME_INC . 'kirki-customizer.php';
include_once EDUCAL_THEME_INC . 'class-educal-kirki.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require EDUCAL_THEME_INC . 'jetpack.php';
}


// Woo Check
if (!defined('EDUCAL_WOOCOMMERCE_ACTIVED')) {
    define('EDUCAL_WOOCOMMERCE_ACTIVED', in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins'))));
}

define('EDUCAL_WISHLIST_ACTIVED', in_array('yith-woocommerce-wishlist/init.php', apply_filters('active_plugins', get_option('active_plugins'))));

define('EDUCAL_QUICK_VIEW_ACTIVED', in_array('yith-woocommerce-quick-view/init.php', apply_filters('active_plugins', get_option('active_plugins'))));

if (EDUCAL_WOOCOMMERCE_ACTIVED) {
    require_once EDUCAL_THEME_INC . 'educal-woocommerce.php';
}

/**
 * include educal functions file
 */
require_once EDUCAL_THEME_INC . 'class-navwalker.php';
require_once EDUCAL_THEME_INC . 'class-tgm-plugin-activation.php';
require_once EDUCAL_THEME_INC . 'add_plugin.php';

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function educal_pingback_header() {
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
    }
}
add_action( 'wp_head', 'educal_pingback_header' );

/**
 *
 * comment section
 *
 */
add_filter( 'comment_form_default_fields', 'educal_comment_form_default_fields_func' );

function educal_comment_form_default_fields_func( $default ) {

    $default['author'] = '<div class="row">
    <div class="col-xl-6 col-md-6">
    	<div class="post-input">
        	<input type="text" name="author" placeholder="' . esc_attr__( 'Your Name', 'educal' ) . '">
        </div>
    </div>';
    $default['email'] = '<div class="col-xl-6 col-md-6">
		<div class="post-input">
        <input type="text" name="email" placeholder="' . esc_attr__( 'Your Email', 'educal' ) . '">
    	</div>
    </div>';
    // $default['url'] = '';
    $defaults['comment_field'] = '';

    $default['url'] = '<div class="col-xl-12">
		<div class="post-input">
        <input type="text" name="url" placeholder="' . esc_attr__( 'Website', 'educal' ) . '">
    	</div>
    </div>';
    return $default;
}

add_action( 'comment_form_top', 'educal_add_comments_textarea' );
function educal_add_comments_textarea() {
    if ( !is_user_logged_in() ) {
        echo '<div class="row"><div class="col-xl-12"><div class="post-input"><textarea id="comment" name="comment" cols="60" rows="6" placeholder="' . esc_attr__( 'Write your comment here...', 'educal' ) . '" aria-required="true"></textarea></div></div></div>';
    }
}

add_filter( 'comment_form_defaults', 'educal_comment_form_defaults_func' );

function educal_comment_form_defaults_func( $info ) {
    if ( !is_user_logged_in() ) {
        $info['comment_field'] = '';
        $info['submit_field'] = '%1$s %2$s</div>';
    } else {
        $info['comment_field'] = '<div class="post-input"><textarea id="comment" name="comment" cols="30" rows="10" placeholder="' . esc_attr__( 'Comment *', 'educal' ) . '"></textarea>';
        $info['submit_field'] = '%1$s %2$s</div>';
    }

    $info['submit_button'] = '<div class="col-xl-12"><button class="e-btn" type="submit">' . esc_html__( 'Post Comment', 'educal' ) . ' </button></div>';

    $info['title_reply_before'] = '<div class="post-comments-title">
                                        <h2>';
    $info['title_reply_after'] = '</h2></div>';
    $info['comment_notes_before'] = '';

    return $info;
}

if ( !function_exists( 'educal_comment' ) ) {
    function educal_comment( $comment, $args, $depth ) {
        $GLOBAL['comment'] = $comment;
        extract( $args, EXTR_SKIP );
        $args['reply_text'] = 'Reply <i class="fal fa-reply"></i>';
        $replayClass = 'comment-depth-' . esc_attr( $depth );
        ?>
			<li id="comment-<?php comment_ID();?>">
				<div class="comments-box">
					<div class="comments-avatar">
						<?php print get_avatar( $comment, 102, null, null, [ 'class' => [] ] );?>
					</div>
					<div class="comments-text">
						<div class="avatar-name">
							<h5><?php print get_comment_author_link();?></h5>
							<span><?php comment_time( get_option( 'date_format' ) );?></span>
						</div>
						<?php comment_text();?>
						<?php comment_reply_link( array_merge( $args, [ 'depth' => $depth, 'max_depth' => $args['max_depth'] ] ) );?>
					</div>
				</div>
		<?php
}
}

/**
 * shortcode supports for removing extra p, spance etc
 *
 */
add_filter( 'the_content', 'educal_shortcode_extra_content_remove' );
/**
 * Filters the content to remove any extra paragraph or break tags
 * caused by shortcodes.
 *
 * @since 1.0.0
 *
 * @param string $content  String of HTML content.
 * @return string $content Amended string of HTML content.
 */
function educal_shortcode_extra_content_remove( $content ) {

    $array = [
        '<p>['    => '[',
        ']</p>'   => ']',
        ']<br />' => ']',
    ];
    return strtr( $content, $array );

}

// educal_search_filter_form
if ( !function_exists( 'educal_search_filter_form' ) ) {
    function educal_search_filter_form( $form ) {

        $form = sprintf(
            '<div class="sidebar__widget-px"><div class="search-px"><form class="sidebar-search-form" action="%s" method="get">
      	<input type="text" value="%s" required name="s" placeholder="%s">
      	<button type="submit"> <i class="far fa-search"></i>  </button>
		</form></div></div>',
            esc_url( home_url( '/' ) ),
            esc_attr( get_search_query() ),
            esc_html__( 'Search', 'educal' )
        );

        return $form;
    }
    add_filter( 'get_search_form', 'educal_search_filter_form' );
}

add_action( 'admin_enqueue_scripts', 'educal_admin_custom_scripts' );

function educal_admin_custom_scripts() {
    wp_enqueue_media();
    wp_enqueue_style( 'customizer-style', get_template_directory_uri() . '/inc/css/customizer-style.css',array());
    wp_register_script( 'educal-admin-custom', get_template_directory_uri() . '/inc/js/admin_custom.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'educal-admin-custom' );
}

//get course url from different lms plugins
function educal_header_search_url() {
    if(class_exists( 'SFWD_LMS' )) {
        return esc_url( home_url( '/courses' ) );
    }
    elseif(class_exists( 'LearnPress' )) {
        return esc_url( home_url( '/lp-courses' ) );
    }
    else {
        return esc_url( home_url( '/courses' ) );
    }
}

