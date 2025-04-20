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
    
    <!-- Добавляем меню активностей -->
    <div class="container mt-5 inner_text publications">
        <div class="row justify-content-center">
            <div class="col-12 publications_category">
                {!! menu('aktivnosty') !!}
            </div>
        </div>
    </div>
    
    <div class="container mt-5 about_block">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                {!! $page->text !!}
            </div>
        </div>
        <div class="row justify-content-center mt-4 concept_benefits">
            @foreach($benefits->where('place' , 'concept') as $benefit)
                <div class="col-md-4 col-lg-3">
                    <div class="benefit">
                        <picture>
                            <img src="{{ \Voyager::image($benefit->image) }}" alt="">
                        </picture>
                        <div class="benefit_title">
                            {{ $benefit->title }}
                        </div>
                        {!! $benefit->text !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container mt-5 about_block pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                {!! $page->text2 !!}
            </div>
            <div class="col-12 mt-5 concept_image">
                {!! $page->text3 !!}
            </div>
        </div>
    </div>
</main>

@endsection
