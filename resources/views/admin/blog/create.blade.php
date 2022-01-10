@extends('layouts.admin')
@section('main')
<div class="row">
    @if(session()->has('message'))
    <div class="alert {{session('alert') ?? 'alert-info'}}">
        {{ session('message') }}
    </div>
    @endif
</div>
    <div class="container">
        <div class="row m-3">
            @if(session()->has('message'))
            <div class="alert ml-3 {{session('alert') ?? 'alert-info'}}">
                {{ session('message') }}
            </div>
            @endif
        </div>
           
            <div class="row d-flex justify-content-center">
                <div class="col-8 offset-4">
                    <h3>Sastavi blog:</h3>
                </div>
            </div>
        <form action="{{ route('store.blog') }}" method="post" enctype="multipart/form-data">
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
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <div class="form-group card">
                            <div class="card-header">
                                <div class="card-header">
                                    Novi Blog
                                </div>
                                <div class="card-body">
                                    <textarea name="blog" value="{{ old('blog') }}" width="100" cols="80" rows="20"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="form-gorup row">
                <label for="image" class="col-md-4 col-form-label">Slika objave</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @error('image')
                    <strong>{{ $message }}</strong>
                @enderror
            </div>
            <div class="row pt-4">
                <button class="btn btn-outline-dark" type="submit" >Potvrdi</button>
            </div>
        </form>

           
    </div>

@endsection
