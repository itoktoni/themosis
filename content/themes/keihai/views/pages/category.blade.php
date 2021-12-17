@extends('layouts.main')

@section('content')

<div class="page-content page-category">
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
                            @foreach($category as $pro)
                            <li class="menu-item {{ $pro->ID == $post->ID ? 'active' : '' }}">
                                <a href="{{ url('/'.$url_category.'/'.$pro->post_name) }}">
                                    {{ $pro->post_title ?? '' }}
                                </a>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </li>
                </ul>
            </aside>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <img class="mt-1" src="{{ wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?? '' }}" alt="" />
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="custom-heading">
                            <h2>{{ $post->post_title ?? '' }}</h2>
                        </div>

                        {!! $post->post_content ?? '' !!}
                    </div>
                </div>

                @php
                $slider['product_name'] = 'Recomendation';
                $slider['product_description'] = null;
                $slider['product_slider_list'] = $product;
                @endphp
                @includeIf('parts._product_slider', ['data' => (Object)$slider])

                @if(!empty($template))
                    @foreach($template as $theme)
                        @includeIf('parts._'.$theme->acf_fc_layout, ['data' => $theme])
                    @endforeach
                @endif

            </div>
        </div>
    </div>
</div>

@endsection