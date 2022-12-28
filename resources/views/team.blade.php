@extends('layout.app', ["title" => getText("team")])

@section('content')
<div style="height: 10vw"></div>
<section>
    <div class="accounting-office container-fluid">
        <div class=" text-center container">
            <h1 class="display-2 mb-4" data-aos="fade-down">{!! getText('team') !!}</h1>
            <hr class="opacity-100 mx-auto w-25" />

        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            @foreach (app('team_members') as $member)
                <div class="col-md-3" data-aos="zoom-in">
                    <div class="bg-dark-white rounded">
                        <img src="{{ $member->pictureUrl }}" class="img-fluid" alt="{{ $member->name }}">
                        <div class="text-center py-3">{{ $member->name }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
