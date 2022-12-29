@extends('layout.app', ['title' => getKeyText('offline')])

@section('content')
    <div class="vh-100 d-flex flex-column justify-content-center">
        <h1 class="text-center text-danger">{!! getKeyText('offline_page_text') !!}</h1>
    </div>
@endsection
