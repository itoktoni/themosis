@extends('layouts.main')

@section('content')
@if(have_posts())

<div class="page-content page-post page-search">
    <div class="container">

        <div class="fixed">

            <div class="row col-md-12 searching">

                <div class="col-md-8">
                    <div class="title">
                        <h3>Category</h3>

                    </div>
                    <ul class="search">
                        @if($category)
                        @foreach($category as $cat)
                        <li>
                            <a class="btn btn-xs btn-primary" href="{{ url('/category/'.$cat->slug) }}">
                                {{ $cat->cat_name ?? '' }}
                            </a>
                        </li>
                        @endforeach
                        @endif
                    </ul>

                </div>

                <div class="col-md-4">
                    <div id="search-2" class="widget_search clearfix">
                        <div class="title-right">
                            <h3>
                                Search
                                @if(request()->get('s'))
                                {!! sprintf(esc_html__(' : %s', THEME_TD), '<span>'.get_search_query().'</span>') !!}
                                @endif
                            </h3>
                        </div>

                        <form action="{{ url('/') }}" method="GET">
                            <input class="a_search" name="s" type="text" placeholder="Type and hit enter..." />
                            <input class="search-submit" type="submit" />
                        </form>

                    </div>
                </div>

            </div>

        </div>

        <div class="row content">
            <ul class="col-md-12 blog-posts post-list">

                @while(have_posts())
                @php(the_post())
                @template('parts.content', 'search')
                @endwhile

                <div class="row">
                    <div class="col-md-12">
                        <span class="tag-name">Tags : </span>
                        <ul class="tags">
                            @foreach(get_the_tags() as $tag)
                            <li>
                                <a href="{{ url('/tag/'.$tag->slug) }}">{{ $tag->name ?? '' }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <hr>

                {!! get_the_posts_navigation() !!}

            </ul>
        </div>
    </div>
</div>

@else
@template('parts.content', 'none')
@endif
@endsection