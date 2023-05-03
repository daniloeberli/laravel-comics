@extends('layouts.app')

@section('page.main')

    <div class="wrapper d-flex container">
        <div class="single-comic">
            <img class="img-fluid" src="{{$comic['thumb']}}" alt="">
            <h1>{{ $comic['title'] }}</h1>
            <p>{{$comic['description']}}</p>
        </div>
        <div >
            <!--foto da cambiare-->
            <img class="img-fluid" src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
        </div>
    </div>
    <div class="specs">
        <div class="container d-flex justify-content-around">
            <div class="talent w-50">
                <h4>Talent</h4>
                <div class="d-flex">
                    <h5>Art by</h5>
                    <p>
                        @foreach ($comic['artists'] as $artist)
                            {{$artist}}
                        @endforeach
                    </p>
                </div>
                <div class="d-flex">
                    <h5>Written by</h5>
                    <p>
                        @foreach ($comic['writers'] as $writer)
                        {{$writer}}
                        @endforeach
                    </p>
                </div>
            </div>
            <div class="specs w-50">
                <h4>Specs</h4>
                <div class="d-flex justify-content-between">
                    <h5>Series</h5>
                    <p>{{$comic['series']}}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <h5>US price</h5>
                    <p>{{$comic['price']}}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <h5>On sale date</h5>
                    <p>{{$comic['sale_date']}}</p>
                </div>
            </div>
        </div>
    </div>

@endsection