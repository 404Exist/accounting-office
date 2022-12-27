<nav class="navbar navbar-expand-lg position-absolute start-0 end-0 top-0 z-2 text-capitalize user-select-none" data-bs-theme="{{ $theme }}">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            @if ($theme == "dark")
            <img src="{{ asset('assets/logo-white.svg') }}" />
            @else
            <img src="{{ asset('assets/logo-black.svg') }}" />
            @endif
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarScroll" data-aos="fade-in">
            <ul class="navbar-nav my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link fs-6 mx-3 active" href="{{ route('about_us') }}">{!! getText('the_nas') !!}</a>
                    <div class="dropdown">
                        <div>
                            <a href="{{ route('find_out_more') }}">{!! getText('accounting_benefits') !!}</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-6 mx-3 active" href="{{ route('offer') }}">{!! getText('offer') !!}</a>
                    <div class="dropdown">
                        <div>
                            <a href="{{ route('full_accountancy') }}">{!! getText('full_accountancy') !!}</a>
                        </div>
                        <div>
                            <a href="{{ route('kpir_accounting') }}">{!! getText('kpir_accounting') !!}</a>
                        </div>
                        <div>
                            <a href="{{ route('lump_sum_accounting') }}">{!! getText('lump_sum_accounting') !!}</a>
                        </div>
                        <div>
                            <a href="{{ route('managing_hR_and_payroll') }}">{!! getText('managing_hR_and_payroll') !!}</a>
                        </div>
                        <div>
                            <a href="{{ route('tax_consultancy') }}">{!! getText('tax_consultancy') !!}</a>
                        </div>
                        <div>
                            <a href="{{ route('establishment_of_the_company') }}">{!! getText('establishment_of_the_company') !!}</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-6 mx-3 active">{!! getText('additional_services') !!}</a>
                    <div class="dropdown">
                        <div>
                            <a href="{{ route('virtual_office') }}">{!! getText('virtual') !!} {!! getText('office') !!}</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-6 mx-3 active" href="{{ route('team') }}">{!! getText('team') !!}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-6 mx-3 active" href="{{ route('contact') }}">{!! getText('contact') !!}</a>
                </li>
                <li class="nav-item d-block d-md-none">
                    <a class="nav-link fs-6 mx-3 active" href="{{ route('user_zone') }}">{!! getText('user_zone') !!}</a>
                </li>
                <li class="nav-item btn-container d-none d-md-block" data-aos="fade-up" data-aos-anchor-placement="top-center">
                    <a class="nav-link fs-6 mx-3 active btn-child-1 bg-secondary-color" href="{{ route('user_zone') }}">
                        {!! getText('user_zone') !!}
                    </a>

                    <a class="nav-link fs-6 mx-3 active btn-child-2 bg-primary-color" href="{{ route('user_zone') }}">
                        {!! getText('user_zone') !!}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
