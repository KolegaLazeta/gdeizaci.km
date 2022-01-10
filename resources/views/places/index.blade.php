@extends('layouts.app')
@section('main')
<div class="container">
    <div class="row">
       <h3 class="m-4 text-dark">Mesta koja bi vam se svidela</h3>
    </div>
    <div class="row">

        @foreach ($places->chunk(3) as $chunk)
            <div class="row">
            @foreach ($chunk as $place)
            <div class="col align-self-center mt-3">
                <div class="card bg-dark text-white">
                    <a class="text-white" href="{{ route('place.id', $place) }}">
                    <img class="card-img" src="/storage/uploads/{{ $place->image }}" alt="Card image">
                    <div class="card-img-overlay">
                      <h5 class="card-title">{{ $place->name }}</h5>
                      <p class="card-text">{{ Str::limit($place->description, 10) }}</p>
                      <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                 </a>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</div>
@endsection