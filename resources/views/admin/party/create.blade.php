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
            <h2> Dodaj Objavu </h2>
        </div>
        <form action="{{ route('store.party') }}" enctype="multipart/form-data" method="post">
            @csrf
        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label">Naslov Objave</label>
            <input id="title" type="title" class="form-control @error('title') is-invalid @enderror" 
            name="title" value="{{ old('title') }}" autocomplete="title" autofocus>
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label">Deskripcija</label>
            <input id="description" type="description" class="form-control @error('description') is-invalid @enderror" 
            name="description" value="{{ old('description') }}" autocomplete="description" autofocus>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        
        <div class="form-group row">
                <label for="place_id">Mesto</label>
            <select name="place_id" style="height:30px;" class="form-select @error('place_id') is-invalid @enderror">
                @foreach($places as $place)
                    <option value="{{ $place->id }}">{{ $place->name }}</option>
                @endforeach
                </select>
        </div>
        <div class="form-group row">
            <label for="musician_id">Muzicar</label>
            <select name="musician_id" style="height:30px;" class="form-select @error('musician_id') is-invalid @enderror">
                @foreach($musicians as $musician)
                    <option value="{{ $musician->id }}">{{ $musician->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group row">
            <label for="maxGuests" class="col-md-4 col-form-label">Broj mesta</label>
            <input id="maxGuests" type="maxGuests" class="form-control @error('maxGuests') is-invalid @enderror" 
            name="maxGuests" value="{{ old('maxGuests') }}" autocomplete="maxGuests" autofocus>
            @error('maxGuests')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group row">
            <label for="ticketPrice" class="col-md-4 col-form-label">Cena karte</label>
            <input id="ticketPrice" type="ticketPrice" class="form-control @error('ticketPrice') is-invalid @enderror" 
            name="ticketPrice" value="{{ old('ticketPrice') }}" autocomplete="ticketPrice" autofocus>
            @error('ticketPrice')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col pt-2">
            <label for="day">Izaberite dan zurke</label>
            <select name="day" style="height:40px;" class="form-select @error('day') is-invalid @enderror">

            @foreach($days as $day) 
                <option value="{{$day}}" selected="">{{$day}}</option>
            @endforeach

        </select>
        </div>

        <div class="form-gorup row">
            <label for="image" class="col-md-4 col-form-label">Slika objave</label>
            <input type="file" class="form-control-file" id="image" name="image">
            @error('image')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <input name="user_id" value="{{ Auth::user()->id }}" hidden>
        
        <div class="row pt-4">
            <button class="btn btn-outline-dark" type="submit">Potvrdi</button>
        </div>
    </form>
    </div>
@endsection