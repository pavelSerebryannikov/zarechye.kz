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
    <div class="container inner_text publications">
        <div class="row justify-content-center mb-0">
            <div class="col-lg-9 publication_zag">
                <h2>{{ $page->title }}</h2>
                <hr>
                <p>{!! $page->text !!}</p>
            </div>
        </div>
        <div class="row">
            <div class="col text-center" id="be-booking-form"></div>
        </div>
    </div>
</main>

@endsection
