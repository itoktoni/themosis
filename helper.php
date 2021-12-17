<?php

function getThemeInfo()
{
    return wp_get_theme();
}

function getThemeName()
{
    return getThemeInfo()->template;
}

function getThemeAsset($name = null)
{
    if ($name) {

        return get_theme_root_uri() . '/' . getThemeName() . '/' . $name;
    }
    return get_theme_root_uri() . '/' . getThemeName();
}

function getTemplate($whereWp)
{
    $wp_query = new WP_Query($whereWp);
    $content = false;
    if ($wp_query->have_posts()) {
        while ($wp_query->have_posts()) {
            $wp_query->the_post();
            $content['template'] = json_decode(json_encode(get_field('template')), FALSE);
            $content['content'] = get_post(get_the_ID());
        }
    }
    return $content;
}

function getProduct($type, $slug)
{
    $product = array(
        'post_type'   => $type,
        'post_status' => 'publish',
        'numberposts' => -1
    );

    $wp_query = new WP_Query($product);
    $data = false;
    if ($wp_query->have_posts()) {
        while ($wp_query->have_posts()) {
            $wp_query->the_post();
            $filter = get_field('category');
            if (!empty($filter) && $filter->post_name == $slug) {
                $data[] = get_post(get_the_ID());
            }
        }
    }

    return $data;
}

function getCategory($type)
{
    $product = array(
        'post_type'   => $type,
        'post_status' => 'publish',
        'numberposts' => -1
    );

    $wp_query = new WP_Query($product);
    $data = false;
    if ($wp_query->have_posts()) {
        while ($wp_query->have_posts()) {
            $wp_query->the_post();
            $data[] = get_post(get_the_ID());
        }
    }

    return $data;
}

function getListMenuLocation()
{
    return get_nav_menu_locations();
}

function getMenuLocation($name)
{
    $menu = getListMenuLocation();
    if($menu){

        $menu = get_term(get_nav_menu_locations()[$name], 'nav_menu');
    }
    return $menu;
}

function getMenuObject($name)
{
    return wp_get_nav_menu_object($name) ?? false;
}

function getMenu($name)
{
    $menu_id = getMenuLocation($name)->term_id ?? 0;
    $menuitems = wp_get_nav_menu_items($menu_id, array('order' => 'DESC'));
    $parent = [];
    if($menuitems){

        foreach ($menuitems as $item) {
            if ($item->menu_item_parent == 0) {
                $parent[$item->ID] = (array) $item;
            } else {
                $parent[$item->menu_item_parent]['check'][] = $item->object_id;
                $parent[$item->menu_item_parent]['child'][] = (array) $item;
            }
        }
    }

    return $parent;
}
