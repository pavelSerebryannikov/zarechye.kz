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
        <div class="container mt-5 inner_text">
            <div class="row">
                <div class="col-12 change_nomer">
                    <h2>@lang('pages.choose')</h2>
                    <hr>
                    <ul class="nav nav-pills mt-5 mb-5">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#all">@lang('pages.allrooms')</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#mini_hotels">@lang('pages.rooms')</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#cottages">@lang('pages.cotteges')</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="all">
                            <div class="row">

                                @foreach ($appartaments as $appartament)
                                    <div class="col-12">
                                        <div class="nomer_block">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-start">
                                                    <h3 class="d-none d-lg-block">
                                                        <a href="{{ route('appartament' , $appartament->slug) }}">
                                                            {{ $appartament->title }}
                                                        </a>
                                                    </h3>
                                                    <hr class="d-none d-lg-block">
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
                                                    <div class="mt-4 mt-lg-5">
                                                        <button class="booking"
                                                            onclick="window.location.href = '/bronirovanie?room-type={{ $appartament->booking }}';">@lang('pages.book-nomer')</button>
                                                        <button class="more_2"
                                                            onclick="window.location.href = '{{ route('appartament', $appartament->slug) }}';">@lang('pages.more')</button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 order-1 order-lg-2">
                                                    <h3 class="d-lg-none text-center">{{ $appartament->title }}</h3>
                                                    <hr class="d-lg-none">
                                                    <div class="owl-carousel carousel_3 owl-theme">
                                                        @if (count(json_decode($appartament->photos)))
                                                            @foreach (json_decode($appartament->photos) as $photo)
                                                                <div class="item">
                                                                    <div class="ratio-4x3 ratio">
                                                                        <div>
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
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="tab-pane fade" id="mini_hotels">
                            @foreach ($appartaments->where('type' , 'hotel') as $appartament)
                                <div class="col-12">
                                    <div class="nomer_block">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-start">
                                                <h3 class="d-none d-lg-block">
                                                    <a href="{{ route('appartament' , $appartament->slug) }}">
                                                        {{ $appartament->title }}
                                                    </a>
                                                </h3>
                                                <hr class="d-none d-lg-block">
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
                                                <div class="mt-4 mt-lg-5">
                                                    <button class="booking"
                                                        onclick="window.location.href = '/bronirovanie?room-type={{ $appartament->booking }}';">@lang('pages.book-nomer')</button>
                                                    <button class="more_2"
                                                        onclick="window.location.href = '{{ route('appartament', $appartament->slug) }}';">@lang('pages.more')</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 order-1 order-lg-2">
                                                <h3 class="d-lg-none text-center">{{ $appartament->title }}</h3>
                                                <hr class="d-lg-none">
                                                <div class="owl-carousel carousel_3 owl-theme">
                                                    @if (count(json_decode($appartament->photos)))
                                                        @foreach (json_decode($appartament->photos) as $photo)
                                                            <div class="item">
                                                                <div class="ratio-4x3 ratio">
                                                                    <div>
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
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="tab-pane fade" id="cottages">
                            @foreach ($appartaments->where('type' , 'cottage') as $appartament)
                                <div class="col-12">
                                    <div class="nomer_block">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-start">
                                                <h3 class="d-none d-lg-block">
                                                    <a href="{{ route('appartament' , $appartament->slug) }}">
                                                        {{ $appartament->title }}
                                                    </a>
                                                </h3>
                                                <hr class="d-none d-lg-block">
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
                                                <div class="mt-4 mt-lg-5">
                                                    <button class="booking"
                                                        onclick="window.location.href = '/bronirovanie?room-type={{ $appartament->booking }}';">@lang('pages.book-nomer')</button>
                                                    <button class="more_2"
                                                        onclick="window.location.href = '{{ route('appartament', $appartament->slug) }}';">@lang('pages.more')</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 order-1 order-lg-2">
                                                <h3 class="d-lg-none text-center">{{ $appartament->title }}</h3>
                                                <hr class="d-lg-none">
                                                <div class="owl-carousel carousel_3 owl-theme">
                                                    @if (count(json_decode($appartament->photos)))
                                                        @foreach (json_decode($appartament->photos) as $photo)
                                                            <div class="item">
                                                                <div class="ratio-4x3 ratio">
                                                                    <div>
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
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <script>
                        // Считываем URL и находим якорь
                        const hash = window.location.hash;

                        // Проверяем, есть ли якорь и он существует среди вкладок
                        if (hash) {
                            const targetTab = document.querySelector(`button[data-bs-target="${hash}"]`);
                            if (targetTab) {
                                // Активируем соответствующую вкладку и скрываем остальные
                                const allTabs = document.querySelectorAll('.nav-link');
                                allTabs.forEach(tab => tab.classList.remove('active'));

                                targetTab.classList.add('active');

                                const allTabContent = document.querySelectorAll('.tab-pane');
                                allTabContent.forEach(tab => tab.classList.remove('show', 'active'));

                                const targetTabContent = document.querySelector(hash);
                                targetTabContent.classList.add('show', 'active');
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </main>
@endsection
