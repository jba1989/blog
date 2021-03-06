@extends('mooc.layouts.main')

@section('title', 'member')

@section('banner')
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('images/banner-lg.png') }}" alt="banner">
            </div>				
        </div>
    </div>
@endsection

@section('content')
    <div class="container my-5">
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('class') }}?school=ntu">
                        <img class="card-img-top" src="{{ asset('images/NTU_logo.jpg') }}" alt="Card image cap">
                    </a>
                </div>
                <div class="card-footer">
                    <h5 class="text-info text-center">{{ __('dictionary.NTU') }}</h5>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('class') }}?school=nthu">
                        <img class="card-img-top" src="{{ asset('images/NTHU_logo.png') }}" alt="Card image cap">
                    </a>
                </div>
                <div class="card-footer">
                    <h5 class="text-info text-center">{{ __('dictionary.NTHU') }}</h5>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('class') }}?school=nctu">
                        <img class="card-img-top" src="{{ asset('images/NCTU_logo.png') }}" alt="Card image cap">
                    </a>
                </div>
                <div class="card-footer">
                    <h5 class="text-info text-center">{{ __('dictionary.NCTU') }}</h5>
                </div>
            </div>
        </div>
    </div>
@endsection