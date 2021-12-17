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

        <div class="row blog-post clearfix content">
            <div class="col-md-12">
                <div class="post-media">
                    <a href="{{ esc_url(get_permalink()) }}">
                        {!! post_thumbnail() !!}
                    </a>
                </div>

                <div class="">

                    <a href="{{ esc_url(get_permalink()) }}">
                        <h1>{!! Loop::title() !!}</h1>
                    </a>

                    <hr>

                    @if('post' === get_post_type())
                    <div class="entry-meta text-right">
                        {!! posted_on() !!}
                        {!! posted_by() !!}
                    </div>
                    @endif


                    {!! Loop::content() !!}
                </div>

                <footer class="entry-footer">
                    @php(entry_footer())
                </footer>
            </div>

        </div>
    </div>
</div>