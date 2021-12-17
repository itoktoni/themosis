<?php

/**
 * Application routes.
 */

use Illuminate\Support\Facades\Route;
use Themosis\Support\Facades\PostType;

Route::get('/', 'HomeController@index')->name('home');

Route::any('home', function ($post, $query){
    
    $args = array(
        'post_type' => 'post',
        'orderby'    => 'ID',
        'post_status' => 'publish',
        'order'    => 'DESC',
        'posts_per_page' => 3 // this will retrive all the post that is published 
    );

    $category = get_categories();
    $query = new WP_Query($args);

    return view('pages.blog', [
        'data' => $query,
        'category' => $category
    ]);
});

Route::any('page', ['article', function($post) {

    $args = array(
        'post_type' => 'post',
        'orderby'    => 'ID',
        'post_status' => 'publish',
        'order'    => 'DESC',
        'posts_per_page' => 15 // this will retrive all the post that is published 
    );

    $category = get_categories();

    $query = new WP_Query($args);
    return view('pages.blog', [
        'data' => $query,
        'category' => $category
    ]);
}]);

$category = 'product';
$product = 'forklift';
// category 
Route::any('singular', [$category, function ($post, $query) use ($category, $product) {

    $data_product = getProduct($product, $post->post_name);
    $data_category = getCategory($category);

    $query = array(
        'name'        => $post->post_name,
        'post_type'   => $category,
        'post_status' => 'publish',
        'numberposts' => 1
    );

    $data = getTemplate($query);

    $data['product'] = $data_product;
    $data['category'] = $data_category;
    $data['url_category'] = $category;
    $data['url_product'] = $product;
    $data['post'] = $post;

    return view('pages.category', $data);
}]);

// product 
Route::any('singular', [$product, function ($post, $query) use ($category, $product) {

    $data_category = getCategory($category, $product, $post->post_name);

    $query = array(
        'name'        => $post->post_name,
        'post_type'   => $product,
        'post_status' => 'publish',
        'numberposts' => 1
    );

    $data = getTemplate($query);
    $data['post'] = $post;
    $data['category'] = $data_category;
    $data['url_category'] = $category;
    $data['url_product'] = $product;

    return view('pages.product', $data);
}]);

$category = 'sparepart';
$product = 'part';
// category 
Route::any('singular', [$category, function ($post, $query) use ($category, $product) {

    $data_product = getProduct($product, $post->post_name);
    $data_category = getCategory($category);

    $query = array(
        'name'        => $post->post_name,
        'post_type'   => $category,
        'post_status' => 'publish',
        'numberposts' => 1
    );

    $data = getTemplate($query);

    $data['product'] = $data_product;
    $data['category'] = $data_category;
    $data['url_category'] = $category;
    $data['url_product'] = $product;
    $data['post'] = $post;

    return view('pages.sparepart', $data);
}]);

// product 
Route::any('singular', [$product, function ($post, $query) use ($category, $product) {

    $data_category = getCategory($category, $product, $post->post_name);

    $query = array(
        'name'        => $post->post_name,
        'post_type'   => $product,
        'post_status' => 'publish',
        'numberposts' => 1
    );

    $data = getTemplate($query);
    $data['post'] = $post;
    $data['category'] = $data_category;
    $data['url_category'] = $category;
    $data['url_product'] = $product;

    return view('pages.part', $data);
}]);

// Route::any('page', [['about', 'contact', 24, 'Our Team'], function() {
//     return 'Hello World!';
// }]);

// If is_page(), loads htdocs/content/themes/my-theme/views/pages/default.blade.php.
Route::any('page', function ($post, $query) {

    $query = array(
        'name'        => $post->post_name,
        'post_type'   => 'page',
        'post_status' => 'publish',
        'numberposts' => 1
    );

    $data = getTemplate($query);
    $data['post'] = $post;
    return view('pages.default', $data);
});

// If is_singular(), loads htdocs/content/themes/my-theme/views/blog/single.blade.php.
Route::any('singular', function ($post, $query) {

    $category = get_categories();
    return view('blog.single', [
        'post' => $post, // not required
        'category' => $category
    ]);
});

Route::any('search', function ($post) {

    $category = get_categories();
    return view('pages.search', [
        'post' => $post, // not required
        'category' => $category
    ]);
});

Route::any('category', function ($post, $query) {

    $category = get_categories();
    return view('pages.search', [
        'post' => $post, // not required
        'category' => $category
    ]);
});

Route::any('tag', function ($post, $query) {

    $category = get_categories();
    return view('pages.search', [
        'post' => $post, // not required
        'category' => $category
    ]);
});

