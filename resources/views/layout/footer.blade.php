<footer>
    <div class="container">
        <div class="header row text-center">
            <a class="logo col-md-6 text-md-start mb-2" href="{{ route('home') }}">
                <img src="{{ asset('assets/logo-white.svg') }}" />
            </a>
            <div class="col-md-6 text-md-end">
                <a href="{{ getSetting('facebook') }}" class="mx-2">
                    <svg width="3rem" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 595.3 841.9" style="enable-background:new 0 0 595.3 841.9;" xml:space="preserve">
                        <path fill="#FFFFFF" d="M595.3,420.9c0,164.4-133.3,297.6-297.6,297.6S0,585.3,0,420.9s133.3-297.6,297.6-297.6 S595.3,256.6,595.3,420.9z" />
                        <path fill="#D99C5C" d="M372,432.6h-52.7v194.7h-80.5V432.6h-38.2v-68.5h38.2v-44.6c0-31.7,14.9-81.3,81.3-81.3h59.5v66.4h-43.2 c-9-0.5-16.7,6.4-17.2,15.4c-0.1,1.1,0,2.1,0.1,3.2v40.3h59.5L372,432.6z" />
                    </svg>
                </a>
                <a href="{{ getSetting('google') }}" class="mx-2">
                    <svg width="3rem" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 595.3 841.9" style="enable-background:new 0 0 595.3 841.9;" xml:space="preserve">
                    <path fill="#FFFFFD" d="M595.3,420.9c0,164.4-133.3,297.6-297.6,297.6S0,585.3,0,420.9s133.3-297.6,297.6-297.6 S595.3,256.6,595.3,420.9z"/>
                    <path fill="#DC4E41" d="M104.2,434.2c-0.1,52.4,33.2,99,82.7,116.1c47.2,16.7,99.7,2.7,132.3-35.3c20.3-28.4,29.2-63.4,24.9-98.1  c-39.1,0-78.3,0-117.4,0c0,14,0,27.8,0,41.8c23.4,0,46.9,0,70.2,0.9c-5.2,20.9-20,38.2-39.9,46.4c-39.6,16.2-84.9-2.7-101.1-42.4 c-16.2-39.6,2.7-84.9,42.4-101.1c2.1-0.9,4.3-1.7,6.5-2.3c25.2-6.2,51.8-0.7,72.5,14.9c10.9-10.1,21.1-21.1,31.1-32.1 c-51.5-44.6-129.4-39.1-174,12.4C115.3,377.3,104.6,405.2,104.2,434.2z"/>
                    <path fill="#DC4E41" d="M419.7,381.5c0,11.8,0,23.4,0,35.1h-35.1v35h35.1c0,11.6,0,23.4,0,35.1h35c0-11.8,0-23.4,0-35.1h35v-34.8h-35 c0-11.6,0-23.4,0-35L419.7,381.5z"/>
                    <path fill="#D99C5C" d="M104.2,434.2c0.4-68.1,55.9-123.1,124.1-122.7c29.6,0.2,58.1,11,80.4,30.4c-10,11-20.2,21.9-31.1,32.1 c-20.7-15.7-47.4-21.1-72.6-14.9c-40.9,12.6-63.9,56-51.2,96.9s56,63.9,96.9,51.2c2.2-0.7,4.4-1.5,6.5-2.3 c19.9-8.3,34.7-25.5,39.9-46.4c-23.5,0-46.9,0-70.2-0.9c0-14,0-27.8,0-41.8c39.1,0,78.3,0,117.4,0c4.4,34.7-4.5,69.8-24.9,98.2 c-32.6,38-85.1,52-132.3,35.3C137.8,532.5,104.5,486.3,104.2,434.2z"/>
                    <path fill="#D99C5C" d="M419.7,381.5h34.8c0,11.8,0,23.4,0,35.1h35v35h-34.7c0,11.8,0,23.4,0,35.1h-35.1c0-11.8,0-23.4,0-35h-35.1v-35 h35.1c0-11.6,0-23.4,0-35.1V381.5z"/>
                    </svg>
                </a>
                <a href="{{ getSetting('trojmiasto') }}" class="mx-2">
                    <svg width="3rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" preserveAspectRatio="xMidYMid">
                        <path d="M40,20A20,20,0,1,1,20,0,20,20,0,0,1,40,20Zm0,0" fill="#FFFF"/>
                        <path d="M15.64,18.6C13.54,15.86,10.07,14.81,5.53,17a.33.33,0,0,1-.37-.54c2.5-2.41,4.62-3.14,6.48-3.07,5,.13,7.88,6.67,10.65,6.1,3.54-.74,8.24,0,10.88,5.95a.33.33,0,0,1-.56.34c-4-5-7.42-4.11-12.42-1.65a.33.33,0,0,1-.41-.09L15.64,18.6Z" fill="#D99C5C"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="links row mt-4">
            {{-- col #1 --}}
            <div class="col-md-3 mb-4">
                <h6 class="text-uppercase">{!! getText('faq') !!}</h6>
                <a href="{{ route('privacy_policy') }}">{!! getText('privacy_policy') !!}</a>
                <div class="mt-4 copyright-text">
                    <p class="mb-2">Copyright © 2022 by {{ getSetting('app_name') }}, all rights reserved.</p>
                    {!! getText('copyright_text') !!}
                </div>
            </div>
            {{-- col #2 --}}
            <div class="col-md-3 mb-4">
                <h6>{!! getText('offer') !!}</h6>
                <a href="{{ route('full_accountancy') }}">{!! getText('full_accountancy') !!}</a>
                <br />
                <a href="{{ route('ledger') }}">{!! getText('ledger') !!}</a>
                <br />
                <a href="{{ route('registerd_lump_sum') }}">{!! getText('registerd_lump_sum') !!}</a>
                <br />
                <a href="{{ route('hr_and_payroll') }}">{!! getText('hr_and_payroll') !!}</a>
                <br />
                <a href="{{ route('establishment_of_the_company') }}">{!! getText('establishment_of_the_company') !!}</a>
                <br />
                <a href="{{ route('establishment_of_the_company') }}">{!! getText('company_formation') !!}</a>
                <br />
                <a href="{{ route('tax_consultancy') }}">{!! getText('tax_consultancy') !!}</a>
            </div>
            {{-- col #3 --}}
            <div class="col-md-3 mb-4">
                <h6>{!! getText('additional_services') !!}</h6>
                <a href="{{ route('virtual_office') }}">
                    {!! getText('virtual') !!} {!! getText('office') !!} {!! getText('gdańsk') !!}
                </a>
                <br />
                <a href="{{ route('free_website') }}">{!! getText('free') !!} {!! getText('website') !!}</a>
            </div>
            {{-- col #4 --}}
            <div class="col-md-3 mb-4 contact">
                <h6>
                    <a href="{{ route('contact') }}"> {!! getText('contact') !!}</a>
                </h6>
                <a href="{{ route('contact') }}">{!! getText('accounting_office_gdańsk_morena') !!}</a>

                <div class="text-end">
                    <a href="tel:{{ str_replace(' ', '', getSetting('tel')) }}" class="fs-5">{{ getSetting('tel') }}</a>
                    <a href="mailto:{{ str_replace(' ', '', getSetting('mail')) }}" class="fs-5">{{ getSetting('mail') }}</a>
                </div>
            </div>
        </div>
    </div>
</footer>
