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
	<div class="container inner_text publications mt-5">
        <div class="row">
            <div class="col">
                {!! $page->text !!}
            </div>
        </div>
    </div>
    <div class="container mt-5 inner_text">
        <div class="row justify-content-center promo">
            @foreach($promotions->where('type', 'second') as $promotion)
                <div class="col-12 mb-4">
                    <a href="{{ route('promotion' , $promotion->slug) }}">
                        <div class="banya_block">
                            <div>
                                <div>
                                    {{ $promotion->title }}
                                </div>
                                <picture>
                                    <source srcset="{{$promotion->webpImage}}" type="image/webp">
                                    <source srcset="{{ \Voyager::image($promotion->image) }}" type="image/pjpeg">
                                    <img src="{{ \Voyager::image($promotion->image) }}" alt="">
                                </picture>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</main>

@endsection
