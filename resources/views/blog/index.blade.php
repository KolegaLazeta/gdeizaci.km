@extends('layouts.app')
@section('main')
    <div class="continer">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h3 class="m-5">Novosti iz Kosovske Mitrovice</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 offset-1">
                @foreach ($blogs as $blog)
                    <a href="{{ route('blog.id', $blog->id) }}">
                        <div class="card mb-3">
                            <img class="card-img-top" src="/storage/uploads/{{ $blog->image }}" style="object-fit:cover" height="180" width="894"  alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $blog->title }}</h5>
                                <p class="card-text">{{ Str::limit(strip_tags($blog->blog, 30)) }}</p>
                                <p class="card-text"><small class="text-muted">{{ $blog->created_at }}</small></p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="col-md-3 offset-2 bg-white border">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <h4 class="m-3">Posetite ova mesta</h4>
                    </div>
                </div>
                <div class="row">
                    @foreach ($places as $place)
                        <div class="col">
                            <a href="{{ route('place.id', $place) }}">
                                <div class="card mt-3">
                                    <div class="card-img-top">
                                        <img src="/storage/uploads/{{ $place->image }}" style="object-fit:cover" height="200" width="300" alt="">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $place->name }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>

@endsection