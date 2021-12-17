@extends('layouts.main')

@section('content')

<div class="page-content page-forklift">
    <div class="container">
        <div class="row">
            <aside class="col-md-3 aside aside-left">
                <ul class="aside-widgets">
                    <li class="widget widget_nav_menu clearfix">
                        <div class="title">
                            <h3>Category</h3>
                        </div>
                        <ul class="menu">
                            @if($category)
                            @php
                            $select = get_field('category', $post->ID);
                            $by_id = $select->ID ?? false;
                            @endphp
                            @foreach($category as $pro)
                            <li class="menu-item {{ $pro->ID == $by_id ? 'active' : '' }}">
                                <a href="{{ url('/'.$url_category.'/'.$pro->post_name) }}">
                                    {{ $pro->post_title ?? '' }}
                                </a>
                            </li>
                            @endforeach
                            @endif
                        </ul>
            </aside>

            <div class="col-md-9 content">
                <div class="col-md-12">

                    <div class="custom-heading">
                        <h2>{{ $post->post_title ?? '' }}</h2>
                        <hr>
                        <p>
                            {!! $post->post_excerpt ?? '' !!}
                        </p>
                    </div>

                    <img class="forklift-kv img-responsive" src="{{ wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?? '' }}" alt="{{ $post->post_title ?? '' }}" />
                </div>

                <div class="col-md-12 mt-1">
                    {!! $post->post_content ?? '' !!}
                </div>

                <div class="col-md-12">
                    @if(!empty($template))
                    @foreach($template as $theme)
                    @includeIf('parts._'.$theme->acf_fc_layout, ['data' => $theme])
                    @endforeach
                    @endif
                </div>

            </div>
        </div>

    </div>
</div>

@endsection