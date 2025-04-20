<div class="container-fluid fixed_nav d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col">
                {!! menu('menu') !!}
            </div>
        </div>
    </div>
</div>
<header>
    <div class="container-fluid">
        <div class="container">
            <div class="row align-items-center pt-2 pb-2">
                <div class="col-2 col-md-5 order-2 order-md-1 be-header">
                    @if (session()->get('locale') === 'ru')
                        <div class="dropdown lang">
                            <button id="lang" data-bs-toggle="dropdown">
                                Eng <picture><img src="/img/down.svg" alt=""></picture>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="lang">
                                <li>Rus</li>
                                <li><a href="/locale/en">Eng</a></li>
                            </ul>
                        </div>
                    @else
                        <div class="dropdown lang">
                            <button id="lang" data-bs-toggle="dropdown">
                                Rus <picture><img src="/img/down.svg" alt=""></picture>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="lang">
                                <li><a href="/locale/ru">Rus</a></li>
                                <li>Eng</li>
                            </ul>
                        </div>
                    @endif
                    <a href="{{ setting('site.inst') }}" class="inst d-none d-lg-inline-block">
                        <picture>
                            <img src="/img/inst.svg" alt="">
                        </picture>
                    </a>
                        <a class="be-certificates-link desktop" href="/booking-certificates">@lang('pages.booking-certificates')</a>
                </div>
                <div class="col-3 col-md-2 text-md-center order-1 order-md-2">
                    <a href="/">
                        <picture>
                            <img src="{{ \Storage::disk('public')->url(setting('site.logo')) }}" alt="">
                        </picture>
                    </a>
                </div>
                <div class="col-7 col-md-5 h_3 text-end order-3">
                    <div class="phone">
                        <div>
                            <picture>
                                <img src="/img/phone.svg" alt="">
                            </picture>
                        </div>
                        <div>
                            <a href="tel:+{{ preg_replace("/[^,.0-9]/", '', setting('site.phone-head')) }}">{{ setting('site.phone-head') }}</a>
                        </div>
                    </div>
                    <div>
                        <button class="d-none d-lg-block" onclick="window.location.href = '/bronirovanie';">@lang('pages.booking')</button>
                        <picture class="d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#menu">
                            <img src="/img/menu.svg" alt="">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="row d-none d-lg-block">
                <div class="col">
                    {!! menu('menu') !!}
                </div>
            </div>
        </div>
    </div>
</header>