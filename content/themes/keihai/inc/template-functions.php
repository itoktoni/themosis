<?php

use Themosis\Support\Facades\Action;
use Themosis\Support\Facades\Filter;

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 *
 * @return array
 */
Filter::add('body_class', function ($classes) {
    // Adds a class of hfeed to non-singular pages.
    if (!is_singular()) {
        $classes[] = 'hfeed';
    }

    // Adds a class of no-sidebar when there is no sidebar present.
    if (!is_active_sidebar('sidebar-1')) {
        $classes[] = 'no-sidebar';
    }

    return $classes;
});

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
Action::add('wp_head', function () {
    if (is_singular() && pings_open()) {
        echo '<link rel="pingback" href="' . esc_url(get_bloginfo('pingback_url')) . '">';
    }
});

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
Action::add('after_setup_theme', function () {
    $GLOBALS['content_width'] = 640;
}, 0);

Action::add('customize_register', function ($wp_customize) {

    $wp_customize->add_setting(
        'company_name',
        array(
            'default' => '',
            'type' => 'option', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        ),
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'company_name',
        array(
            'label'      => __('Company name', 'textdomain'),
            'description' => __('your company name', 'textdomain'),
            'settings'   => 'company_name',
            'priority'   => 10,
            'section'    => 'title_tagline',
            'type'       => 'text',
        )
    ));

    $wp_customize->add_setting(
        'company_description',
        array(
            'default' => '',
            'type' => 'option', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        ),
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'company_description',
        array(
            'label'      => __('Company description', 'textdomain'),
            'description' => __('your company description', 'textdomain'),
            'settings'   => 'company_description',
            'priority'   => 10,
            'section'    => 'title_tagline',
            'type'       => 'textarea',
        )
    ));

    $wp_customize->add_setting(
        'company_keyword',
        array(
            'default' => '',
            'type' => 'option', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        ),
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'company_keyword',
        array(
            'label'      => __('Keyword', 'textdomain'),
            'description' => __('your keyword', 'textdomain'),
            'settings'   => 'company_keyword',
            'priority'   => 10,
            'section'    => 'title_tagline',
            'type'       => 'textarea',
        )
    ));

    $wp_customize->add_setting(
        'company_address',
        array(
            'default' => '',
            'type' => 'option', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        ),
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'company_address',
        array(
            'label'      => __('Address', 'textdomain'),
            'description' => __('your address', 'textdomain'),
            'settings'   => 'company_address',
            'priority'   => 10,
            'section'    => 'title_tagline',
            'type'       => 'textarea',
        )
    ));

    $wp_customize->add_setting(
        'newsletter_label',
        array(
            'default' => '',
            'type' => 'option', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        ),
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'newsletter_label',
        array(
            'label'      => __('NewsLetter Label', 'textdomain'),
            'description' => __('text for newsletter footer', 'textdomain'),
            'settings'   => 'newsletter_label',
            'priority'   => 10,
            'section'    => 'title_tagline',
            'type'       => 'text',
        )
    ));

    $wp_customize->add_setting(
        'newsletter_text',
        array(
            'default' => '',
            'type' => 'option', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        ),
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'newsletter_text',
        array(
            'label'      => __('NewsLetter Label', 'textdomain'),
            'description' => __('text for newsletter footer', 'textdomain'),
            'settings'   => 'newsletter_text',
            'priority'   => 10,
            'section'    => 'title_tagline',
            'type'       => 'textarea',
        )
    ));
});