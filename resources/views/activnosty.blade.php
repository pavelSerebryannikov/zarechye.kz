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
                        <source srcset="{{$page->webpImage}}" type="image/webp">
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
    <div class="container mt-5 inner_text publications">
        <div class="row justify-content-center">
            <div class="col-12 publications_category mb-5">
                {!! menu('aktivnosty') !!}
            </div>
            @foreach($publications as $publication)
                <div class="col-lg-6">
                    <div class="publication">
                        <div class="ratio ratio-21x9 mb-4">
                            <div>
                                <a href="{{ route('publication' , $publication->slug) }}">
                                    <picture>
                                        <source srcset="{{$publication->webpImage}}" type="image/webp">
                                        <source srcset="{{ \Voyager::image($publication->image) }}" type="image/pjpeg">
                                        <img src="{{ \Voyager::image($publication->image) }}" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <h3 class="mb-2">{{ $publication->title }}</h3>
                        <button class="more" onclick="window.location.href = '{{ route('publication' , $publication->slug) }}';">
                            @lang('pages.more')
                        </button>
                    </div>
                </div>
            @endforeach
            <div class="col-12 text-center mt-3 mt-md-5 mb-3 mb-md-0">
                <button class="booking" onclick="window.location.href = '/bronirovanie';">@lang('pages.booking')</button>
            </div>
        </div>
    </div>
</main>

@endsection
