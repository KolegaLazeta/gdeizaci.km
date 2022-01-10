@extends('layouts.admin')
@section('main')
<div class="row">
    @if(session()->has('message'))
    <div class="alert {{session('alert') ?? 'alert-info'}}">
        {{ session('message') }}
    </div>
    @endif
</div>
<div class="row">
    <div class="col-8 offset-2">
        <div class="row">
            <h2> Dodajte muzicara </h2>
        </div>
        <form action="{{ route('store.musician') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label">Muzicar</label>
                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" 
                name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label">Nesto o muzicaru</label>
                <input id="description" type="description" class="form-control @error('description') is-invalid @enderror" 
                name="description" value="{{ old('description') }}" autocomplete="description" autofocus>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-gorup row">
                <label for="image" class="col-md-4 col-form-label">Slika muzicara</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @error('image')
                    <strong>{{ $message }}</strong>
                @enderror
            </div>

            
            <div class="row pt-4">
                <button class="btn btn-outline-dark">Potvrdi</button>
            </div>
        </form>
    </div>
@endsection