<div class="page-service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="custom-heading02">
                    <h2>{{ $data->service_name }}</h2>
                    <p>{{ $data->service_description }}</p>
                </div>
            </div>
        </div>

        <div class="row mb-30">
            @if($data->service_list)
            @foreach($data->service_list as $slider)
            <div class="col-md-6 col-sm-6 service-list">
                <div class="service-icon-left-boxed">
                    <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                        <img src="{{ $slider->service_list_icon }}" alt="{{ $slider->service_list_name }}" />
                    </div>
                    <div class="service-details">
                        <h3>{{ $slider->service_list_name }}</h3>
                        <p>{{ $slider->service_list_description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            @endif

        </div>
    </div>
</div>