<div class="page-list">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="container-dark background-dark">
                    <div class="custom-heading">
                        <h2>{{ $data->list_name ?? '' }}</h2>
                    </div>

                    <p>
                        {!! $data->list_description ?? '' !!}
                    </p>

                    @if($data->list_pointer)
                    <ul class="fa-ul">
                        @foreach($data->list_pointer as $pointer)
                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ $pointer->list_pointer_name ?? '' }}
                        </li>
                        @endforeach
                    </ul>
                    @endif

                    <p class="">
                        {!! $data->list_footer ?? '' !!}
                    </p>

                </div>
            </div>

            <div class="col-md-6 clearfix page-right">
                <div class="custom-heading">
                    <h2>{{ $data->list_right ?? '' }}</h2>
                </div>

                @if($data->list_right_list)
                @foreach($data->list_right_list as $right)
                <ul class="service-list-big-icons-details">
                    <li>
                        <div class="">
                            <h4>{{ $right->list_right_name ?? '' }}</h4>
                            <p>
                                {!! $right->list_right_description ?? '' !!}
                            </p>
                        </div>
                    </li>
                </ul>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>