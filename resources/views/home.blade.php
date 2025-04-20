@extends('partials.layout')

@if (session()->get('locale') === 'ru')
    @section('title')
        {{ setting('site.title') }}
    @endsection
    @section('keywords')
        {{ setting('site.keywords') }}
    @endsection
    @section('description')
        {{ setting('site.description') }}
    @endsection
@else
    @section('title')
        {{ setting('site.title-en') }}
    @endsection
    @section('keywords')
        {{ setting('site.keywords-en') }}
    @endsection
    @section('description')
        {{ setting('site.description-en') }}
    @endsection
@endif

@section('content')

<main>
    <div class="container-fluid slider_block">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="slide_text">
                        @if (session()->get('locale') === 'ru')
                            <h1>{{ setting('site.video-title') }}</h1>
                            <p>{{ setting('site.video-text') }}</p>
                        @else
                            <h1>{{ setting('site.video-title-en') }}</h1>
                            <p>{{ setting('site.video-text-en') }}</p>
                        @endif
                    </div>
                    <div class="search_form" id="be-search-form"></div>
                    <video muted="" autoplay="autoplay" loop="loop" playsinline="" poster="{{ \Storage::disk('public')->url(setting('site.poster')) }}"
                        class="sliderhome-img">
                        <source src="{{ setting('site.video') }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 about_block">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                @if (session()->get('locale') === 'ru')
                    {!! setting('site.about') !!}
                @else
                    {!! setting('site.about-en') !!}
                @endif
            </div>
            <div class="col-12 mt-5">
                <div class="owl-carousel carousel_1 owl-theme">
                    @foreach($photos->where('place' , 'about') as $photo)
                        <div class="item">
                            <div class="ratio ratio-4x3">
                                <div>
                                    <picture data-src="{{ $photo->webpImage }}" data-fancybox="gallery_1">
                                        <source srcset="{{ $photo->webpImage }}" type="image/webp">
                                        <source srcset="{{ \Voyager::image($photo->image) }}" type="image/pjpeg">
                                        <img src="{{ \Voyager::image($photo->image) }}" alt="">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-sm-5 pt-5 pb-sm-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="owl-carousel carousel_2 owl-theme">
                    @foreach($photos->where('place' , 'prozhivanie') as $photo)
                        <div class="item">
                            <div class="ratio-4x3 ratio">
                                <div>
                                    <picture data-src="{{ $photo->webpImage }}" data-fancybox="gallery_2">
                                        <source srcset="{{ $photo->webpImage }}" type="image/webp">
                                        <source srcset="{{ \Voyager::image($photo->image) }}" type="image/pjpeg">
                                        <img src="{{ \Voyager::image($photo->image) }}" alt="">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 about_block_2 mt-5 mt-lg-0">
                @if (session()->get('locale') === 'ru')
                    {!! setting('site.prozhivanie') !!}
                @else
                    {!! setting('site.prozhivanie-en') !!}
                @endif
                <div>
                    <button onclick="window.location.href = '/prozhivanie#mini_hotels';">
                        @lang('pages.nomera')
                        <picture>
                            <img src="/img/arrow_more.svg" alt="">
                        </picture>
                    </button>
                    <button onclick="window.location.href = '/prozhivanie#cottages';">
                        @lang('pages.cottedges')
                        <picture>
                            <img src="/img/arrow_more.svg" alt="">
                        </picture>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-4 pb-5 pt-sm-5 mt-5 about_block gallery_block">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h2>@lang('pages.act')</h2>
                <hr>
            </div>
            <div class="col-12 mt-sm-4">
                <div class="outer">
                    <div id="big" class="owl-carousel owl-theme">
                        @foreach($publications->filter(function($publication) {
                            return $publication->home == 1 && $publication->type == 'activity';
                        }) as $publication)
                            <div class="item">
                                <div class="slide_text_2">
                                    <div class="slide_text_2_1">
                                        <div>
                                            <h3>{{ $publication->title }}</h3>
                                        </div>
                                        <div>
                                            <button class="more" onclick="window.location.href = '{{ route('publication' , $publication->slug) }}';">
                                                @lang('pages.more')
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <picture>
                                    <source srcset="{{ $publication->webpImage }}" type="image/webp">
                                    <source srcset="{{ \Voyager::image($publication->image) }}" type="image/pjpeg">
                                    <img src="{{ \Voyager::image($publication->image) }}" alt="">
                                </picture>
                            </div>
                        @endforeach
                    </div>
                    <div id="thumbs" class="owl-carousel owl-theme d-none d-md-block">
                        @foreach($publications->filter(function($publication) {
                            return $publication->home == 1 && $publication->type == 'activity';
                        }) as $publication)
                            <div class="item">
                                <div class="slide_text_3">
                                    <h4>{{ $publication->title }}</h4>
                                </div>
                                <picture>
                                    <source srcset="{{ $publication->webpImage }}" type="image/webp">
                                    <source srcset="{{ \Voyager::image($publication->image) }}" type="image/pjpeg">
                                    <img src="{{ \Voyager::image($publication->image) }}" alt="">
                                </picture>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-sm-5 pt-5 pb-sm-5">
        <div class="row align-items-center">
            <div class="col-lg-5 about_block_2 mt-5 mt-lg-0 order-2 order-lg-1">
                @if (session()->get('locale') === 'ru')
                    {!! setting('site.pitanie') !!}
                @else
                    {!! setting('site.pitanie-en') !!}
                @endif
                <button class="more" onclick="window.location.href = '/pitanie';">@lang('pages.more')</button>
            </div>
            <div class="col-lg-6 offset-lg-1 order-lg-2 order-1">
                <div class="owl-carousel carousel_2 owl-theme">
                    @foreach($photos->where('place' , 'pitanie') as $photo)
                        <div class="item">
                            <div class="ratio ratio-4x3">
                                <div>
                                    <picture data-src="{{ $photo->webpImage }}" data-fancybox="gallery_3">
                                        <source srcset="{{ $photo->webpImage }}" type="image/webp">
                                        <source srcset="{{ \Voyager::image($photo->image) }}" type="image/pjpeg">
                                        <img src="{{ \Voyager::image($photo->image) }}" alt="">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-4 pb-5 pt-sm-5 mt-5 about_block gallery_block">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h2>@lang('pages.events')</h2>
                <hr>
            </div>
            <div class="col-12 mt-sm-4">
                <div class="outer">
                    <div id="big2" class="owl-carousel owl-theme">
                        @foreach($publications->filter(function($publication) {
                            return $publication->home == 1 && $publication->type == 'events';
                        }) as $publication)
                            <div class="item">
                                <div class="slide_text_2">
                                    <div class="slide_text_2_1">
                                        <div>
                                            <h3>{{ $publication->title }}</h3>
                                        </div>
                                        <div>
                                            <button class="more" onclick="window.location.href = '{{ route('publication' , $publication->slug) }}';">
                                                @lang('pages.more')
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <picture>
                                    <source srcset="{{ $publication->webpImage }}" type="image/webp">
                                    <source srcset="{{ \Voyager::image($publication->image) }}" type="image/pjpeg">
                                    <img src="{{ \Voyager::image($publication->image) }}" alt="">
                                </picture>
                            </div>
                        @endforeach
                    </div>
                    <div id="thumbs2" class="owl-carousel owl-theme d-none d-md-block">
                        @foreach($publications->filter(function($publication) {
                            return $publication->home == 1 && $publication->type == 'events';
                        }) as $publication)
                            <div class="item">
                                <div class="slide_text_3">
                                    <h4>{{ $publication->title }}</h4>
                                </div>
                                <picture>
                                    <source srcset="{{ $publication->webpImage }}" type="image/webp">
                                    <source srcset="{{ \Voyager::image($publication->image) }}" type="image/pjpeg">
                                    <img src="{{ \Voyager::image($publication->image) }}" alt="">
                                </picture>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 about_block pt-3">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h2>@lang('pages.benefits')</h2>
                <hr>
            </div>
            @foreach($benefits->where('place' , 'home') as $benefit)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="benefit" data-bs-toggle="modal" data-bs-target="#benefit_{{ $benefit->id }}">
                        <span>
                            <i>@lang('pages.more')</i>
                        </span>
                        <picture>
                            <img src="{{ \Voyager::image($benefit->image) }}" alt="">
                        </picture>
                        <div class="benefit_title">
                            {{ $benefit->title }}
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="benefit_{{ $benefit->id }}">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">{{ $benefit->title }}</h4>
                                <button class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                {!! $benefit->text !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>

@endsection