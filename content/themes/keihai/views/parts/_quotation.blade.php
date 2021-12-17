<div class="page-quotation parallax parallax01 dark">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="call-to-action clearfix">
                    <div class="header">
                        <h2 class="text-white">{{ $data->quotation_name }}</h2>
                        {!! $data->quotation_description !!}
                    </div>
                </div>
            </div>

            <div class="col-md-4 header">

                <h4 class="text-right text-white">{{ $data->quotation_header }}</h4>
                {!! $data->quotation_contact !!}

            </div>
        </div>
    </div>
</div>