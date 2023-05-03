@extends('layouts.app');

@section('page.main')

    <div class="container single-comic">
        <h1>{{ $comic['title'] }}</h1>
        <p>{{$comic['description']}}</p>
    </div>
    <div class="container">
        
    </div>

@endsection