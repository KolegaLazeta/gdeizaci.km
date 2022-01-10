
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
                
                <div class="menu">
                    <a href="">Cenovnik</a>
                </div>
                <div class="phone">
                    <p><strong>Broj telefona: </strong> </p>
                </div>
                
                
            </div>
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators" style="color: black">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" >
                    <div class="carousel-item active" >
                        <img class="d-block " height="500px" width="600px" style="margin:auto" src="/storage/uploads/{{ $place->image }}" alt="First slide">
                        
                    </div>
                    <div class="carousel-item">
                        <img class="d-block " height="500px" width="600px" style="margin:auto" src="/storage/uploads/{{ $place->image }}" alt="Second slide">
                        
                    </div>
                    <div class="carousel-item">
                        <img class="d-block " height="500px" width="600px" style="margin:auto" src="/storage/uploads/{{ $place->image }}" alt="Third slide">
                        
                    </div>
                    </div>
                    <a class="carousel-control-prev"  href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

          


        </div>
    </div>
@endsection
