@extends('layouts.main')

@section('content')
@if(!empty($template))
    @foreach($template as $theme)
        @includeIf('parts._'.$theme->acf_fc_layout, ['data' => $theme])
    @endforeach
@endif

@include('parts._article')

@endsection