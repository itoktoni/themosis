<div class="page-default page-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="col-md-6 column-contact">

                    <div class="custom-heading">
                        <h2>{{ $data->contact_name ?? '' }}</h2>
                    </div>

                    {!! $data->contact_form ?? '' !!}
                </div>
                <div class="col-md-6 column-map">
                    {!! $data->contact_map ?? '' !!}
                    <br>
                    {!! $data->contact_description ?? '' !!}
                </div>
            </div>
        </div>
    </div>
</div>