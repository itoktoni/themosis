<div class="row page-product-slider">
    <div class="col-md-12 clearfix">
        
        @if(!empty($data->product_slider_name))
        <div class="custom-heading">
            <h4>{{ $data->product_slider_name ?? '' }}</h4>
        </div>
        @endif

        <div class="carousel-container">
            <div id="product-carousel" class="owl-carousel owl-dot">

                @if($data->product_slider_list)
                @foreach($data->product_slider_list as $pslider)

                <div class="owl-item">
                    <div class="service-feature-box">
                        <a href="{{ url('part/'.$pslider->post_name) }}">
                            <div class="service-media">
                                <img src="{{ wp_get_attachment_url(get_post_thumbnail_id($pslider->ID)) ?? '' }}" alt="{{ $pslider->post_name ?? '' }}" />
                            </div>

                            <div class="service-body">
                                {{ $pslider->post_title ?? '' }}
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
                @endif

            </div>
        </div>
    </div>
</div>