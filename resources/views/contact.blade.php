@extends('layout.app', ['title' => getText('contact')])

@section('content')
    <div style="height: 10vw"></div>
    <section>
        <div style="height: 60vh">
            <img class="h-100 w-100" src="{{ getPageImage(1) }}" />
        </div>
    </section>
    <section>
        <div class="container">
            <div class="mb-4 row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <h2 class="text-ucfirst display-3 mb-5 fw-bold" data-aos="fade-down">{!! getText('write') !!}
                        {!! getText('to_us') !!} !</h2>
                </div>
            </div>

            <form action="{{ route('contact') }}#contact_us" method="POST" id="contact_us">
                @csrf
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session()->get('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="mb-5 row">
                    <label for="name" class="col-sm-4 col-form-label text-ucfirst">{!! getText('your_name_and_surname_and_the_name_of_the_company') !!}</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('name')is-invalid @enderror" id="name"
                            name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-5 row">
                    <label for="phone" class="col-sm-4 col-form-label text-ucfirst">{!! getText('phone_number') !!}</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('phone')is-invalid @enderror" id="phone"
                            name="phone" value="{{ old('phone') }}">
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-5 row">
                    <label for="email" class="col-sm-4 col-form-label text-ucfirst">{!! getText('email_address') !!}</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('email')is-invalid @enderror" id="email"
                            name="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-5 row">
                    <label for="subject" class="col-sm-4 col-form-label text-ucfirst">{!! getText('we_will_talk_about') !!}:</label>
                    <div class="col-sm-8">
                        <select class="form-control text-capitalize @error('subject')is-invalid @enderror" name="subject"
                            id="subject">
                            <option value="">{!! getText('choose') !!}</option>
                            <option @selected(old('subject') == 'Usługach księgowych') value="Usługach księgowych">{!! getText('accounting_services') !!}
                            </option>
                            <option @selected(old('subject') == 'Doradztwie podatkowym') value="Doradztwie podatkowym">{!! getText('tax_consultancy') !!}
                            </option>
                            <option @selected(old('subject') == 'Pomocy w założeniu firmy') value="Pomocy w założeniu firmy">{!! getText('help_in_setting_up_a_business') !!}
                            </option>
                            <option @selected(old('subject') == 'Usłudze Wirtualnego Biura') value="Usłudze Wirtualnego Biura">{!! getText('virtual') !!}
                                {!! getText('office') !!}</option>
                            <option @selected(old('subject') == 'Rozliczeniu PIT') value="Rozliczeniu PIT">{!! getText('pit_settlement') !!}</option>
                            <option @selected(old('subject') == 'Współpracy') value="Współpracy">{!! getText('team_work') !!}</option>
                            <option @selected(old('subject') == 'Reklamacji') value="Reklamacji">{!! getText('complaints') !!}</option>
                            <option @selected(old('subject') == 'Innej sprawie') value="Innej sprawie">{!! getText('another_matter') !!}</option>
                        </select>
                        @error('subject')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-5 row">
                    <label for="message" class="col-sm-4 col-form-label text-ucfirst">{!! getText('a_few_more_words_from_you') !!}</label>
                    <div class="col-sm-8">
                        <textarea class="form-control @error('message')is-invalid @enderror" id="message" name="message"
                            style="min-height: 150px;">{{ old('message') }}</textarea>
                        @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-5 row" data-aos="fade-up">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-8 d-flex">
                        <button class="btn-container text-uppercase btn w-25" type="submit">
                            <div class="p-3 btn-child-1 bg-primary-color">{!! getText('send') !!}</div>

                            <div class="p-3 btn-child-2 bg-secondary-color">{!! getText('send') !!}</div>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section>
        <div class="accounting-office features container-fluid">
            {{-- <div class="description text-center container">
            <h1 class="display-2 mb-4" data-aos="fade-down">{!! getText('contact_us') !!} !</h1>
            <hr class="opacity-100 my-4 mx-auto w-25" />

            <div class="row justify-content-center mt-5" data-aos="zoom-in">
                <div class="col-md-3" data-aos="zoom-in">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 595.3 841.9" style="enable-background:new 0 0 595.3 841.9;" xml:space="preserve">
                        <g>
                            <circle fill="#D99C5C" cx="297.6" cy="420.9" r="297.6"/>
                            <path fill="#FFFFFF" d="M297.6,32.51a15.48,15.48,0,1,0-31,0v0A6.57,6.57,0,0,0,15.83,39v.77a6.57,6.57,0,0,0,6.58,6.58h.35l2.75,4.37a10.35,10.35,0,0,0,8.86,4.91h.54a3.1,3.1,0,1,0,0-1.55h-.54a8.83,8.83,0,0,1-7.55-4.22L24.58,46.4h.54a1.55,1.55,0,0,0,1.55-1.55V34a1.55,1.55,0,0,0-1.55-1.55H23.57a13.93,13.93,0,0,1,27.86,0H49.88A1.55,1.55,0,0,0,48.33,34V44.85a1.55,1.55,0,0,0,1.55,1.55h2.71a6.57,6.57,0,0,0,6.58-6.58V39A6.57,6.57,0,0,0,53,32.51ZM37.89,53.37a1.55,1.55,0,1,1-1.55,1.55,1.55,1.55,0,0,1,1.55-1.55ZM25.12,34V44.85H22.41a5,5,0,0,1-5-5V39a5,5,0,0,1,5-5Zm32.5,5.8a5,5,0,0,1-5,5H49.88V34h2.71a5,5,0,0,1,5,5Zm0,0"/>
                            <path fill="#FFFFFF" d="M297.6,22.83l-.31-.19-.31-.19a.73.73,0,0,0-1,.27.76.76,0,0,0,.27,1l.31.19a1.6,1.6,0,0,0,.35.19.75.75,0,0,0,.39.12.72.72,0,0,0,.66-.39.78.78,0,0,0-.31-1Zm0,0"/>
                            <path fill="#FFFFFF" d="M297.6,20.86A11.21,11.21,0,0,0,29,24.77a.78.78,0,0,0,.08,1.08.82.82,0,0,0,.5.19.7.7,0,0,0,.58-.27,9.76,9.76,0,0,1,7.35-3.37,9.62,9.62,0,0,1,2.09.23.82.82,0,0,0,.93-.58.81.81,0,0,0-.58-.93,10.48,10.48,0,0,0-2.44-.27Zm0,0"/>
                        </g>
                    </svg>

                    <strong class="text-capitalize">{!! getText('telephone') !!}</strong>
                    <p>
                        <a href="tel:{{ str_replace(' ', '', getSetting('tel')) }}" class="fs-5">{{ getSetting('tel') }}</a>
                    </p>
                </div>
                <div class="col-md-3" data-aos="zoom-in">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 595.3 841.9" style="enable-background:new 0 0 595.3 841.9;" xml:space="preserve">
                        <circle fill="#D99C5C" cx="297.6" cy="420.9" r="297.6"/>
                        <g style="clip-path:url(#SVGID_00000106850097585117485720000007717143557498070165_);">
                            <path fill="#FFFFFF" d="M478.4,526h-46.4v-46.1c0-3.4-2.8-6.2-6.2-6.2s-6.2,2.8-6.2,6.2V526H373c-3.4,0-6.2,2.8-6.2,6.2 s2.8,6.2,6.2,6.2h46.4v46.7c0,3.4,2.8,6.2,6.2,6.2c3.4,0,6.2-2.8,6.2-6.2v-46.8h46.4c3.4,0,6.2-2.8,6.2-6.2S481.7,526,478.4,526 L478.4,526z"/>
                            <path fill="#FEFEFE" d="M370.6,430.5c9.1,2.6,17.6,7.1,24.8,13.3c2.6,2.1,6.5,1.7,8.6-1c2-2.5,1.7-6.2-0.7-8.3 c-8.7-7.6-19-13-30.1-15.9l-3.7-1c-5.8-1.4-11.9,0.5-15.9,4.9c-13.7,15.9-31,16.7-49.3,16.7s-35.3-1.3-49-16.7 c-3.9-4.5-10.1-6.4-15.9-4.9l-3.7,1c-25.7,7-45.8,26.8-53.2,52.4l-5.2,17.9h-52.4c-0.8,0-1.6-0.3-2.1-1c-0.6-0.7-0.8-1.6-0.6-2.5 l10.2-36.3c8.7-28.8,27-38.1,59.8-45.9c0.6,0,1,0,1.6-0.6c2.1,1.5,4.7,3.1,6.8,4.4c0.8,0.5,1.8,0.7,2.8,0.6 c2.3-0.1,4.4-1.4,5.6-3.4c1.4-3,0.3-6.6-2.5-8.3c-18.3-9.3-31.7-36.3-31.7-63.5c-0.1-24.9,20-45.2,44.9-45.2c0.1,0,0.2,0,0.3,0 c7.3,0.1,14.5,1.8,21,5.2c-3.8,8.9-5.8,18.5-5.9,28.2c0,52.9,31.7,97.6,70,97.6s70-45.6,70-97.6c0-38.7-31.4-70.1-70.1-70.1 c-23.3,0-45.1,11.6-58.2,31l0,0c-28.2-14.7-63-3.8-77.7,24.4c-4.3,8.2-6.5,17.4-6.5,26.7c-0.2,21.9,7.1,43.3,20.8,60.4 c-28.2,7.1-51.7,17.7-62.5,53l-10.4,36c-2.1,8.2,2.9,16.6,11.1,18.7c1.1,0.3,2.3,0.4,3.4,0.5h48.3l-4.4,14.5 c-1.6,5.2-0.6,10.9,2.8,15.2c3.4,4.4,8.7,7.1,14.3,7.1h131.6c3.4,0,6.2-2.8,6.2-6.2s-2.8-6.2-6.2-6.2H186c-2.8,0-5-2.3-4.9-5.1 c0-0.5,0.1-1,0.2-1.4l13-45.2c6.3-21.4,23.3-38,44.9-43.7l3.7-1c1.3-0.2,2.6,0.3,3.4,1.3c17.1,19.5,38.1,21,58.6,21 c20.5,0,41.5-1.6,58.6-21l0,0c0.8-0.8,2-1.1,3.1-1L370.6,430.5z M305.2,262.9c25.1,0.1,47.2,16.3,54.8,40.2 c-11.1,2.2-22.5-2.3-29.1-11.4c-1.9-2.7-5.7-3.4-8.4-1.5c-0.1,0.1-0.2,0.1-0.2,0.2c-1.1,0.7-1.8,1.8-2.1,3.1c0,0,0,0.6-0.6,1 c-8.7,17.6-37.8,25.1-71.4,18.6c3.8-28.6,28.1-50,57-50.2H305.2z M271.4,327.7c24.8,0,45.2-7.9,55.6-22.3 c7.6,6.8,17.4,10.5,27.5,10.6c2.7,0,5.3-0.3,7.9-1c0.2,1.7,0.2,3.5,0,5.2c0,45.6-27,85.5-57.6,85.5c-29.4,0-55.6-36.9-57.6-80.2 c7.9,1.4,15.8,2.2,23.8,2.1L271.4,327.7z"/>
                        </g>
                    </svg>
                    <strong class="text-capitalize">{!! getText('mail') !!}</strong>
                    <p>
                        <a href="mailto:{{ str_replace(' ', '', getSetting('mail')) }}" class="fs-5">{{ getSetting('mail') }}</a>
                    </p>
                </div>
                <div class="col-md-3" data-aos="zoom-in">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 595.3 841.9" style="enable-background:new 0 0 595.3 841.9;" xml:space="preserve">
                        <circle fill="#D99C5C" cx="297.6" cy="420.9" r="297.6"/>
                        <path fill="#FFFFFF" d="M420.7,381.3c0-67.9-55.1-123-123-123s-123,55.1-123,123l0,0c-27.3,1.7-48.7,24.2-49,51.5v6.1 c0,28.8,23.3,52.2,52.1,52.2c0.1,0,0.1,0,0.2,0h2.8l21.8,34.7c15,24.4,41.7,39.1,70.3,39h4.3c3.4,13.2,16.8,21.1,30,17.7 c13.2-3.4,21.1-16.8,17.7-30c-3.4-13.2-16.8-21.1-30-17.7c-8.7,2.2-15.4,9-17.7,17.7h-4.3c-24.4,0.1-47.2-12.6-59.9-33.5l-17.8-27.5 h4.3c6.8,0,12.3-5.5,12.3-12.3v-86.1c0-6.8-5.5-12.3-12.3-12.3h-12.3c0-61.1,49.5-110.6,110.6-110.6s110.6,49.5,110.6,110.6h-12.3 c-6.8,0-12.3,5.5-12.3,12.3v86.1c0,6.8,5.5,12.3,12.3,12.3h21.5c28.8,0,52.2-23.3,52.2-52.1c0-0.1,0-0.1,0-0.2v-6.5 C469.4,405.5,448,383,420.7,381.3z M300.7,546.9c6.8,0,12.3,5.5,12.3,12.3c0,6.8-5.5,12.3-12.3,12.3s-12.3-5.5-12.3-12.3l0,0 C288.4,552.4,293.9,546.9,300.7,546.9z M199.4,393.2v86.1h-21.5c-21.9,0-39.7-17.8-39.7-39.7v-6.7c0-21.9,17.8-39.7,39.7-39.7H199.4 z M457.3,439.2c0,21.9-17.8,39.7-39.7,39.7h-21.7v-85.7h21.5c21.9,0,39.7,17.8,39.7,39.7L457.3,439.2z"/>
                        <path fill="#FFFFFF" d="M348.6,304.5l-2.5-1.5l-2.5-1.5c-2.8-1.6-6.3-0.7-7.9,2.1c0,0,0,0,0,0c-1.5,2.8-0.5,6.3,2.1,7.9l2.5,1.5 c0.9,0.6,1.8,1.1,2.8,1.5c0.9,0.6,2,0.9,3.1,1c2.2,0.1,4.2-1.1,5.2-3.1c1.3-2.9,0.3-6.3-2.5-7.9L348.6,304.5z"/>
                        <path fill="#FFFFFF" d="M297.6,288.9c-25.9,0-50.6,11.4-67.5,31c-2.1,2.6-1.8,6.4,0.6,8.6c1.1,0.9,2.5,1.5,4,1.5 c1.8,0.1,3.5-0.7,4.6-2.1c14.7-16.9,35.9-26.7,58.3-26.7c5.6,0,11.1,0.6,16.6,1.8c3.3,0.6,6.5-1.4,7.4-4.6c0.6-3.3-1.4-6.5-4.6-7.4 C310.7,289.5,304.2,288.7,297.6,288.9L297.6,288.9z"/>
                    </svg>
                    <strong class="text-capitalize">{!! getText('contact') !!}</strong>
                    <p>
                        <a href="#" class="fs-5">{!! getText('write') !!} {!! getText('to_us') !!}!</a>
                    </p>
                </div>
            </div>
        </div> --}}
            <div class="row bg-dark-white">
                <div class="col-md-6 mt-5 p-5" data-aos="zoom-in">
                    <div class="row">
                        <div class="col-6">
                            <h5 class="text-capitalize fw-bold">{{ getSetting('app_name') }}</h5>
                            <p>{!! getText('main_customer_service_office') !!}</p>
                            <p>{{ getSetting('customer_service') }}</p>
                        </div>
                        <div class="col-6">
                            <h6 class="text-capitalize fw-bold">{!! getText('address') !!}</h6>
                            <p>{{ getSetting('address') }}</p>
                            <h6 class="text-capitalize fw-bold">{!! getText('mail') !!}</h6>
                            <p>{{ getSetting('mail') }}</p>
                            <h6 class="text-capitalize fw-bold">{!! getText('telephone') !!}</h6>
                            <p>{{ getSetting('tel') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-right">
                    <iframe class="w-100 h-100" title="Location" src="{{ getSetting('google_map_embed_link') }}"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
