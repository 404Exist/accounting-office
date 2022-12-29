@extends('layout.app')

@section('content')
    <section>
        <div class="home-first-section">
            <div class="looking-for-accountant">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 pt-5">
                            <div class="bg-image" data-aos="fade-right" style="background-image: url({{ getPageImage(1) }})">
                                <div class="overlay position-absolute top-0 bottom-0 start-0 end-0"></div>
                                <div class="z-1 d-flex justify-content-center" data-aos="fade-up">
                                    <a href="{{ route('ledger') }}" class="btn-container text-uppercase">
                                        <div class="p-3 btn-child-left-1">{!! getKeyText('find_out_more') !!}</div>

                                        <div class="p-3 btn-child-left-2 bg-secondary-color">{!! getKeyText('get_to_know_us_better') !!}</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-5">
                            <div class="bg-image" data-aos="fade-left" style="background-image: url({{ getPageImage(2) }})">
                                <div class="overlay position-absolute top-0 bottom-0 start-0 end-0"></div>
                                <div class="z-1 d-flex justify-content-center" data-aos="fade-up">
                                    <a href="{{ route('full_accountancy') }}" class="btn-container text-uppercase">
                                        <div class="p-3 btn-child-right-1">{!! getKeyText('find_out_more') !!}</div>

                                        <div class="p-3 btn-child-right-2 bg-secondary-color">{!! getKeyText('get_to_know_us_better') !!}</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
