<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WP_Query;

class HomeController extends Controller
{
    /**
     * Show the home page.
     */
    public function index()
    {
        // dd(in_array(221, ["221","220"]));

        $query = array(
            'name'        => 'homepage',
            'post_type'   => 'page',
            'post_status' => 'publish',
            'numberposts' => 1
        );

        $data = getTemplate($query);
        if(!$data){
            abort(404);
        }
        $data['post'] = $data['content'];
        return view('pages.homepage', $data);
    }

    /**
     * Show the home page.
     */
    public function article()
    {
        $args = array(
            'post_type' => 'post',
            'orderby'    => 'ID',
            'post_status' => 'publish',
            'order'    => 'DESC',
            'posts_per_page' => 6 // this will retrive all the post that is published 
        );

        $category = get_categories();

        $query = new WP_Query($args);

        $query = array(
            'name'        => 'blog',
            'post_type'   => 'page',
            'post_status' => 'publish',
            'numberposts' => 1
        );

        return view('pages.article', [
            'data' => $query,
            'category' => $category
        ]);
    }
}
