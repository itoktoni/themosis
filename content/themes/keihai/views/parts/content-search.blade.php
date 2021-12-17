<li class="blog-post">
    <div class="entry-meta text-right">
        {!! posted_on() !!}
        {!! posted_by() !!}
    </div>

    <div class="list-content">
        <a href="{{ esc_url(get_permalink()) }}">
            <h3>{!! Loop::title() !!}</h3>
        </a>

        <p>
            {!! Loop::excerpt() !!}
        </p>

        <a href="{{ esc_url(get_permalink()) }}" class="read-more">
            <span>
                Read more
                <i class="fa fa-chevron-right"></i>
            </span>
        </a>
    </div>
</li>
