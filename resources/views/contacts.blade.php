@extends('partials.layout')

@section('title')
    {{ $page->title }}
@endsection

@section('keywords')
    {{ $page->keywords }}
@endsection

@section('description')
    {{ $page->description }}
@endsection

@section('content')
<main>
    <div class="container-fluid inner_header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div>
                        <h1>{{ $page->title }}</h1>
                        <p>{{ $page->subtitle }}</p>
                    </div>
                    <picture>
                        <source srcset="{{ $page->webpImage }}" type="image/webp">
                        <source srcset="{{ \Voyager::image($page->image) }}" type="image/pjpeg">
                        <img src="{{ \Voyager::image($page->image) }}" alt="">
                    </picture>
                </div>
            </div>
        </div>
        <div class="search_form d-none d-lg-block" id="be-search-form"></div>
    </div>

    <div class="booking_form d-lg-none">
        <div id="be-search-form-2"></div>
    </div>

    <div class="container mt-5 about_block">
        <div class="row">
            <div class="col-lg-4">
                <div class="contacts">
                    <b>@lang('pages.office')</b>
                    <hr>

                    <div class="cont_block">
                        <div class="cont_block_zag">
                            <div>
                                <picture><img src="/img/location2.svg" alt=""></picture>
                            </div>
                            <div>@lang('pages.office'):</div>
                        </div>
                        <p>
                            {{ session()->get('locale') === 'ru' ? setting('site.location-booking') : setting('site.location-booking-en') }}
                        </p>
                    </div>

                    <div class="cont_block">
                        <div class="cont_block_zag">
                            <div>
                                <picture><img src="/img/time2.svg" alt=""></picture>
                            </div>
                            <div>@lang('pages.shedule'):</div>
                        </div>
                        <p>
                            {{ session()->get('locale') === 'ru' ? setting('site.shedule-booking') : setting('site.shedule-booking-en') }}
                        </p>
                    </div>

                    <div class="cont_block">
                        <div class="cont_block_zag">
                            <div>
                                <picture><img src="/img/email2.svg" alt=""></picture>
                            </div>
                            <div>@lang('pages.email'):</div>
                        </div>
                        <p><a href="mailto:{{ setting('site.email-booking') }}">{{ setting('site.email-booking') }}</a></p>
                    </div>

                    <div class="cont_block">
                        <div class="cont_block_zag">
                            <div>
                                <picture><img src="/img/phone3.svg" alt=""></picture>
                            </div>
                            <div>@lang('pages.phone'):</div>
                        </div>
                        <p><a href="tel:+{{ preg_replace("/[^,.0-9]/", '', setting('site.phone-booking')) }}">{{ setting('site.phone-booking') }}</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="row s1">
                    <div class="col-12 mb-4 mt-4 mt-lg-0">
                        <div class="contacts">
                            <div class="row">
                                <div class="col-lg-5">
                                    <b>@lang('pages.hotel')</b>
                                    <hr>

                                    <div class="cont_block">
                                        <div class="cont_block_zag">
                                            <div>
                                                <picture><img src="/img/location2.svg" alt=""></picture>
                                            </div>
                                            <div>@lang('pages.location'):</div>
                                        </div>
                                        <p>
                                            {{ session()->get('locale') === 'ru' ? setting('site.location-hotel') : setting('site.location-hotel-en') }}
                                        </p>
                                    </div>

                                    <a href="https://yandex.kz/maps/?ll=82.688675%2C50.168917&mode=routes&rtext=49.955772%2C82.566076~50.391610%2C82.834250&rtt=auto&ruri=~ymapsbm1%3A%2F%2Forg%3Foid%3D115278185678&z=10" 
                                       class="more mt-4 mb-4 d-inline-block" 
                                       target="_blank">
                                        @lang('pages.build-route')
                                    </a>

                                    <div class="soc">
                                        <div><b>@lang('pages.soc'): </b></div>
                                        <div>
                                            <a href="{{ setting('site.inst') }}" target="_blank">
                                                <picture><img src="/img/inst3.svg" alt=""></picture>
                                            </a>
                                            <a href="{{ setting('site.fb') }}" target="_blank">
                                                <picture><img src="/img/fb2.svg" alt=""></picture>
                                            </a>
                                            <a href="{{ setting('site.you') }}" target="_blank">
                                                <picture><img src="/img/you2.svg" alt=""></picture>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 offset-lg-1">
                                    <div class="cont_block">
                                        <div class="cont_block_zag">
                                            <div>
                                                <picture><img src="/img/time2.svg" alt=""></picture>
                                            </div>
                                            <div>@lang('pages.shedule'):</div>
                                        </div>
                                        <p>
                                            {{ session()->get('locale') === 'ru' ? setting('site.shedule-hotel') : setting('site.shedule-hotel-en') }}
                                        </p>
                                    </div>

                                    <div class="cont_block">
                                        <div class="cont_block_zag">
                                            <div>
                                                <picture><img src="/img/email2.svg" alt=""></picture>
                                            </div>
                                            <div>@lang('pages.email'):</div>
                                        </div>
                                        <p><a href="mailto:{{ setting('site.email-hotel') }}">{{ setting('site.email-hotel') }}</a></p>
                                    </div>

                                    <div class="cont_block">
                                        <div class="cont_block_zag">
                                            <div>
                                                <picture><img src="/img/phone3.svg" alt=""></picture>
                                            </div>
                                            <div>@lang('pages.phone'):</div>
                                        </div>
                                        <p><a href="tel:+{{ preg_replace("/[^,.0-9]/", '', setting('site.phone-hotel')) }}">{{ setting('site.phone-hotel') }}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="contacts">
                            <b>@lang('pages.marketing')</b>
                            <hr>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="cont_block">
                                        <div class="cont_block_zag">
                                            <div>
                                                <picture><img src="/img/time2.svg" alt=""></picture>
                                            </div>
                                            <div>@lang('pages.shedule'):</div>
                                        </div>
                                        <p>
                                            {{ session()->get('locale') === 'ru' ? setting('site.shedule-marketing') : setting('site.shedule-marketing-en') }}
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-3">
                                    <div class="cont_block">
                                        <div class="cont_block_zag">
                                            <div>
                                                <picture><img src="/img/email2.svg" alt=""></picture>
                                            </div>
                                            <div>@lang('pages.email'):</div>
                                        </div>
                                        <p><a href="mailto:{{ setting('site.email-marketing') }}">{{ setting('site.email-marketing') }}</a></p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-3">
                                    <div class="cont_block">
                                        <div class="cont_block_zag">
                                            <div>
                                                <picture><img src="/img/phone3.svg" alt=""></picture>
                                            </div>
                                            <div>@lang('pages.phone'):</div>
                                        </div>
                                        <p><a href="tel:+{{ preg_replace("/[^,.0-9]/", '', setting('site.phone-marketing')) }}">{{ setting('site.phone-marketing') }}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 map mt-4">
                {!! setting('site.map') !!}
            </div>
        </div>
    </div>
</main>
@endsection
