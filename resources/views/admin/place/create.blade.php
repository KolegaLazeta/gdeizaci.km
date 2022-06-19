@extends('layouts.admin')
@section('main')

<form action="{{ route('store.place') }}" enctype="multipart/form-data" method="post">
    @csrf
    <div class="row">
        <div class="col-8 offset-2">
            
            <div class="row">
                <h2> Dodajte objekat</h2>
            </div>  

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label">Naziv objekta</label>
                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" 
                name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label">Nesto o objektu</label>
                <input id="description" type="description" class="form-control @error('description') is-invalid @enderror" 
                name="description" value="{{ old('description') }}" autocomplete="description" autofocus>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="form-group row">
                <label for="phone" class="col-md-4 col-form-label">Broj Telefona</label>
                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" 
                name="phone" value="{{ old('phone') }}" autocomplete="phone" autofocus>
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="map" class="col-md-4 col-form-label">Link objekta: </label>
                <input id="map" type="map" class="form-control @error('map') is-invalid @enderror" 
                name="map" value="{{ old('map') }}" autocomplete="map" autofocus>
                @error('map')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            
            <div class="form-gorup row">
                <label for="image" class="col-md-4 col-form-label">Slika objekata</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @error('image')
                    <strong>{{ $message }}</strong>
                @enderror
            </div>

            
            <div class="row pt-4">
                <button class="btn btn-outline-dark" type="submit">Potvrdi</button>
            </div>
        </div>
    </div>
</form>
@endsection