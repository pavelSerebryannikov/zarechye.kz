@extends('partials.layout')

@section('title')
    {{ $publication->title }}
@endsection
@section('keywords')
    {{ $publication->keywords }}
@endsection
@section('description')
    {{ $publication->description }}
@endsection

@section('content')

    <main>
        <div class="container-fluid inner_header inner_promo">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div>
                            <h1>{{ $publication->title }}</h1>
                            <hr>
                        </div>
                        <picture>
                            <source srcset="{{ $publication->webpImage }}" type="image/webp">
                            <source srcset="{{ \Voyager::image($publication->image) }}" type="image/pjpeg">
                            <img src="{{ \Voyager::image($publication->image) }}" alt="">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5 inner_text_promo">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    {!! $publication->text !!}
                </div>
            </div>
            <div class="row promo_gallery">
                @if (!$publication['photos'])
                @else
                    @if (count(json_decode($publication->photos)))
                        @foreach (json_decode($publication->photos) as $photo)
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