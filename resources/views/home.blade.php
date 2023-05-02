@extends('layouts.app')

@section('page.main')
    <div class="container">
        <h1>main homepage</h1>
        <ul>
            @foreach ($comic as $item)
                <li> {{$item['title']}}</li>
            @endforeach
        </ul>
    </div>
@endsection