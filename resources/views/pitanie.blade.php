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
    <div class="container-fluid mt-5 about_block">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                {!! $page->text !!}
            </div>
            <div class="col-12 mt-5">
                <div class="owl-carousel carousel_1 owl-theme">
                    @foreach($photos->where('place' , 'pitanie') as $photo)
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
    <div class="container-fluid mt-5 about_block">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                {!! $page->text2 !!}
                <button class="menu_pdf" onclick="window.open('{{Voyager::image(json_decode(setting('site.menu'))[0]->download_link)}}');">
                    <picture>
                        <img src="/img/pdf.svg" alt="">
                    </picture>
                    @lang('pages.menu')
                </button>
				<div id="flipbookContainer"></div>
            </div>
            <div class="col-12 mt-5">
                <div class="owl-carousel carousel_1 owl-theme">
                    @foreach($photos->where('place' , 'menu') as $photo)
                        <div class="item">
                            <div class="ratio ratio-4x3">
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
        </div>
    </div>
   <!-- <div class="container mt-sm-5 pt-5 pb-sm-5">
        <div class="row align-items-center">
            <div class="col-lg-5 about_block_2 mt-5 mt-lg-0 order-2 order-lg-1">
                {!! $page->text3 !!}
                <button class="menu_pdf" onclick="window.open('{{Voyager::image(json_decode(setting('site.menu'))[0]->download_link)}}');">
                    <picture>
                        <img src="/img/pdf.svg" alt="">
                    </picture>
                    @lang('pages.detox')
                </button>
            </div>
            <div class="col-lg-6 offset-lg-1 order-lg-2 order-1">
                <div class="ratio-4x3 ratio">
                    <div>
                        <picture>
                            <img src="{{ \Storage::disk('public')->url(setting('site.detox')) }}" alt="">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
</main>

<!-- Flipbook StyleSheet -->
		<script src="/js/dflip.min.js"></script>
		<script>
		    jQuery(document).ready(function () {

			    var pdf = '/img/menu_fev_2024.pdf';

			    var options = {

			    	height: 900,
			    	duration: 800,
			    	scrollWheel: false,
			    	backgroundColor: "transparent",
			    	hideControls: "",
			    	allControls: "altPrev,pageNumber,altNext,play,zoomIn,zoomOut,fullScreen",

			    };

		    	var flipBook = $("#flipbookContainer").flipBook(pdf, options);
		    	
		    });
</script>
@endsection
