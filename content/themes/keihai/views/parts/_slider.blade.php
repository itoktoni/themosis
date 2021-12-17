<div id="masterslider" class="page-slider master-slider ms-skin-default">

    @if($data)
    @foreach($data->slider_list as $slider)
    <div class="ms-slide">
        <img src="{{ $slider->slider_image }}" data-src="{{ $slider->slider_image }}" alt="{{ $slider->slider_name }}" />
        <a target="_blank" href="{{ $slider->slider_url }}" class="ms-layer pi-caption01" data-type="text" data-effect="{{ $slider->slider_effect }}" data-duration="300" data-hide-effect="fade" data-delay="0">
            {{ $slider->slider_name }}
        </a>
        <p class="ms-layer pi-text" data-type="text" data-effect="{{ $slider->slider_effect }}" data-duration="300" data-hide-effect="fade" data-delay="600">
            {{ $slider->slider_description }}
        </p>
    </div>
    @endforeach
    @endif

</div>