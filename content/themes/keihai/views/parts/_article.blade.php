<div class="page-article">
    <div class="container">
        <div class="row">
            <div class="custom-heading02 mt-3">
                <h2>{{ $data->article_name ?? '' }}</h2>
                <p>{{ $data->article_description ?? '' }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 clearfix">
                <div class="carousel-container">
                    <div id="services-carousel" class="owl-carousel owl-dot">
                        @if($data->article_list)
                        @foreach($data->article_list as $article)
                        <div class="owl-item">
                            <div class="service-feature-box">
                                <div class="service-media">
                                    <img src="{{ wp_get_attachment_url(get_post_thumbnail_id($article->ID)) ?? '' }}" alt="{{ $article->post_title ?? '' }}" />
                                    <a href="{{ url('/'.$article->post_name) }}" class="read-more02">
                                        <span>Read more<i class="fa fa-chevron-right"></i></span>
                                    </a>
                                </div>

                                <div class="service-body">
                                    <div class="custom-heading">
                                        <h4>{{ $article->post_title ?? '' }}</h4>
                                    </div>
                                    <p>{{ $article->post_excerpt ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>