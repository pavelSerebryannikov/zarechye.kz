@extends('partials.layout')

@section('title')
    {{ $appartament->title }}
@endsection
@section('keywords')
    {{ $appartament->keywords }}
@endsection
@section('description')
    {{ $appartament->description }}
@endsection

@section('content')

<main>
    <div class="container-fluid inner_header_nomer">
        <span class="room_name">{{ $appartament->title }}</span>
        <div class="owl-carousel carousel_4 owl-theme">
            @if (count(json_decode($appartament->photos)))
                @foreach (json_decode($appartament->photos) as $photo)
                    <div class="item">
                        <picture>
                            <source
                                srcset="{{ str_replace('.' . pathinfo(\Voyager::image($photo), PATHINFO_EXTENSION), '.webp', \Voyager::image($photo)) }}"
                                type="image/webp">
                            <source
                                srcset="{{ Voyager::image($photo) }}"
                                type="image/pjpeg">
                            <img src="{{ Voyager::image($photo) }}"
                                alt="">
                        </picture>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="search_form d-none d-lg-block" id="be-search-form"></div>
    </div>
    
    <div class="booking_form d-lg-none">
        <div id="be-search-form-2"></div>
    </div>
    <div class="container mt-5 about_nomer">
        <div class="row">
            <div class="col-lg-5">
                @if($appartament['type'] == 'hotel')
                    <h2>@lang('pages.about-nomer')</h2>
                @else
                    <h2>@lang('pages.about-cottage')</h2>
                @endif
                <hr>
                <div class="nomer_block_icons">
                    <div>
                        <picture>
                            <img src="/img/icon1.svg" alt="">
                        </picture>
                        {{ $appartament->size }}
                    </div>
                    <div>
                        <picture>
                            <img src="/img/icon2.svg" alt="">
                        </picture>
                        {{ $appartament->places }}
                    </div>
                </div>
                <ul class="nav nav-pills mt-4 mb-4">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" data-bs-toggle="pill"
                            data-bs-target="#info">@lang('pages.info')</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#in_nomer">@lang('pages.in-room')</button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="info">
                        {!! $appartament->text1 !!}
                    </div>
                    <div class="tab-pane fade" id="in_nomer">
                        {!! $appartament->text2 !!}
                    </div>
                </div>
                <div class="price_block">
                    @if(!$appartament['price'])
                    @else
                        @if (session()->get('locale') === 'ru')
                            от <span>{{ number_format($appartament->price, 0 , '.' , ' ') }} ₸</span> за ночь:
                        @else
                            from <span>{{ number_format($appartament->price, 0 , '.' , ' ') }} ₸</span> per night:
                        @endif
                    @endif
                </div>
                <div class="mt-3">
                    <button class="booking" onclick="window.location.href = '/bronirovanie?room-type={{ $appartament->booking }}';">@lang('pages.book-nomer')</button>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 mt-5 mt-lg-0">
                <div class="owl-carousel carousel_3 owl-theme">
                    @if (count(json_decode($appartament->photos)))
                        @foreach (json_decode($appartament->photos) as $photo)
                            <div class="item">
                                <div class="ratio-4x3 ratio">
                                    <div>
                                        <picture data-src="{{ str_replace('.' . pathinfo(\Voyager::image($photo), PATHINFO_EXTENSION), '.webp', \Voyager::image($photo)) }}" data-fancybox="room_photo">
                                            <source
                                                srcset="{{ str_replace('.' . pathinfo(\Voyager::image($photo), PATHINFO_EXTENSION), '.webp', \Voyager::image($photo)) }}"
                                                type="image/webp">
                                            <source
                                                srcset="{{ Voyager::image($photo) }}"
                                                type="image/pjpeg">
                                            <img src="{{ Voyager::image($photo) }}"
                                                alt="">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
