@extends('layouts.app')

@section('page.main')
    <div class="container">
        <h1>main homepage</h1>
        <div class="d-flex justify-content-center align-items-center flex-wrap gap-5">
            @foreach ($comic as $item)
                <div class="card col-2">
                    <div class="card-body">
                        <p class="card-title"><strong>{{ $item['series'] }}</strong></p>
                    </div>
                </div>
            @endforeach
            </div>
    </div>
    <section>

    </section>
@endsection