@extends('layouts.app')

@section('page.main')
    <div class="container">
        <h3>CURRENT SERIES</h3>
        <div class="d-flex justify-content-center align-items-center flex-wrap gap-5">
            @foreach ($comic as $item)
                <div class="card col-2" style="min-height: 18rem">
                    <img class="card-img-top img-fluid" src="{{$item['thumb']}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-title"><strong>{{ $item['series'] }}</strong></p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="load">
            <a href="">LOAD MORE</a>
        </div>
    </div>
    <section>

    </section>
@endsection