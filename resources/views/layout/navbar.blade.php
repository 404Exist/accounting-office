<nav class="navbar navbar-expand-lg position-absolute start-0 end-0 top-0 z-2 text-capitalize user-select-none"
    data-bs-theme="{{ $theme }}">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            @if ($theme == 'dark')
                <img src="{{ getPageImage(2, 'global') }}" />
            @else
                <img src="{{ getPageImage(3, 'global') }}" />
            @endif
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarScroll" data-aos="fade-in">
            <ul class="navbar-nav my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link fs-6 mx-3 active" href="{{ route('about_us') }}">{!! getKeyText('the_nas') !!}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-6 mx-3 active">{!! getKeyText('offer') !!}</a>
                    <div class="dropdown">
                        <div>
                            <a href="{{ route('full_accountancy') }}">{!! getKeyText('full_accountancy') !!}</a>
                        </div>
                        <div>
                            <a href="{{ route('ledger') }}">{!! getKeyText('ledger') !!}</a>
                        </div>
                        <div>
                            <a href="{{ route('registerd_lump_sum') }}">{!! getKeyText('registerd_lump_sum') !!}</a>
                        </div>
                        <div>
                            <a href="{{ route('hr_and_payroll') }}">{!! getKeyText('hr_and_payroll') !!}</a>
                        </div>
                        <div>
                            <a href="{{ route('tax_consultancy') }}">{!! getKeyText('tax_consultancy') !!}</a>
                        </div>
                        <div>
                            <a href="{{ route('establishment_of_the_company') }}">{!! getKeyText('establishment_of_the_company') !!}</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-6 mx-3 active">{!! getKeyText('additional_services') !!}</a>
                    <div class="dropdown">
                        <div>
                            <a href="{{ route('virtual_office') }}">{!! getKeyText('virtual') !!}
                                {!! getKeyText('office') !!}</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-6 mx-3 active" href="{{ route('team') }}">{!! getKeyText('team') !!}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-6 mx-3 active" href="{{ route('contact') }}">{!! getKeyText('contact') !!}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-6 mx-3 active">{{ LaravelLocalization::getCurrentLocaleNative() }}</a>
                    <div class="dropdown" style="width: 100px">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <div>
                                <a rel="alternate" hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </div>
                        @endforeach
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
