<?php
/**
 * educal customizer
 *
 * @package educal
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Added Panels & Sections
 */
function educal_customizer_panels_sections( $wp_customize ) {

    //Add panel
    $wp_customize->add_panel( 'educal_customizer', [
        'priority' => 10,
        'title'    => esc_html__( 'Educal Customizer', 'educal' ),
    ] );

    /**
     * Customizer Section
     */
    $wp_customize->add_section( 'header_top_setting', [
        'title'       => esc_html__( 'Header Topbar Setting', 'educal' ),
        'description' => '',
        'priority'    => 10,
        'capability'  => 'edit_theme_options',
        'panel'       => 'educal_customizer',
    ] );

    $wp_customize->add_section( 'header_social', [
        'title'       => esc_html__( 'Header Social', 'educal' ),
        'description' => '',
        'priority'    => 11,
        'capability'  => 'edit_theme_options',
        'panel'       => 'educal_customizer',
    ] );

    $wp_customize->add_section( 'section_header_logo', [
        'title'       => esc_html__( 'Header Setting', 'educal' ),
        'description' => '',
        'priority'    => 12,
        'capability'  => 'edit_theme_options',
        'panel'       => 'educal_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'educal' ),
        'description' => '',
        'priority'    => 13,
        'capability'  => 'edit_theme_options',
        'panel'       => 'educal_customizer',
    ] );

    $wp_customize->add_section( 'header_side_setting', [
        'title'       => esc_html__( 'Side Info', 'educal' ),
        'description' => '',
        'priority'    => 14,
        'capability'  => 'edit_theme_options',
        'panel'       => 'educal_customizer',
    ] );

    $wp_customize->add_section( 'breadcrumb_setting', [
        'title'       => esc_html__( 'Breadcrumb Setting', 'educal' ),
        'description' => '',
        'priority'    => 15,
        'capability'  => 'edit_theme_options',
        'panel'       => 'educal_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'educal' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'educal_customizer',
    ] );

    $wp_customize->add_section( 'footer_setting', [
        'title'       => esc_html__( 'Footer Settings', 'educal' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'educal_customizer',
    ] );

    $wp_customize->add_section( 'color_setting', [
        'title'       => esc_html__( 'Color Setting', 'educal' ),
        'description' => '',
        'priority'    => 17,
        'capability'  => 'edit_theme_options',
        'panel'       => 'educal_customizer',
    ] );

    $wp_customize->add_section( '404_page', [
        'title'       => esc_html__( '404 Page', 'educal' ),
        'description' => '',
        'priority'    => 18,
        'capability'  => 'edit_theme_options',
        'panel'       => 'educal_customizer',
    ] );

    $wp_customize->add_section( 'course_settings', [
        'title'       => esc_html__( 'Course Settings ', 'educal' ),
        'description' => '',
        'priority'    => 19,
        'capability'  => 'edit_theme_options',
        'panel'       => 'educal_customizer',
    ] );

    $wp_customize->add_section( 'learndash_course_settings', [
        'title'       => esc_html__( 'Learndash Course Settings ', 'educal' ),
        'description' => '',
        'priority'    => 20,
        'capability'  => 'edit_theme_options',
        'panel'       => 'educal_customizer',
    ] );

    $wp_customize->add_section( 'typo_setting', [
        'title'       => esc_html__( 'Typography Setting', 'educal' ),
        'description' => '',
        'priority'    => 21,
        'capability'  => 'edit_theme_options',
        'panel'       => 'educal_customizer',
    ] );

    $wp_customize->add_section( 'slug_setting', [
        'title'       => esc_html__( 'Slug Settings', 'educal' ),
        'description' => '',
        'priority'    => 22,
        'capability'  => 'edit_theme_options',
        'panel'       => 'educal_customizer',
    ] );
    $wp_customize->add_section( 'tutor_course_settings', [
        'title'       => esc_html__( 'Tutor Course Settings ', 'educal' ),
        'description' => '',
        'priority'    => 23,
        'capability'  => 'edit_theme_options',
        'panel'       => 'educal_customizer',
    ] );
}

add_action( 'customize_register', 'educal_customizer_panels_sections' );

function _header_top_fields( $fields ) {
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'educal_topbar_switch',
        'label'    => esc_html__( 'Topbar Swicher', 'educal' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'educal_header_lang',
        'label'    => esc_html__( 'Show Language', 'educal' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'educal_preloader',
        'label'    => esc_html__( 'Preloader On/Off', 'educal' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'educal_search',
        'label'    => esc_html__( 'Serach On/Off', 'educal' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'educal_backtotop',
        'label'    => esc_html__( 'Back To Top On/Off', 'educal' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'educal_header_right',
        'label'    => esc_html__( 'Header Right On/Off', 'educal' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'educal_side_hide',
        'label'    => esc_html__( 'Side Info On/Off', 'educal' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'educal_course_cat_label',
        'label'    => esc_html__( 'Course Cat Label', 'educal' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'Category', 'educal' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'link',
        'settings' => 'educal_course_cat_label_link',
        'label'    => esc_html__( 'Course Cat Link', 'educal' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '#', 'educal' ),
        'priority' => 10,
    ];

    // button
    $fields[] = [
        'type'     => 'text',
        'settings' => 'educal_button_text',
        'label'    => esc_html__( 'Button Text', 'educal' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'Get A Quote', 'educal' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'educal_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'link',
        'settings' => 'educal_button_link',
        'label'    => esc_html__( 'Button URL', 'educal' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '#', 'educal' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'educal_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'educal_signup_button_text',
        'label'    => esc_html__( 'Button Text', 'educal' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'Sign Up', 'educal' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'educal_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'link',
        'settings' => 'educal_signup_button_link',
        'label'    => esc_html__( 'Button URL', 'educal' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '#', 'educal' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'educal_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    return $fields;

}
add_filter( 'kirki/fields', '_header_top_fields' );

/*
Header Social
 */
function _header_social_fields( $fields ) {
    // header section social
    $fields[] = [
        'type'     => 'text',
        'settings' => 'educal_topbar_fb_url',
        'label'    => esc_html__( 'Facebook Url', 'educal' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'educal' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'educal_topbar_twitter_url',
        'label'    => esc_html__( 'Twitter Url', 'educal' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'educal' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'educal_topbar_linkedin_url',
        'label'    => esc_html__( 'Linkedin Url', 'educal' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'educal' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'educal_topbar_instagram_url',
        'label'    => esc_html__( 'Instagram Url', 'educal' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'educal' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'educal_topbar_youtube_url',
        'label'    => esc_html__( 'Youtube Url', 'educal' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'educal' ),
        'priority' => 10,
    ];


    return $fields;
}
add_filter( 'kirki/fields', '_header_social_fields' );

/*
Header Settings
 */
function _header_header_fields( $fields ) {


    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_default_header',
        'label'       => esc_html__( 'Select Header Style', 'educal' ),
        'section'     => 'section_header_logo',
        'placeholder' => esc_html__( 'Select an option...', 'educal' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'header-style-1'   => get_template_directory_uri() . '/inc/img/header/header-1.png',
            'header-style-2' => get_template_directory_uri() . '/inc/img/header/header-2.png',
            'header-style-3'  => get_template_directory_uri() . '/inc/img/header/header-3.png',
            'header-style-4'  => get_template_directory_uri() . '/inc/img/header/header-4.png',
            'header-style-5'  => get_template_directory_uri() . '/inc/img/header/header-5.png',
        ],
        'default'     => 'header-style-1',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'logo',
        'label'       => esc_html__( 'Header Logo', 'educal' ),
        'description' => esc_html__( 'Upload Your Logo.', 'educal' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'seconday_logo',
        'label'       => esc_html__( 'Header Secondary Logo', 'educal' ),
        'description' => esc_html__( 'Header Logo Black', 'educal' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo-black.png',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'preloader_icon',
        'label'       => esc_html__( 'Preloader Icon', 'educal' ),
        'description' => esc_html__( 'Upload Preloader Icon.', 'educal' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo-icon.png',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'preloader_logo',
        'label'       => esc_html__( 'Preloader Logo', 'educal' ),
        'description' => esc_html__( 'Upload Preloader Logo.', 'educal' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo-text-2.png',
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_header_fields' );

/*
Header Side Info
 */
function _header_side_fields( $fields ) {
    // side info settings
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'educal_hamburger_hide',
        'label'    => esc_html__( 'Show Hamburger On/Off', 'educal' ),
        'section'  => 'header_side_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'educal_side_logo',
        'label'       => esc_html__( 'Logo Side', 'educal' ),
        'description' => esc_html__( 'Logo Side', 'educal' ),
        'section'     => 'header_side_setting',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo-black.png',
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'educal_extra_about_title',
        'label'    => esc_html__( 'About Us Title', 'educal' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'About Us Title', 'educal' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'educal_extra_about_text',
        'label'    => esc_html__( 'About Us Desc..', 'educal' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'About Us Desc...', 'educal' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'educal_extra_button',
        'label'    => esc_html__( 'Button Text', 'educal' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'Contact Us', 'educal' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'educal_extra_button_url',
        'label'    => esc_html__( 'Button URL', 'educal' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '#', 'educal' ),
        'priority' => 10,
    ];
    // contact
    $fields[] = [
        'type'     => 'text',
        'settings' => 'educal_contact_title',
        'label'    => esc_html__( 'Contact Title', 'educal' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'Contact Title', 'educal' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'educal_extra_address',
        'label'    => esc_html__( 'Office Address', 'educal' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '123/A, Miranda City Likaoli Prikano, Dope United States', 'educal' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'educal_extra_phone',
        'label'    => esc_html__( 'Phone Number', 'educal' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '+0989 7876 9865 9', 'educal' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'educal_extra_email',
        'label'    => esc_html__( 'Email ID', 'educal' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'info@basictheme.net', 'educal' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_side_fields' );

/*
_header_page_title_fields
 */
function _header_page_title_fields( $fields ) {
    // Breadcrumb Setting

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'educal_breadcrumb_shape_switch',
        'label'    => esc_html__( 'Shape Show/Hide', 'educal' ),
        'section'  => 'breadcrumb_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'breadcrumb_bg_img',
        'label'       => esc_html__( 'Breadcrumb Background Image', 'educal' ),
        'description' => esc_html__( 'Breadcrumb Background Image', 'educal' ),
        'section'     => 'breadcrumb_setting',
        'default'     => get_template_directory_uri() . '/assets/img/page-title/page-title.jpg',
    ];
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'educal_breadcrumb_bg_color',
        'label'       => __( 'Breadcrumb BG Color', 'educal' ),
        'description' => esc_html__( 'This is a Breadcrumb bg color control.', 'educal' ),
        'section'     => 'breadcrumb_setting',
        'default'     => '#f4f9fc',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'breadcrumb_info_switch',
        'label'    => esc_html__( 'Breadcrumb Info switch', 'educal' ),
        'section'  => 'breadcrumb_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_page_title_fields' );

/*
Header Social
 */
function _header_blog_fields( $fields ) {
// Blog Setting
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'educal_blog_btn_switch',
        'label'    => esc_html__( 'Blog BTN On/Off', 'educal' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'educal_blog_cat',
        'label'    => esc_html__( 'Blog Category Meta On/Off', 'educal' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'educal_blog_author',
        'label'    => esc_html__( 'Blog Author Meta On/Off', 'educal' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'educal_blog_date',
        'label'    => esc_html__( 'Blog Date Meta On/Off', 'educal' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'educal_blog_comments',
        'label'    => esc_html__( 'Blog Comments Meta On/Off', 'educal' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'educal_blog_btn',
        'label'    => esc_html__( 'Blog Button text', 'educal' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Read More', 'educal' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title',
        'label'    => esc_html__( 'Blog Title', 'educal' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog', 'educal' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title_details',
        'label'    => esc_html__( 'Blog Details Title', 'educal' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog Details', 'educal' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_blog_fields' );

/*
Footer
 */
function _header_footer_fields( $fields ) {
    // Footer Setting
    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_default_footer',
        'label'       => esc_html__( 'Choose Footer Style', 'educal' ),
        'section'     => 'footer_setting',
        'default'     => '5',
        'placeholder' => esc_html__( 'Select an option...', 'educal' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'footer-style-1'   => get_template_directory_uri() . '/inc/img/footer/footer-1.png',
            'footer-style-2' => get_template_directory_uri() . '/inc/img/footer/footer-2.png',
        ],
        'default'     => 'footer-style-1',
    ];

    $fields[] = [
        'type'        => 'select',
        'settings'    => 'footer_widget_number',
        'label'       => esc_html__( 'Widget Number', 'educal' ),
        'section'     => 'footer_setting',
        'default'     => '4',
        'placeholder' => esc_html__( 'Select an option...', 'educal' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            '4' => esc_html__( 'Widget Number 4', 'educal' ),
            '3' => esc_html__( 'Widget Number 3', 'educal' ),
            '2' => esc_html__( 'Widget Number 2', 'educal' ),
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'educal_footer_bg',
        'label'       => esc_html__( 'Footer Background Image.', 'educal' ),
        'description' => esc_html__( 'Footer Background Image.', 'educal' ),
        'section'     => 'footer_setting',
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'educal_footer_bg_color',
        'label'       => __( 'Footer BG Color', 'educal' ),
        'description' => esc_html__( 'This is a Footer bg color control.', 'educal' ),
        'section'     => 'footer_setting',
        'default'     => '#f4f9fc',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_2_switch',
        'label'    => esc_html__( 'Footer Style 2 On/Off', 'educal' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_copyright_switch',
        'label'    => esc_html__( 'Footer Copyright On/Off', 'educal' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'educal_copyright',
        'label'    => esc_html__( 'Copy Right', 'educal' ),
        'section'  => 'footer_setting',
        'default'  => esc_html__( 'Copyright &copy; 2021 Theme_Pure. All Rights Reserved', 'educal' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'footer_copyright_switch',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_footer_fields' );

// color
function educal_color_fields( $fields ) {
    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'educal_color_option',
        'label'       => __( 'Theme Color', 'educal' ),
        'description' => esc_html__( 'This is a Theme color control.', 'educal' ),
        'section'     => 'color_setting',
        'default'     => '#2b4eff',
        'priority'    => 10,
    ];
    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'educal_color_option_2',
        'label'       => __( 'Primary Color', 'educal' ),
        'description' => esc_html__( 'This is a Primary color control.', 'educal' ),
        'section'     => 'color_setting',
        'default'     => '#f2277e',
        'priority'    => 10,
    ];
     // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'educal_color_option_3',
        'label'       => __( 'Secondary Color', 'educal' ),
        'description' => esc_html__( 'This is a Secondary color control.', 'educal' ),
        'section'     => 'color_setting',
        'default'     => '#30a820',
        'priority'    => 10,
    ];
     // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'educal_color_option_3_2',
        'label'       => __( 'Secondary Color 2', 'educal' ),
        'description' => esc_html__( 'This is a Secondary color 2 control.', 'educal' ),
        'section'     => 'color_setting',
        'default'     => '#ffb352',
        'priority'    => 10,
    ];
     // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'educal_color_scrollup',
        'label'       => __( 'ScrollUp Color', 'educal' ),
        'description' => esc_html__( 'This is a ScrollUp colo control.', 'educal' ),
        'section'     => 'color_setting',
        'default'     => '#2b4eff',
        'priority'    => 10,
    ];

    return $fields;
}
add_filter( 'kirki/fields', 'educal_color_fields' );

// 404
function educal_404_fields( $fields ) {
    // 404 settings
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'educal_404_bg',
        'label'       => esc_html__( '404 Image.', 'educal' ),
        'description' => esc_html__( '404 Image.', 'educal' ),
        'section'     => '404_page',
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'educal_error_title',
        'label'    => esc_html__( 'Not Found Title', 'educal' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Page not found', 'educal' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'educal_error_desc',
        'label'    => esc_html__( '404 Description Text', 'educal' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Oops! The page you are looking for does not exist. It might have been moved or deleted', 'educal' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'educal_error_link_text',
        'label'    => esc_html__( '404 Link Text', 'educal' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Back To Home', 'educal' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', 'educal_404_fields' );

// course_settings
function educal_course_fields( $fields ) {

    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'course_style',
        'label'       => esc_html__( 'Select Course Style', 'educal' ),
        'section'     => 'course_settings',
        'default'     => '5',
        'placeholder' => esc_html__( 'Select an option...', 'educal' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'standard'   => get_template_directory_uri() . '/inc/img/course/course-1.jpg',
            'course_with_sidebar' => get_template_directory_uri() . '/inc/img/course/course-2.jpg',
            'course_solid'  => get_template_directory_uri() . '/inc/img/course/course-3.jpg',
        ],
        'default'     => 'standard',
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_search_switch',
        'label'    => esc_html__( 'Show search?', 'educal' ),
        'section'  => 'course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_latest_post_switch',
        'label'    => esc_html__( 'Show latest post?', 'educal' ),
        'section'  => 'course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_category_switch',
        'label'    => esc_html__( 'Show category filter?', 'educal' ),
        'section'  => 'course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_skill_switch',
        'label'    => esc_html__( 'Show skill filter?', 'educal' ),
        'section'  => 'course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    return $fields;

}

if ( class_exists( 'LearnPress' ) ) {
add_filter( 'kirki/fields', 'educal_course_fields' );
}


// course_settings
function educal_learndash_fields( $fields ) {

    $fields[] = [
        'type'     => 'number',
        'settings' => 'educal_learndash_post_number',
        'label'    => esc_html__( 'Learndash Post Per page', 'educal' ),
        'section'  => 'learndash_course_settings',
        'default'  => 6,
        'priority' => 10,
    ];

    $fields[] = [
        'type'        => 'select',
        'settings'    => 'educal_learndash_order',
        'label'       => esc_html__( 'Post Order', 'educal' ),
        'section'     => 'learndash_course_settings',
        'default'     => 'DESC',
        'placeholder' => esc_html__( 'Select an option...', 'educal' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'ASC' => esc_html__( 'ASC', 'educal' ),
            'DESC' => esc_html__( 'DESC', 'educal' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'educal_learndash_related',
        'label'    => esc_html__( 'Show Related?', 'educal' ),
        'section'  => 'learndash_course_settings',
        'default'  => 1,
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];

    return $fields;

}

if ( class_exists( 'SFWD_LMS' ) ) {
add_filter( 'kirki/fields', 'educal_learndash_fields' );
}


// tutor_course_settings
function educal_tutor_course_fields( $fields ) {
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'educal_tutor_course_details_author_meta_switch',
        'label'    => esc_html__( 'Tutor Course Details Author Meta', 'educal' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'educal_tutor_course_details_payment_switch',
        'label'    => esc_html__( 'Tutor Course Details Payment', 'educal' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'educal_tutor_course_desc_tab_switch',
        'label'    => esc_html__( 'Tutor Course Description Tab Swicher', 'educal' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'educal_tutor_course_curriculum_tab_switch',
        'label'    => esc_html__( 'Tutor Course Curriculum Tab Swicher', 'educal' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'educal_tutor_course_reviews_tab_switch',
        'label'    => esc_html__( 'Tutor Course Reviews Tab Swicher', 'educal' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'educal_tutor_course_instructor_tab_switch',
        'label'    => esc_html__( 'Tutor Course Instructor Tab Swicher', 'educal' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'educal' ),
            'off' => esc_html__( 'Disable', 'educal' ),
        ],
    ];
    return $fields;
}

if (  function_exists('tutor') ) {
    add_filter( 'kirki/fields', 'educal_tutor_course_fields' );
}


/**
 * Added Fields
 */
function educal_typo_fields( $fields ) {
    // typography settings
    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_body_setting',
        'label'       => esc_html__( 'Body Font', 'educal' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'body',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h_setting',
        'label'       => esc_html__( 'Heading h1 Fonts', 'educal' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h1',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h2_setting',
        'label'       => esc_html__( 'Heading h2 Fonts', 'educal' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h2',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h3_setting',
        'label'       => esc_html__( 'Heading h3 Fonts', 'educal' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h3',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h4_setting',
        'label'       => esc_html__( 'Heading h4 Fonts', 'educal' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h4',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h5_setting',
        'label'       => esc_html__( 'Heading h5 Fonts', 'educal' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h5',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h6_setting',
        'label'       => esc_html__( 'Heading h6 Fonts', 'educal' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h6',
            ],
        ],
    ];
    return $fields;
}

add_filter( 'kirki/fields', 'educal_typo_fields' );




/**
 * Added Fields
 */
function educal_slug_setting( $fields ) {
    // slug settings
    $fields[] = [
        'type'     => 'text',
        'settings' => 'educal_ev_slug',
        'label'    => esc_html__( 'Event Slug', 'educal' ),
        'section'  => 'slug_setting',
        'default'  => esc_html__( 'ourevent', 'educal' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'educal_port_slug',
        'label'    => esc_html__( 'Portfolio Slug', 'educal' ),
        'section'  => 'slug_setting',
        'default'  => esc_html__( 'ourportfolio', 'educal' ),
        'priority' => 10,
    ];

    return $fields;
}

add_filter( 'kirki/fields', 'educal_slug_setting' );


/**
 * This is a short hand function for getting setting value from customizer
 *
 * @param string $name
 *
 * @return bool|string
 */
function EDUCAL_THEME_option( $name ) {
    $value = '';
    if ( class_exists( 'educal' ) ) {
        $value = Kirki::get_option( educal_get_theme(), $name );
    }

    return apply_filters( 'EDUCAL_THEME_option', $value, $name );
}

/**
 * Get config ID
 *
 * @return string
 */
function educal_get_theme() {
    return 'educal';
}