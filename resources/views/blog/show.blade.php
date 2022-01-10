@extends('layouts.app')
@section('background')
@section('main')
    <div class="row">
        <div class="row d-flex">
            <div class="col title offset-2">
                <strong>
                    <h2>{{ $blog->title }}</h2>
                </strong>
            </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-8 ">
            <article class="blog-post">
                {!!$blog->blog!!}
            </article>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection