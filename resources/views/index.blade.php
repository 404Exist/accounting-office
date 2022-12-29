@extends('layout.app', ['theme' => 'dark', 'title' => getText('home')])

@section('content')
    {{-- INTRO STARTS HERE --}}
    <div class="vh-100 intro" style="background-image: url({{ getPageImage(1) }})">
        <div class="overlay position-absolute top-0 bottom-0 start-0 end-0"></div>
        <div class="container text-center d-flex h-100 justify-content-center align-items-center flex-column content">
            <h1 class="mt-md-4 z-1 text-uppercase">
                {!! getText('accounting') !!}
                <span class="text-secondary-color fw-light">{!! getText('again') !!}</span>
            </h1>
            <div class="row buttons-container text-uppercase fs-2 z-1">
                <a href="{{ route('full_accountancy') }}" class="col-md-4 btn-container">
                    <div class="p-2 btn-child-1">
                        <div>{!! getText('i_am_looking_for_a_service') !!}</div>
                        <div class="fw-bold">{!! getText('accountant') !!}</div>
                    </div>

                    <div class="p-2 btn-child-2 bg-secondary-color">
                        <div>{!! getText('check') !!}</div>
                        <div>{!! getText('our_offer') !!}</div>
                    </div>
                </a>
                <a href="{{ route('establishment_of_the_company') }}" class="col-md-4 btn-container">
                    <div class="p-2 btn-child-1">
                        <div>{!! getText('i_want_to_put') !!}</div>
                        <div class="fw-bold">{!! getText('company') !!}</div>
                    </div>

                    <div class="p-2 btn-child-2 bg-secondary-color">
                        <div>{!! getText('great') !!}</div>
                        <div>{!! getText('we_help_you') !!}!</div>
                    </div>
                </a>
                <a href="{{ route('tax_consultancy') }}" class="col-md-4 btn-container">
                    <div class="p-2 btn-child-1">
                        <div>{!! getText('i_am_looking_for_an_advisor') !!}</div>
                        <div class="fw-bold">{!! getText('tax') !!}</div>
                    </div>

                    <div class="p-2 btn-child-2 bg-secondary-color">
                        <div>{!! getText('our_advisors') !!}</div>
                        <div>{!! getText('they are waiting for you') !!}!</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{-- INTRO ENDS HERE --}}
    {{-- FIRST SECTION STARTS HERE --}}
    <section>
        <div class="home-first-section">
            <div class="container text-center w-75">
                <h1 class="display-2" data-aos="fade-down">
                    <span class="fw-bold">{!! getText('an_accounting_office') !!}</span>

                    <span class="fw-light">{!! getText('no_1') !!} {!! getText('in') !!} {!! getText('gdańsk') !!}</span>
                </h1>
                <hr />
                <div class="mb-5" data-aos="zoom-in">{!! getText('accounting_office_home_text_1') !!}</div>
                <div class="d-flex justify-content-center aos-init aos-animate" data-aos="fade-up">
                    <a href="{{ route('about_us') }}" class="btn-container text-uppercase">
                        <div class="p-3 btn-child-1 bg-primary-color">{!! getText('more_about_us') !!}</div>

                        <div class="p-3 btn-child-2 bg-secondary-color">{!! getText('get_to_know_us_better') !!}</div>
                    </a>
                </div>
            </div>
            <div class="looking-for-accountant pt-5" style="background-image: url({{ getPageImage(2) }})">
                <div class="container pt-5 w-75">
                    <div class="row pt-5">
                        <div class="col-md-6 pt-5">
                            <div class="w-md-75">
                                <h4 data-aos="fade-down">
                                    {!! getText('are_you_looking_for_an_accountant') !!}?
                                </h4>
                                <div data-aos="zoom-out">
                                    {!! getText('looking_for_an_accountant_home_text') !!}
                                </div>
                            </div>
                            <div class="bg-image" data-aos="fade-right"
                                style="background-image: url({{ getPageImage(3) }})">
                                <div class="overlay position-absolute top-0 bottom-0 start-0 end-0"></div>
                                <div class="z-1 d-flex justify-content-center" data-aos="fade-up">
                                    <a href="{{ route('ledger') }}" class="btn-container text-uppercase">
                                        <div class="p-3 btn-child-left-1">{!! getText('find_out_more') !!}</div>

                                        <div class="p-3 btn-child-left-2 bg-secondary-color">{!! getText('get_to_know_us_better') !!}</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-5">
                            <div class="bg-image" data-aos="fade-left" style="background-image: url({{ getPageImage(4) }})">
                                <div class="overlay position-absolute top-0 bottom-0 start-0 end-0"></div>
                                <div class="z-1 d-flex justify-content-center" data-aos="fade-up">
                                    <a href="{{ route('full_accountancy') }}" class="btn-container text-uppercase">
                                        <div class="p-3 btn-child-right-1">{!! getText('find_out_more') !!}</div>

                                        <div class="p-3 btn-child-right-2 bg-secondary-color">{!! getText('get_to_know_us_better') !!}</div>
                                    </a>
                                </div>
                            </div>
                            <div class="bg-dark" data-aos="fade-left" style="min-height: 230px">
                                <div class="z-1 d-flex justify-content-center" data-aos="fade-up">
                                    <a href="{{ route('tax_consultancy') }}" class="btn-container text-uppercase">
                                        <div class="p-3 btn-child-right-1">{!! getText('find_out_more') !!}</div>

                                        <div class="p-3 btn-child-right-2 bg-secondary-color">{!! getText('get_to_know_us_better') !!}</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-image bg-primary-color" data-aos="fade-right">
                                <div class="z-1 d-flex justify-content-center" data-aos="fade-up">
                                    <a href="{{ route('hr_and_payroll') }}" class="btn-container text-uppercase">
                                        <div class="p-3 btn-child-left-1">{!! getText('hr_and_payroll') !!}</div>

                                        <div class="p-3 btn-child-left-2 bg-secondary-color">{!! getText('find_out_more') !!}</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="bg-image" data-aos="fade-left"
                                style="background-image: url({{ getPageImage(5) }})">
                                <div class="overlay position-absolute top-0 bottom-0 start-0 end-0"></div>
                                <div class="z-1 d-flex justify-content-center" data-aos="fade-up">
                                    <a href="{{ route('establishment_of_the_company') }}"
                                        class="btn-container text-uppercase">
                                        <div class="p-3 btn-child-1">{!! getText('setting_up_a_company') !!}</div>

                                        <div class="p-3 btn-child-2 bg-secondary-color">
                                            <p>{!! getText('setting_up_a_company') !!}</p>
                                            <p>{!! getText('read_more') !!}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- FIRST SECTION ENDS HERE --}}
    {{-- SECOND SECTION STARTS HERE --}}
    <section>
        <div class="features container text-center">
            <h1 class="display-2" data-aos="fade-down">
                <span class="fw-bold">{!! getText('a_new_quality') !!}</span>

                <span class="fw-light">{!! getText('in') !!} {!! getText('accounting') !!}</span>
            </h1>
            <div class="row justify-content-center g-5 my-4">
                <div class="col-md-2 col-6" data-aos="zoom-in">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 595.3 841.9"
                        style="enable-background:new 0 0 595.3 841.9;" xml:space="preserve">
                        <circle fill="#D99C5C" cx="297.6" cy="420.9" r="297.6" />
                        <g style="clip-path:url(#SVGID_00000106850097585117485720000007717143557498070165_);">
                            <path fill="#FFFFFF"
                                d="M478.4,526h-46.4v-46.1c0-3.4-2.8-6.2-6.2-6.2s-6.2,2.8-6.2,6.2V526H373c-3.4,0-6.2,2.8-6.2,6.2 s2.8,6.2,6.2,6.2h46.4v46.7c0,3.4,2.8,6.2,6.2,6.2c3.4,0,6.2-2.8,6.2-6.2v-46.8h46.4c3.4,0,6.2-2.8,6.2-6.2S481.7,526,478.4,526 L478.4,526z" />
                            <path fill="#FEFEFE"
                                d="M370.6,430.5c9.1,2.6,17.6,7.1,24.8,13.3c2.6,2.1,6.5,1.7,8.6-1c2-2.5,1.7-6.2-0.7-8.3 c-8.7-7.6-19-13-30.1-15.9l-3.7-1c-5.8-1.4-11.9,0.5-15.9,4.9c-13.7,15.9-31,16.7-49.3,16.7s-35.3-1.3-49-16.7 c-3.9-4.5-10.1-6.4-15.9-4.9l-3.7,1c-25.7,7-45.8,26.8-53.2,52.4l-5.2,17.9h-52.4c-0.8,0-1.6-0.3-2.1-1c-0.6-0.7-0.8-1.6-0.6-2.5 l10.2-36.3c8.7-28.8,27-38.1,59.8-45.9c0.6,0,1,0,1.6-0.6c2.1,1.5,4.7,3.1,6.8,4.4c0.8,0.5,1.8,0.7,2.8,0.6 c2.3-0.1,4.4-1.4,5.6-3.4c1.4-3,0.3-6.6-2.5-8.3c-18.3-9.3-31.7-36.3-31.7-63.5c-0.1-24.9,20-45.2,44.9-45.2c0.1,0,0.2,0,0.3,0 c7.3,0.1,14.5,1.8,21,5.2c-3.8,8.9-5.8,18.5-5.9,28.2c0,52.9,31.7,97.6,70,97.6s70-45.6,70-97.6c0-38.7-31.4-70.1-70.1-70.1 c-23.3,0-45.1,11.6-58.2,31l0,0c-28.2-14.7-63-3.8-77.7,24.4c-4.3,8.2-6.5,17.4-6.5,26.7c-0.2,21.9,7.1,43.3,20.8,60.4 c-28.2,7.1-51.7,17.7-62.5,53l-10.4,36c-2.1,8.2,2.9,16.6,11.1,18.7c1.1,0.3,2.3,0.4,3.4,0.5h48.3l-4.4,14.5 c-1.6,5.2-0.6,10.9,2.8,15.2c3.4,4.4,8.7,7.1,14.3,7.1h131.6c3.4,0,6.2-2.8,6.2-6.2s-2.8-6.2-6.2-6.2H186c-2.8,0-5-2.3-4.9-5.1 c0-0.5,0.1-1,0.2-1.4l13-45.2c6.3-21.4,23.3-38,44.9-43.7l3.7-1c1.3-0.2,2.6,0.3,3.4,1.3c17.1,19.5,38.1,21,58.6,21 c20.5,0,41.5-1.6,58.6-21l0,0c0.8-0.8,2-1.1,3.1-1L370.6,430.5z M305.2,262.9c25.1,0.1,47.2,16.3,54.8,40.2 c-11.1,2.2-22.5-2.3-29.1-11.4c-1.9-2.7-5.7-3.4-8.4-1.5c-0.1,0.1-0.2,0.1-0.2,0.2c-1.1,0.7-1.8,1.8-2.1,3.1c0,0,0,0.6-0.6,1 c-8.7,17.6-37.8,25.1-71.4,18.6c3.8-28.6,28.1-50,57-50.2H305.2z M271.4,327.7c24.8,0,45.2-7.9,55.6-22.3 c7.6,6.8,17.4,10.5,27.5,10.6c2.7,0,5.3-0.3,7.9-1c0.2,1.7,0.2,3.5,0,5.2c0,45.6-27,85.5-57.6,85.5c-29.4,0-55.6-36.9-57.6-80.2 c7.9,1.4,15.8,2.2,23.8,2.1L271.4,327.7z" />
                        </g>
                    </svg>
                    <strong>{!! getText('individual') !!}</strong>
                    <p>
                        <small class="text-muted">{!! getText('accounting_services') !!}</small>
                    </p>
                </div>
                <div class="col-md-2 col-6" data-aos="zoom-in">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 595.3 841.9"
                        style="enable-background:new 0 0 595.3 841.9;" xml:space="preserve">
                        <circle fill="#D99C5C" cx="297.6" cy="420.9" r="297.6" />
                        <path fill="#FFFFFF"
                            d="M420.7,381.3c0-67.9-55.1-123-123-123s-123,55.1-123,123l0,0c-27.3,1.7-48.7,24.2-49,51.5v6.1 c0,28.8,23.3,52.2,52.1,52.2c0.1,0,0.1,0,0.2,0h2.8l21.8,34.7c15,24.4,41.7,39.1,70.3,39h4.3c3.4,13.2,16.8,21.1,30,17.7 c13.2-3.4,21.1-16.8,17.7-30c-3.4-13.2-16.8-21.1-30-17.7c-8.7,2.2-15.4,9-17.7,17.7h-4.3c-24.4,0.1-47.2-12.6-59.9-33.5l-17.8-27.5 h4.3c6.8,0,12.3-5.5,12.3-12.3v-86.1c0-6.8-5.5-12.3-12.3-12.3h-12.3c0-61.1,49.5-110.6,110.6-110.6s110.6,49.5,110.6,110.6h-12.3 c-6.8,0-12.3,5.5-12.3,12.3v86.1c0,6.8,5.5,12.3,12.3,12.3h21.5c28.8,0,52.2-23.3,52.2-52.1c0-0.1,0-0.1,0-0.2v-6.5 C469.4,405.5,448,383,420.7,381.3z M300.7,546.9c6.8,0,12.3,5.5,12.3,12.3c0,6.8-5.5,12.3-12.3,12.3s-12.3-5.5-12.3-12.3l0,0 C288.4,552.4,293.9,546.9,300.7,546.9z M199.4,393.2v86.1h-21.5c-21.9,0-39.7-17.8-39.7-39.7v-6.7c0-21.9,17.8-39.7,39.7-39.7H199.4 z M457.3,439.2c0,21.9-17.8,39.7-39.7,39.7h-21.7v-85.7h21.5c21.9,0,39.7,17.8,39.7,39.7L457.3,439.2z" />
                        <path fill="#FFFFFF"
                            d="M348.6,304.5l-2.5-1.5l-2.5-1.5c-2.8-1.6-6.3-0.7-7.9,2.1c0,0,0,0,0,0c-1.5,2.8-0.5,6.3,2.1,7.9l2.5,1.5 c0.9,0.6,1.8,1.1,2.8,1.5c0.9,0.6,2,0.9,3.1,1c2.2,0.1,4.2-1.1,5.2-3.1c1.3-2.9,0.3-6.3-2.5-7.9L348.6,304.5z" />
                        <path fill="#FFFFFF"
                            d="M297.6,288.9c-25.9,0-50.6,11.4-67.5,31c-2.1,2.6-1.8,6.4,0.6,8.6c1.1,0.9,2.5,1.5,4,1.5 c1.8,0.1,3.5-0.7,4.6-2.1c14.7-16.9,35.9-26.7,58.3-26.7c5.6,0,11.1,0.6,16.6,1.8c3.3,0.6,6.5-1.4,7.4-4.6c0.6-3.3-1.4-6.5-4.6-7.4 C310.7,289.5,304.2,288.7,297.6,288.9L297.6,288.9z" />
                    </svg>
                    <strong>{!! getText('fast_contact') !!}</strong>
                    <p>
                        <small class="text-muted">{!! getText('personal') !!}, {!! getText('telephone') !!},
                            {!! getText('mail') !!}</small>
                    </p>
                </div>
                <div class="col-md-2 col-6" data-aos="zoom-in">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 595.3 841.9" style="enable-background:new 0 0 595.3 841.9;" xml:space="preserve">
                        <circle fill="#D99C5C" cx="297.6" cy="420.9" r="297.6" />
                        <g style="clip-path:url(#SVGID_00000135648640284354622060000007166565449510318744_);">
                            <path fill="#FFFFFF"
                                d="M310.6,492.5h-22.9c-3.7-0.4-7,2.2-7.4,5.9c-0.4,3.7,2.2,7,5.9,7.4c0.5,0.1,1,0.1,1.5,0h22.9 c3.7,0.4,7-2.2,7.4-5.9c0.4-3.7-2.2-7-5.9-7.4C311.6,492.4,311.1,492.4,310.6,492.5L310.6,492.5z" />
                            <path fill="#FFFFFF"
                                d="M486.5,499.1c0-3.7-3-6.7-6.7-6.7l0,0H457v-166c0-18.3-14.9-33.1-33.2-33.2H171.4 c-18.3,0-33.1,14.9-33.2,33.2v166H115c-3.7,0-6.7,3-6.7,6.7l0,0v13.1c0,18.3,14.9,33.1,33.2,33.2h312.2 c18.3-0.1,33.1-14.9,33.2-33.2L486.5,499.1z M473.6,512.2c0,11-8.9,19.9-19.9,19.9H141.6c-11,0-19.9-8.9-19.9-19.9v-6.7h133.1 c3.7-0.4,6.3-3.7,5.9-7.4c-0.3-3.1-2.8-5.6-5.9-5.9H151.6V326.5c0-11,8.9-19.9,19.9-19.9h252.3c11,0,19.9,8.9,19.9,19.9v166h-99.6 c-3.7,0.4-6.3,3.7-5.9,7.4c0.3,3.1,2.8,5.6,5.9,5.9h129.5V512.2z" />
                        </g>
                        <path fill="#FFFFFF"
                            d="M430.4,469.3V329.7c0-5.4-4.3-9.8-9.7-9.8c0,0-0.1,0-0.1,0h-246c-5.4,0-9.8,4.4-9.8,9.8c0,0,0,0.1,0,0.1v139.6 c-0.1,5.4,4.2,9.8,9.6,9.9c0.1,0,0.1,0,0.2,0h246c5.4,0.1,9.8-4.2,9.9-9.6c0-0.1,0-0.2,0-0.3H430.4z M417.2,465.9H178.1V333.2h239.1 V465.9z" />
                        <text transform="matrix(1 0 0 1 236.5234 428.8039)" fill="#FFFFFF" font-size="63.4961px">2</text>
                        <text transform="matrix(1 0 0 1 272.5586 428.8039)" fill="#FFFFFF"
                            font-size="63.4961px">4h</text>
                    </svg>

                    <strong>{!! getText('access_to_accounting') !!}</strong>
                    <p>
                        <small class="text-muted">{!! getText('data_online_24h') !!}</small>
                    </p>
                </div>
                <div class="col-md-2 col-6" data-aos="zoom-in">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 595.3 841.9"
                        style="enable-background:new 0 0 595.3 841.9;" xml:space="preserve">
                        <circle fill="#D99C5C" cx="297.6" cy="420.9" r="297.6" />
                        <g>
                            <defs>
                                <rect id="SVGID_1_" x="118.2" y="290.8" width="358.9" height="260.3" />
                            </defs>
                            <clipPath id="SVGID_00000052061828012970972350000011191356250608995743_">
                                <use xlink:href="#SVGID_1_" style="overflow:visible;" />
                            </clipPath>
                            <g style="clip-path:url(#SVGID_00000052061828012970972350000011191356250608995743_);">
                                <path fill="#FFFFFF"
                                    d="M413.4,372.1c-2.8-1.1-5-3.4-6-6.3c-19.2-57.4-81.2-88.4-138.7-69.3c-44.8,14.9-75,56.9-74.9,104.1 c-0.2,2.2-0.2,4.4,0,6.7c0,1.1-0.4,2.1-1,3c-0.5,0.6-1.2,1-2,1h-3.3c-38.3-1-70.2,29.3-71.2,67.7c-1,38.3,29.3,70.2,67.7,71.2 c1.5,0,3.1,0,4.6,0h194.7c50.3,0.2,91.6-39.8,92.9-90.1c0.4-40.1-25.3-75.8-63.5-88H413.4z M383.3,536.8H189 c-30.6,0.3-56-23.6-57.8-54.1c-0.5-15.3,5.2-30.2,15.9-41.2c10.6-11.2,25.4-17.5,40.9-17.3h2.5c4.5,0.4,8.9-1.3,12-4.7 c3.5-3.5,5.3-8.3,5-13.3v-0.6c-0.2-1.7-0.2-3.3,0-5c0-53.2,43.1-96.4,96.4-96.4c41.3,0,78,26.3,91.3,65.5 c2.2,7.1,7.6,12.6,14.6,14.9c32.5,10.6,54.4,41.2,53.8,75.4C462.1,503.2,426.4,537.3,383.3,536.8z" />
                            </g>
                        </g>
                        <path fill="#FFFFFF"
                            d="M242.4,384c-3.6-0.6-7.1,1.7-7.9,5.3c-0.5,3.7-0.7,7.5-0.6,11.3c0.4,3.7,3.7,6.3,7.4,5.9 c3.1-0.3,5.6-2.8,5.9-5.9c-0.1-2.9,0.1-5.8,0.6-8.7C248.3,388.3,246,384.9,242.4,384L242.4,384z" />
                        <path fill="#FFFFFF"
                            d="M325.4,334.6c-7.1-2.3-14.5-3.5-21.9-3.7c-20.9,0-40.8,9.4-54.1,25.6c-2.3,2.7-2,6.8,0.8,9.1 c0.1,0.1,0.2,0.2,0.3,0.2c1.2,0.9,2.7,1.4,4.3,1.3c2-0.1,3.9-0.9,5.3-2.3c10.5-13.2,26.6-21,43.5-21c6.1,0.1,12.1,1.1,17.9,3 c3.4,0.8,6.8-1,7.9-4.3c1-3.3-0.8-6.8-4.1-7.9c-0.1,0-0.1,0-0.2-0.1L325.4,334.6z" />
                        <g>
                            <defs>
                                <rect id="SVGID_00000173142480998498400290000001145100018472719528_" x="247.3"
                                    y="407.6" width="134.9" height="98.8" />
                            </defs>
                            <clipPath id="SVGID_00000152978601921575588700000004532554419610237592_">
                                <use xlink:href="#SVGID_00000173142480998498400290000001145100018472719528_"
                                    style="overflow:visible;" />
                            </clipPath>
                            <g style="clip-path:url(#SVGID_00000152978601921575588700000004532554419610237592_);">
                                <path fill="#FEFEFE"
                                    d="M314.8,431.3c-20.7,0-39.8,10.9-50.3,28.7c-0.8,1.1-0.7,2.6,0.4,3.5c1.1,0.8,2.6,0.7,3.5-0.4 c0.1-0.2,0.3-0.4,0.3-0.6c9.7-16.2,27.2-26.1,46-26.1c18.8,0.1,36.3,10,46,26.1c0.8,1.1,2.4,1.2,3.5,0.4c0.9-0.7,1.2-1.9,0.8-2.9 c-10.6-17.7-29.7-28.6-50.3-28.7H314.8z" />
                                <path fill="#FFFFFF"
                                    d="M381.8,442.3c-26.3-37-77.5-45.7-114.5-19.4c-7.5,5.3-14.1,11.9-19.4,19.4c-1,1-0.9,2.6,0.1,3.6 c1,1,2.6,0.9,3.6-0.1c0.2-0.2,0.3-0.4,0.4-0.6c24.6-34.8,72.8-43,107.6-18.3c7.1,5,13.3,11.2,18.3,18.3c0.5,0.6,1.2,1,2,1 c0.5,0,1.1-0.2,1.5-0.5C382.4,444.9,382.6,443.4,381.8,442.3C381.8,442.2,381.8,442.2,381.8,442.3L381.8,442.3z" />
                            </g>
                        </g>
                        <path fill="#FFFFFF"
                            d="M314.8,455c-14.6,0.1-27.6,9.1-32.8,22.8c-0.5,1.3,0.1,2.7,1.4,3.2c0,0,0.1,0,0.1,0.1c0.3,0.1,0.6,0.1,0.9,0 c1,0,2-0.6,2.4-1.6c5.7-15.5,22.8-23.4,38.3-17.7c8.2,3,14.7,9.5,17.7,17.7c0.6,1.3,2,1.9,3.3,1.3c1.2-0.5,1.8-1.8,1.4-3.1 C342.4,464.1,329.4,455,314.8,455L314.8,455z" />
                        <path fill="#FFFFFF"
                            d="M314.5,476.1c-8.2,0-14.9,6.7-14.9,14.9c0,8.2,6.7,14.9,14.9,14.9c8.2,0,14.9-6.7,14.9-14.9 C329.4,482.8,322.8,476.2,314.5,476.1z M314.5,501c-5.5,0-9.9-4.4-9.9-9.9s4.4-9.9,9.9-9.9s9.9,4.4,9.9,9.9 C324.4,496.6,320,501,314.5,501z" />
                    </svg>

                    <strong>{!! getText('document_flow') !!}</strong>
                    <p>
                        <small class="text-muted">{!! getText('online') !!}</small>
                    </p>
                </div>
            </div>
            <div class="row justify-content-center g-5 mb-4">
                <div class="col-md-2 col-6" data-aos="zoom-in">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 595.3 841.9"
                        style="enable-background:new 0 0 595.3 841.9;" xml:space="preserve">
                        <circle fill="#D99C5C" cx="297.6" cy="420.9" r="297.6" />
                        <g style="clip-path:url(#SVGID_00000162330021679143643380000010212623319880910751_);">
                            <path fill="#FFFFFF"
                                d="M333.8,378.9h8.6c3.4,0,6.1-2.7,6.1-6.1s-2.7-6.1-6.1-6.1h-8.6c-3.4,0-6.1,2.7-6.1,6.1 S330.5,378.9,333.8,378.9z" />
                            <path fill="#FFFFFF"
                                d="M447.5,528.1l-7.9-18.7c-2.5-5.5-8-9.1-14-9.2h-6.4V378.9h13.2c5.8,0.2,11-3.8,12.2-9.5 c1.2-5.6-1.6-11.3-6.7-13.7l-127-60.2c-8.2-4-17.8-4-26,0l-128.2,60.2c-6.3,2.6-9.3,9.9-6.7,16.2c2,4.8,6.7,7.8,11.8,7.6h12.9 v121.4h-5.5c-6.1,0.1-11.5,3.7-14,9.2l-7.9,18.3c-1.8,4.8-1.3,10.1,1.5,14.4c2.8,4.2,7.5,6.8,12.5,6.7h272.2c5,0,9.8-2.5,12.5-6.7 C449.2,538.5,449.7,532.9,447.5,528.1z M161.8,366.4l127.5-60.2c5-2.5,10.9-2.5,15.9,0l127.5,60.5h-19.8c-3.4,0-6.1,2.7-6.1,6.1 l0,0c0,0.6,0,1,0,1.2s0,1,0,1.2v125.4h-24.2v-85c0-13.5-10.9-24.4-24.4-24.4c-13.5,0-24.4,10.9-24.4,24.4v85.2h-12.2v-85.2 c0-13.5-10.9-24.4-24.4-24.4c-13.5,0-24.4,10.9-24.4,24.4v85.2h-12.2v-85.2c0-13.5-10.9-24.4-24.4-24.4 c-13.5,0-24.4,10.9-24.4,24.4v85.2h-24.4V378.9h119.5c3.4,0,6.1-2.7,6.1-6.1s-2.7-6.1-6.1-6.1L161.8,366.4z M369.9,415.3v85.5 h-24.1v-85.2c0-6.8,5.5-12.2,12.2-12.2c6.8,0,12.2,5.5,12.2,12.2c0,0,0,0,0,0L369.9,415.3z M308.7,415.3v85.5h-24.1v-85.2 c0-6.8,5.5-12.2,12.2-12.2c6.8,0,12.2,5.5,12.2,12.2L308.7,415.3z M247.6,415.3v85.5h-24.1v-85.2c0-6.8,5.5-12.2,12.2-12.2 c6.7,0,12.2,5.5,12.2,12.2L247.6,415.3z M435.9,536c0,0-1.2,1.5-2.5,1.5h-272c-1.1,0.2-2.2-0.5-2.7-1.5c-0.5-0.9-0.5-2.1,0-3 l7.9-18c0.6-1.1,1.7-1.8,3-1.8h256.4c1.3,0,2.4,0.7,3,1.8l7.9,18.3c0,1-0.4,2-1,2.8L435.9,536z" />
                        </g>
                    </svg>

                    <strong>{!! getText('representation') !!}</strong>
                    <p>
                        <small class="text-muted">{!! getText('in_front_of_offices') !!}</small>
                    </p>
                </div>
                <div class="col-md-2 col-6" data-aos="zoom-in">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 595.3 841.9"
                        style="enable-background:new 0 0 595.3 841.9;" xml:space="preserve">
                        <circle fill="#D99C5C" cx="297.6" cy="420.9" r="297.6" />
                        <path fill="#FFFFFF"
                            d="M382.9,274.8H212.4c-16.8,0.1-30.3,13.6-30.4,30.4v231.4c0.1,16.8,13.6,30.3,30.4,30.4h93.5 c8.1,0.1,15.9-3,21.6-8.8l77-77c5.6-5.8,8.8-13.5,8.8-21.6V305.3C413.2,288.6,399.6,275,382.9,274.8L382.9,274.8z M396,472.5l-77,77 c-0.9,1-1.9,1.8-3,2.5v-64.1c0-10.1,8.2-18.2,18.3-18.3h64.2c-0.7,1.1-1.5,2.2-2.5,3L396,472.5z M401.1,457.3h-67 c-16.8,0.1-30.3,13.6-30.4,30.4v67h-91.4c-10.1,0-18.2-8.2-18.3-18.3V305.3c0-10.1,8.2-18.2,18.3-18.3h170.5 c10.1,0,18.2,8.2,18.3,18.3V457.3z" />
                        <path fill="#FFFFFF"
                            d="M233.7,347.9h106.5c3.4,0.4,6.4-2,6.8-5.4c0.4-3.4-2-6.4-5.4-6.8c-0.5-0.1-0.9-0.1-1.4,0H233.7 c-3.4,0.4-5.8,3.4-5.4,6.8C228.7,345.4,230.9,347.6,233.7,347.9z" />
                        <path fill="#FFFFFF"
                            d="M233.7,384.4h42.6c3.4,0.4,6.4-2,6.8-5.4s-2-6.4-5.4-6.8c-0.5-0.1-0.9-0.1-1.4,0h-42.6 c-3.4,0.4-5.8,3.4-5.4,6.8C228.7,381.9,230.9,384.1,233.7,384.4z" />
                        <path fill="#FFFFFF"
                            d="M303.7,372.2c-3.4,0.4-5.8,3.4-5.4,6.8c0.3,2.8,2.6,5.1,5.4,5.4h9.1c3.4-0.4,5.8-3.4,5.4-6.8 c-0.3-2.8-2.6-5.1-5.4-5.4L303.7,372.2z" />
                        <path fill="#FFFFFF"
                            d="M258.1,445.3h-24.4c-3.4,0.4-5.8,3.4-5.4,6.8c0.3,2.8,2.6,5.1,5.4,5.4h24.4c3.4-0.4,5.8-3.4,5.4-6.8 C263.2,447.9,260.9,445.6,258.1,445.3z" />
                        <path fill="#FFFFFF"
                            d="M349.2,409H233.7c-3.4,0.4-5.8,3.4-5.4,6.8c0.3,2.8,2.6,5.1,5.4,5.4h115.5c3.4-0.4,5.8-3.4,5.4-6.8 C354.3,411.6,352.1,409.4,349.2,409z" />
                    </svg>

                    <strong>{!! getText('collection_of_documents') !!}</strong>
                    <p>
                        <small class="text-muted">{!! getText('from_customer') !!}</small>
                    </p>
                </div>
                <div class="col-md-2 col-6" data-aos="zoom-in">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 595.3 841.9"
                        style="enable-background:new 0 0 595.3 841.9;" xml:space="preserve">
                        <circle fill="#D99C5C" cx="297.6" cy="420.9" r="297.6" />
                        <g style="clip-path:url(#SVGID_00000132062678684344070400000012162110183219436685_);">
                            <path fill="#FFFFFF"
                                d="M418.8,331.3h-57.5c14.6-15.3,14-39.6-1.4-54.2c-15.3-14.6-39.6-14-54.2,1.4l0,0 c-6.4,6.8-11.4,14.7-14.7,23.3c-3.3-8.7-8.3-16.6-14.7-23.3c-7.2-7.3-17-11.3-27.2-11.2c-21.1-0.1-38.3,17-38.4,38.1 c0,9.6,3.5,18.8,9.9,25.9h-44.9c-17.5,0-31.7,14.2-31.7,31.7v25.6c0.1,8.1,5.2,15.4,12.8,18.3v135.5c0,18.3,18.6,31.7,35.2,31.7 h214.3c17.5,0,31.7-14.2,31.7-31.7V407.1c7.7-2.8,12.8-10.1,12.8-18.3v-25.6c0-17.5-14.2-31.7-31.7-31.7L418.8,331.3z M314.9,287.4c10-10,26.2-10,36.2,0c10,10,10,26.2,0,36.2c-2.7,2.5-5.6,4.8-8.7,6.7c-0.6,0.3-1.1,0.8-1.6,1.3h-43.6 c0.6-1,0.9-2,1-3.2C299,313.3,304.9,298.9,314.9,287.4L314.9,287.4z M231.4,287.4c9.9-9.8,25.9-9.8,35.9,0 c9.9,11.2,15.7,25.4,16.7,40.3c0,1.1,0.3,2.2,1,3.2h-43.3c-0.7-0.3-1.4-0.7-1.9-1.3c-3-1.6-5.7-3.8-7.9-6.4 c-9.9-10-9.9-26.2,0-36.2L231.4,287.4z M284.5,562h-92.8c-10.2,0-22.4-8.7-22.4-19.2V408h115.2L284.5,562z M438,388.8 c0,3.1-2.1,5.7-5.1,6.4l0,0h-1c-3.6,0-6.4,2.9-6.4,6.4c0,0,0,0,0,0v141.1c0,10.6-8.6,19.2-19.2,19.2H297.2V408h64 c3.5-0.4,6.1-3.6,5.7-7.1c-0.3-3-2.7-5.3-5.7-5.7h-64v-28.8c0.4-3.5-2.1-6.7-5.7-7.1c-3.5-0.4-6.7,2.1-7.1,5.7 c-0.1,0.5-0.1,1,0,1.4v28.8H162.9c-3.6,0-6.4-2.9-6.4-6.4l0,0v-25.6c0-10.6,8.6-19.2,19.2-19.2h243.2c10.6,0,19.2,8.6,19.2,19.2 L438,388.8z" />
                        </g>
                        <path fill="#FFFFFF"
                            d="M399.7,395.2h-9.6c-3.5,0.4-6.1,3.6-5.7,7.1c0.3,3,2.7,5.3,5.7,5.7h9.6c3.5-0.4,6.1-3.6,5.7-7.1 C405.1,397.9,402.7,395.6,399.7,395.2z" />
                    </svg>

                    <strong>{!! getText('program') !!}</strong>
                    <p>
                        <small class="text-muted">{!! getText('lemon_benefit') !!}</small>
                    </p>
                </div>
                <div class="col-md-2 col-6" data-aos="zoom-in">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 595.3 841.9"
                        style="enable-background:new 0 0 595.3 841.9;" xml:space="preserve">
                        <circle fill="#D99C5C" cx="297.6" cy="420.9" r="297.6" />
                        <g style="clip-path:url(#SVGID_00000173858751449513022760000002592897188534665394_);">
                            <path fill="#FFFFFF"
                                d="M401.6,418H381l1.9-18.3c0.5-3.5-1.9-6.7-5.3-7.2c-3.5-0.5-6.7,1.9-7.2,5.3c0,0.2-0.1,0.4-0.1,0.6L355.1,555 c-2.1,22.7-21.2,40.1-44,40.2h-84.8c-22.9,0.2-41.9-17.4-43.7-40.2l-14.4-149.7h129.1c3.5-0.4,6-3.5,5.6-7 c-0.3-2.9-2.7-5.3-5.6-5.6H164.3c-0.5-0.1-1.1-0.1-1.6,0c-0.7-0.2-1.5-0.2-2.2,0c-3.5,0.3-6.1,3.4-5.7,6.9c0,0,0,0,0,0.1 l14.8,156.6c2.7,29.2,27.3,51.5,56.7,51.2h84.8c29.4,0.1,54-22.3,56.7-51.6l1.3-14.8h32.5c20.9-0.1,37.9-17,37.9-37.9v-47.6 c-0.1-20.9-17-37.9-37.9-37.9V418z M401.6,529.1h-31.4l9.2-98.1h21.8c14,0,25.3,11.4,25.3,25.3V504l0,0c0,14-11.4,25.3-25.3,25.3 L401.6,529.1z" />
                        </g>
                        <path fill="#FFFFFF"
                            d="M315.9,399c0,3.5,2.8,6.3,6.3,6.3h9.5c3.5,0.4,6.6-2.1,7-5.6c0.4-3.5-2.1-6.6-5.6-7c-0.5-0.1-0.9-0.1-1.4,0 h-9.5C318.7,392.7,315.9,395.5,315.9,399L315.9,399z" />
                        <path fill="#FFFFFF"
                            d="M211.8,365.8c0.7,2.8,3.2,4.7,6,4.8c0.5,0.2,1.1,0.2,1.6,0c3.4-0.9,5.4-4.4,4.5-7.8c0-0.1,0-0.1,0-0.2l-7.1-25 c-3-10.7-1.5-22.2,4.1-31.7l2.5-4.1c4.7-7.7,7.2-16.6,7.3-25.6c0.4-3.5-2.1-6.6-5.6-7c-3.5-0.4-6.6,2.1-7,5.6 c-0.1,0.5-0.1,0.9,0,1.4c-0.1,6.8-2,13.4-5.4,19.3l-2.5,4.1c-7.6,12.7-9.5,27.9-5.4,42.1L211.8,365.8z" />
                        <path fill="#FFFFFF"
                            d="M259.3,365.8c0.7,2.8,3.2,4.7,6,4.8c0.5,0.2,1.1,0.2,1.6,0c3.4-0.9,5.4-4.4,4.5-7.8c0-0.1,0-0.1,0-0.2l-7.1-25 c-3-10.7-1.5-22.2,4.1-31.7l2.5-4.4c6.7-11.9,8.9-25.8,6-39.2l-5.7-23.1c-1.1-3.3-4.8-5.1-8.1-3.9c-2.8,1-4.6,3.8-4.2,6.8l5.7,22.8 c2.2,10.1,0.6,20.7-4.4,29.8l-2.5,4.1c-7.6,12.7-9.5,27.9-5.4,42.1L259.3,365.8z" />
                        <path fill="#FFFFFF"
                            d="M306.7,365.8c0.7,2.8,3.2,4.7,6,4.8c0.5,0.2,1.1,0.2,1.6,0c3.4-0.9,5.4-4.4,4.5-7.8c0-0.1,0-0.1,0-0.2l-7-25  c-3-10.7-1.5-22.2,4.1-31.7c1.9-2.9,1.1-6.8-1.8-8.7s-6.8-1.1-8.7,1.8c-0.1,0.2-0.2,0.4-0.3,0.6c-7.6,12.7-9.5,27.9-5.4,42.1 L306.7,365.8z" />
                    </svg>
                    <strong>{!! getText('the_best') !!}</strong>
                    <p>
                        <small class="text-muted">{!! getText('coffee') !!} :)</small>
                    </p>
                </div>
            </div>
            <div class="d-flex justify-content-center" data-aos="fade-up">
                <a href="{{ route('about_us') }}" class="btn-container text-uppercase">
                    <div class="p-3 btn-child-1 bg-primary-color">{!! getText('find_out_more') !!}</div>

                    <div class="p-3 btn-child-2 bg-secondary-color">{!! getText('get_to_know_us_better') !!}</div>
                </a>
            </div>
        </div>
    </section>
    {{-- SECOND SECTION ENDS HERE --}}
    {{-- THIRD SECTION STARTS HERE --}}
    <section class="bg-dark-white">
        <div class="accounting-office container">
            <div class="description text-center">
                <h1 class="display-2 mb-4" data-aos="fade-down">
                    <span class="fw-bold">{!! getText('more_than') !!}</span>

                    <span class="fw-light">{!! getText('an_accounting_office') !!}</span>
                </h1>
                <div data-aos="zoom-in">{!! getText('accounting_office_home_text_2') !!}</div>
            </div>
            <div class="row">
                <div class="col-md-6 tablet-img bg-dark-white" data-aos="fade-right"
                    style="background-image: url({{ getPageImage(6) }})">
                </div>
                <div class="col-md-6 py-5">
                    <h2 class="display-2 mb-4" data-aos="fade-down">
                        <span class="fw-bold">{!! getText('free') !!}</span>
                        <br />
                        <span class="fw-light">{!! getText('website') !!}!</span>
                    </h2>
                    <div data-aos="zoom-out">{!! getText('free_website_home_text') !!}</div>
                    <div class="text-end">
                        <a href="{{ route('free_website') }}" class="fw-bold">
                            {!! getText('read_more') !!}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- THIRD SECTION ENDS HERE --}}
    {{-- FOURTH SECTION STARTS HERE --}}
    <section class="pt-0">

        <div class="virtual-office" style="background-image: url({{ getPageImage(7) }})">
            <div class="container">
                <div class="col-md-5">
                    <div class="overlay">
                        <h2 class="display-2 mb-4" data-aos="fade-down">
                            <span class="fw-bold">{!! getText('virtual') !!}</span>
                            <br />
                            <span class="fw-light">{!! getText('office') !!}!</span>
                        </h2>
                        <div data-aos="zoom-in">{!! getText('virtual_office_home_text') !!}</div>
                        <div class="text-end">
                            <a href="{{ route('virtual_office') }}" class="fw-bold">
                                {!! getText('read_more') !!}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- FOURTH SECTION ENDS HERE --}}
    {{-- FIVTH SECTION STARTS HERE --}}
    <section>
        <div class="interesting container">
            <div class="row align-items-center">
                <div class="img-container col-md-6" data-aos="fade-right">
                    <img class="img-fluid" src="{{ getPageImage(8) }}" />
                </div>
                <div class="col-md-5 ms-auto">
                    <h2 class="display-2 mb-4" data-aos="fade-down">
                        {!! getText('interesting') !!} ?
                    </h2>
                    <div class="display-6 mb-4" data-aos="zoom-in">{!! getText('the_next_step_is_up_to_you') !!}</div>
                    <div class="d-flex justify-content-left" data-aos="fade-up">
                        <a href="{{ route('contact') }}" class="btn-container text-uppercase" style="min-width: 35%;">
                            <div class="p-3 btn-child-1 bg-primary-color">
                                <span class="fw-bold">{!! getText('write') !!}</span>
                                <span>{!! getText('to_us') !!}</span>
                            </div>

                            <div class="p-3 btn-child-2 bg-secondary-color">{!! getText('contact') !!}</div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- FIVTH SECTION ENDS HERE --}}
@endsection
