@extends('layout.app', ["title" => getText("registerd_lump_sum")])

@section('content')
<div style="height: 20vw"></div>
<section>
    <div class="accounting-office container-fluid">
        <div class="description text-center container">
            <h1 class="display-2 mb-4" data-aos="fade-down">{!! getText('registerd_lump_sum') !!}</h1>
            <hr class="opacity-100 my-4 mx-auto w-25" />

            <div class="mt-5" data-aos="zoom-in">{!! getText('registerd_lump_sum_page_text_1') !!}</div>
        </div>
        <div class="row bg-dark-white">
            <div class="col-md-6 tablet-img" data-aos="fade-right" style="background-image: url({{ getPageImage(1) }})">
            </div>
            <div class="col-md-6 mt-5 p-5" data-aos="zoom-in">
                {!! getText('registerd_lump_sum_page_text_2') !!}
            </div>
            <div class="col-md-6 mt-5 p-5" data-aos="zoom-in">
                {!! getText('registerd_lump_sum_page_text_3') !!}
            </div>
            <div class="col-md-6 tablet-img" data-aos="fade-right" style="background-image: url({{ getPageImage(2) }})">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="interesting container">
        <div class="row align-items-center">
            <div class="img-container col-md-6" data-aos="fade-right">
                <img class="img-fluid" src="{{ getPageImage(8, 'url', 'home') }}" />
            </div>
            <div class="col-md-5 ms-auto">
                <h2 class="display-2 mb-4" data-aos="fade-down">
                    {!! getText('interesting') !!} ?
                </h2>
                <div class="display-6 mb-4" data-aos="zoom-in">{!! getText('the_next_step_is_up_to_you') !!}</div>
                <div class="d-flex justify-content-left" data-aos="fade-up">
                    <a href="{{ route('contact') }}" class="btn-container text-uppercase" style="min-width: 35%;">
                        <div class="p-3 btn-child-1 bg-secondary-color">
                            <span class="fw-bold">{!! getText('write') !!}</span>
                            <span>{!! getText('to_us') !!}</span>
                        </div>

                        <div class="p-3 btn-child-2 bg-primary-color">{!! getText('contact') !!}</div>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
