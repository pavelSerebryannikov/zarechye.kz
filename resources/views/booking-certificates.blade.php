@extends('partials.layout')

@section('title')
    @if(app()->getLocale() == 'ru')
        Бронирование сертификатов в отеле Заречье, Казахстан - Официальный сайт
    @elseif(app()->getLocale() == 'en')
        Booking certificates hotel Zarechye, Kazakhstan - Official site
    @endif
@endsection


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
        <div class="container inner_text publications">
            <div class="row justify-content-center mb-0">
                <div class="col-lg-9 publication_zag">
                    <h2>
                        @php
                            if(app()->getLocale() == 'ru') {echo "Бронирование сертификатов";}
                            elseif(app()->getLocale() == 'en') {echo "Booking certificates";}
                        @endphp
                    </h2>
                    <hr>
                    <p>{!! $page->text !!}</p>
                </div>
            </div>
            <div class="row">
                <div class="col text-center" id="be-booking-form-certificates"></div>
                <script>
                    document.body.classList.add('be-page');
                </script>
            </div>
        </div>
    </main>

@endsection
