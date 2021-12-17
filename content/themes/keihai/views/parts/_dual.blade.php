<div class="page-content page-dual">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="li-content">
                    <div class="custom-heading simple">
                        <h2>{{ $data->dual_name ?? '' }}</h2>
                    </div>
                    <p>
                        {!! $data->dual_description ?? '' !!}
                    </p>
                </div>

            </div>

            <div class="col-md-6" data-animate="fadeInRight">
                <img src="{!! $data->dual_image ?? '' !!}" alt="{{ $data->dual_name ?? '' }}" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                {!! $data->dual_footer ?? '' !!}
            </div>
        </div>

    </div>
</div>