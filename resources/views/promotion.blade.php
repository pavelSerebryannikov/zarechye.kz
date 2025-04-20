@extends('partials.layout')

@section('title')
    {{ $promotion->title }}
@endsection
@section('keywords')
    {{ $promotion->keywords }}
@endsection
@section('description')
    {{ $promotion->description }}
@endsection

@section('content')

    <main>
        <div class="container-fluid inner_header inner_promo">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div>
                            <h1>{{ $promotion->title }}</h1>
                            <hr>
                            <button class="booking" data-bs-toggle="modal" data-bs-target="#application">@lang('pages.application')</button>
                        </div>
                        <picture>
                            <source srcset="{{ $promotion->webpImage }}" type="image/webp">
                            <source srcset="{{ \Voyager::image($promotion->image) }}" type="image/pjpeg">
                            <img src="{{ \Voyager::image($promotion->image) }}" alt="">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5 inner_text_promo">
            <div class="row">
				@if($promotion['type'] == 'first')
					<div class="col-12 text-center">
						<h3>@lang('pages.terms-of-action')</h3>
						<hr>
					</div>
				@endif
                <div class="col-lg-6">
                    {!! $promotion->text !!}
                </div>
                <div class="col-lg-6">
                    {!! $promotion->text2 !!}
                </div>
            </div>
            <div class="row promo_gallery">
                @if (!$promotion['photos'])
                @else
                    @if (count(json_decode($promotion->photos)))
                        @foreach (json_decode($promotion->photos) as $photo)
                            <div class="ratio">
                                <div>
                                    <picture
                                        data-src="{{ str_replace('.' . pathinfo(\Voyager::image($photo), PATHINFO_EXTENSION), '.webp', \Voyager::image($photo)) }}"
                                        data-fancybox="gallery_4">
                                        <source
                                            srcset="{{ str_replace('.' . pathinfo(\Voyager::image($photo), PATHINFO_EXTENSION), '.webp', \Voyager::image($photo)) }}"
                                            type="image/webp">
                                        <source srcset="{{ Voyager::image($photo) }}" type="image/pjpeg">
                                        <img src="{{ Voyager::image($photo) }}" alt="">
                                    </picture>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endif
            </div>
        </div>
    </main>

@endsection