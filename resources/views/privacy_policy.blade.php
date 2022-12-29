@extends('layout.app', ['title' => getText('privacy_policy')])

@section('content')
    <div style="height: 10vw"></div>
    <section>
        <div class="home-first-section">
            <div class="looking-for-accountant pt-5" style="background-image: url({{ getPageImage(2, 'home') }}); background-position: center">
                <div class="container">
                    <h1 class="display-2 mb-4 word-per-line" data-aos="fade-down">{!! getText('privacy_policy') !!}</h1>
                </div>
                <div class="container w-75">
                    <div class="pt-5" data-aos="zoom-out">
                        {!! getText('privacy_policy_page_text') !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
