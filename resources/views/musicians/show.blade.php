
@extends('layouts.app')
@section('main')
    <div class="container">
        <div class="row m-5">
            <div class="col">
                <div class="title">
                    <h3><strong>{{ $musician->name }}</strong></h3>
                </div>
                <div class="description pt-3">
                    <p>{{ $musician->description }}</p>
                </div>
                
            </div>
            <div class="col">
                <div class="img">
                    <img src="/storage/uploads/{{ $musician->image }}" width="500" height="400" style="object-fit: cover;" alt="Insomnia">
                </div>
            </div>

          


        </div>
    </div>
@endsection
