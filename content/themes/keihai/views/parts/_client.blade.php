<div class="page-client page-content custom-bkg bkg-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="custom-heading02 simple">
                    <h2 class="mb-3">{{ $data->client_name ?? '' }}</h2>
                    {{ $data->client_description ?? '' }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="carousel-container">
                    <div id="client-carousel" class="owl-carousel owl-carousel-navigation">

                        @if($data)
                        @foreach($data->client_list as $client)
                        <div class="owl-item">
                            <img src="{{ $client->client_list_image }}" alt="{{ $client->client_list_name ?? 'Client Image' }}"/>
                        </div>
                        @endforeach
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>