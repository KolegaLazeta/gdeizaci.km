@extends('layouts.app')
@section('main')
<div class="container">
    <div class="row">
       <h3 class="m-4 text-dark">Najnovije zuke:</h3>   
    </div>
    <div class="row">
        @foreach ($parties->chunk(3) as $chunk)
        <div class="row">
            @foreach ($chunk as $party)
                
            <div class="col align-self-center">
                <a class="text-light" href="{{ route('party.id', $party) }}">
                <div class="card bg-dark text-white mt-3" >
                    <img class="card-img" src="/storage/uploads/{{ $party->image }}" min-height="250" min-width="350" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title">{{ $party->title }}</h5>
                        <p class="card-text">{{ Str::limit($party->description, 10) }}</p>
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