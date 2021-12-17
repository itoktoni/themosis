<div class="page-specification">
    <div class="row">
        <div class="col-md-12">
            <div class="custom-heading">
                <h4>{{ $post->post_title ?? '' }}</h4>
            </div>
            <table class="table table-striped table-bordered table-hover">
                @if($data)
                @foreach($data->specification_list as $spec)
                <tr>
                    <td class="text-left">
                        <div class="text-left">{{ $spec->specification_name ?? '' }}</div>
                    </td>
                    <td>
                        <div class="text-left">{{ $spec->specification_description ?? '' }}</div>
                    </td>
                </tr>
                @endforeach
                @endif
            </table>
        </div>
    </div>
</div>