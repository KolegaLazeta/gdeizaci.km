
@extends('layouts.app')
@section('main')
    <div class="container">
        <div class="row m-5">
            <div class="col">
                <div class="title">
                    <h3><strong>{{ $place->name }}</strong></h3>
                </div>
                <div class="description pt-3">
                    <p>{{ $place->description }}</p>
                </div>
                
                
                <div class="phone">
                    <p><strong>Broj telefona: {{ $place->phone }} </strong> </p>
                </div>
                
                
            </div>
            <div class="col">
                <div class="img">
                    <img src="/storage/uploads/{{ $place->image }}" width="500" height="400" style="object-fit: cover;" alt="Insomnia">
                </div>
            </div>

          


        </div>
    </div>
@endsection
