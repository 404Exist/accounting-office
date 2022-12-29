@extends('layout.app', ['theme' => 'dark', 'title' => getKeyText('the_nas')])

@section('content')
    <div class="position-relative bg-primary-color" style="height: 80vh">
        <div class="overlay position-absolute top-0 bottom-0 start-0 end-0"></div>
        <div class="container text-center d-flex h-100 justify-content-center align-items-center flex-column content">
            <h1 class="display-4 z-1" data-aos="zoom-in">
                {!! getKeyText('welcome_to_the_world_of_new') !!}!
            </h1>
        </div>
    </div>
    <section>
        <div class="accounting-office container">
            <div class="row">
                <div class="col-md-6 py-5">
                    <h2 class="display-6 mb-4" data-aos="fade-down">
                        <span class="fw-bold">{!! getKeyText('we_are_glad_you_like_it') !!}</span>
                        <br />
                        <span class="fw-light">{!! getKeyText('get_to_know_us') !!}!</span>
                    </h2>
                    <div data-aos="zoom-out">{!! getKeyText('about_us_page_text') !!}</div>
                </div>
                <div class="col-md-6 tablet-img bg-dark-white" data-aos="fade-right"
                    style="background-image: url({{ getPageImage(1) }})">
                </div>
                <div class="col-12 p-0 my-3">
                    <img class="img-fluid" src="{{ getPageImage(2) }}" />
                </div>
            </div>
            <h2 class="display-3 my-5 text-center" data-aos="fade-down">
                <span class="fw-bold">{!! getKeyText('team') !!}</span>
                <span class="fw-light">{!! getKeyText('is_the_basis_for_us') !!}</span>
            </h2>
        </div>
    </section>
@endsection
