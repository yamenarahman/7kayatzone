<?php

function mesmerize_add_blog_options($section)
{
    $priority = 1;

    mesmerize_add_kirki_field(array(
        'type'     => 'sectionseparator',
        'label'    => esc_html__('Blog Settings', 'mesmerize'),
        'section'  => $section,
        'settings' => "blog_section_settings_separator",
        'priority' => $priority,
    ));

    mesmerize_add_kirki_field(array(
        'type'     => 'checkbox',
        'settings' => 'blog_sidebar_enabled',
        'label'    => esc_html__('Show blog sidebar', 'mesmerize'),
        'section'  => $section,
        'default'  => true,
    ));

    mesmerize_add_kirki_field(array(
        'type'     => 'checkbox',
        'settings' => 'blog_post_meta_enabled',
        'label'    => esc_html__('Show post meta', 'mesmerize'),
        'section'  => $section,
        'default'  => true,
    ));


    mesmerize_add_kirki_field(array(
        'type'     => 'checkbox',
        'settings' => 'blog_post_highlight_enabled',
        'label'    => esc_html__('Highlight first post', 'mesmerize'),
        'section'  => $section,
        'default'  => true,
    ));


    mesmerize_add_kirki_field(array(
        'type'     => 'number',
        'settings' => 'blog_posts_per_row',
        'label'    => esc_html__('Post per row', 'mesmerize'),
        'section'  => $section,
        'default'  => 2,
        'choices'  => array(
            'min' => 1,
            'max' => 12,
        ),
    ));


    mesmerize_add_kirki_field(array(
        'type'     => 'checkbox',
        'settings' => 'blog_show_post_thumb_placeholder',
        'label'    => esc_html__('Show thumbnail placeholder', 'mesmerize'),
        'section'  => $section,
        'default'  => true,
    ));

    mesmerize_add_kirki_field(array(
        'type'            => 'color',
        'label'           => esc_html__('Placeholder Background Color', 'mesmerize'),
        'section'         => $section,
        'settings'        => 'blog_post_thumb_placeholder_color',
        'default'         => mesmerize_get_theme_colors('color2'),
        'active_callback' => array(
            array(
                'setting'  => 'blog_show_post_thumb_placeholder',
                'operator' => '==',
                'value'    => true,
            ),
        ),
    ));
}

mesmerize_add_blog_options('blog_settings');


function mesmerize_show_post_meta_setting_filter($value)
{

    $value = get_theme_mod('blog_post_meta_enabled', $value);

    return $value;
}

add_filter('mesmerize_show_post_meta', 'mesmerize_show_post_meta_setting_filter');


function mesmerize_posts_per_row_setting_filter($value)
{

    $value = get_theme_mod('blog_posts_per_row', $value);

    return $value;
}

add_filter('mesmerize_posts_per_row', 'mesmerize_posts_per_row_setting_filter');

function mesmerize_archive_post_highlight_setting_filter($value)
{

    $value = get_theme_mod('blog_post_highlight_enabled', $value);

    return $value;
}

add_filter('mesmerize_archive_post_highlight', 'mesmerize_archive_post_highlight_setting_filter');


function mesmerize_blog_sidebar_enabled_setting_filter($value)
{

    $value = intval(get_theme_mod('blog_sidebar_enabled', $value));

    return ($value === 1);
}

add_filter('mesmerize_blog_sidebar_enabled', 'mesmerize_blog_sidebar_enabled_setting_filter');