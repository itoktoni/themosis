<div class="page-highlight">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="nivo-wrapper">
                    <div id="slider-1" class="nivoSlider events-slider">
                        @if($data)
                        @foreach($data->highlight_list as $highlight)
                        <a href="{{ $highlight->highlight_url }}"><img src="{{ $highlight->highlight_image }}" alt="{{ $highlight->highlight_name }}" title="#data-{{ $loop->iteration }}" /></a>
                        @endforeach
                        @endif
                    </div>

                    @if($data)
                    @foreach($data->highlight_list as $highlight)
                    <div id="data-{{ $loop->iteration }}" class="nivo-caption">
                        <h4>{{ $highlight->highlight_name }}</h4>
                        <p>{{ $highlight->highlight_description }}</p>
                    </div>
                    @endforeach
                    @endif

                </div>

            </div>
        </div>
    </div>
</div>