@extends('layouts.app')
@section('main')
<style>
    #cards:hover{
        transform: scale(1.1)
    }
    .tabcontent {
  display: none;

}
</style>
<div class="container">
    <div class="row">
        <h2>Izdvajamo: </h2>
        <div class="col-8 pt-4">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators" style="color: black">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" >
                <div class="carousel-item active" >
                    <img class="d-block " height="600px" style="margin:auto" src="/img/slide1.png" alt="First slide">
                    
                </div>
                <div class="carousel-item">
                    <img class="d-block " height="600px" style="margin:auto" src="/img/slide2.png" alt="Second slide">
                    
                </div>
                <div class="carousel-item">
                    <img class="d-block " height="600px" style="margin:auto" src="/img/slide3.png" alt="Third slide">
                    
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
    
        <div class="col-4">
            <a class="text-dark" href="{{ route('parties') }}"><h4>Gde izaci ovih dana:</h4></a>
            <div class="">
                @foreach ($thisWeek as $party)
                
                    <div class="card mt-2" style="width: 18rem;">
                        <a href="{{ route('party.id', $party) }}">
                            <img class="card-img-top" id="cards" src="/storage/uploads/{{ $party->image }}" alt="Card image cap">
                        </a>
                    </div>    
                

                @endforeach
            </div>
            <br>

        </div>
    </div>
    <hr>
    <div class="row p-4">
        <div class="row ">
            <div class="col d-flex justify-content-center">
                <h3 class="m-4 border-bottom">Zurke u toku nedelje</h3>
            </div>
        </div>
        <div class="col">
           <div class="buttons d-flex justify-content-center">
                <button type="button" class="btn btn-dark rounded-0" id="defaultOpen" onclick="openDay(event, 'pon')">Ponedeljak</button>
                <button type="button" class="btn btn-dark rounded-0" onclick="openDay(event, 'uto')">Utorak</button>
                <button type="button" class="btn btn-dark rounded-0" onclick="openDay(event, 'sre')">Sreda</button>
                <button type="button" class="btn btn-dark rounded-0" onclick="openDay(event, 'cet')">Cetvrtak</button>
                <button type="button" class="btn btn-dark rounded-0" onclick="openDay(event, 'pet')">Petak</button>
                <button type="button" class="btn btn-dark rounded-0" onclick="openDay(event, 'sub')">Subota</button>
                <button type="button" class="btn btn-dark rounded-0" onclick="openDay(event, 'ned')">Nedelja</button>
           </div>

            @foreach ($parties as $party)

                @if($party->day == "ponedeljak")
                <div class="tabcontent" id="pon">
                    <div class="content-list d-flex justify-content-between">
                        <div class="content m-4">
                            <a href="{{ route('party.id', $party) }}">
                                <div class="card" id="cards" style="width: 18rem;">
                                    <img class="card-img-top" src="/storage/uploads/{{ $party->image }}" alt="Card image cap">
                                    <div class="card-body d-flex">
                                        <div class="card-title">{{Str::limit($party->title, 30) }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                @elseif ($party->day == "utorak")
                <div class="tabcontent" id="sre">
                    <div class="content-list d-flex justify-content-between">
                        <div class="content m-4">
                            <a href="{{ route('party.id', $party) }}">
                            <div class="card" id="cards" style="width: 18rem;">
                                <img class="card-img-top" src="/storage/uploads/{{ $party->image }}" alt="Card image cap">
                                <div class="card-body d-flex">
                                    <div class="card-title">{{Str::limit($party->title, 30) }}</div>
                                    
                                </div>
                              </div>
                            </a>
                        </div>
                    </div>
                </div>

                @elseif ($party->day == "sreda")
                <div class="tabcontent" id="sre">
                    <div class="content-list d-flex justify-content-between">
                        <div class="content m-4">
                            <a href="{{ route('party.id', $party) }}">
                            <div class="card" id="cards" style="width: 18rem;">
                                <img class="card-img-top" src="/storage/uploads/{{ $party->image }}" alt="Card image cap">
                                <div class="card-body d-flex">
                                    <div class="card-title">{{Str::limit($party->title, 30) }}</div>
                                    
                                </div>
                              </div>
                            </a>
                        </div>
                    </div>
                </div>

                @elseif ($party->day == "cetvrtak")
                <div class="tabcontent" id="cet">
                    <div class="content-list d-flex justify-content-between">
                        <div class="content m-4">
                            <a href="{{ route('party.id', $party) }}">
                            <div class="card" id="cards" style="width: 18rem;">
                                <img class="card-img-top" src="/storage/uploads/{{ $party->image }}" alt="Card image cap">
                                <div class="card-body d-flex">
                                    <div class="card-title">{{Str::limit($party->title, 30) }}</div>
                                </div>
                              </div>
                            </a>
                        </div>
                    </div>
                </div>

                @elseif ($party->day == "petak")
                <div class="tabcontent" id="pet">
                    <div class="content-list d-flex justify-content-between">
                        <div class="content m-4">
                            <a href="{{ route('party.id', $party) }}">
                            <div class="card" id="cards" style="width: 18rem;">
                                <img class="card-img-top" src="/storage/uploads/{{ $party->image }}" alt="Card image cap">
                                <div class="card-body d-flex">
                                    <div class="card-title">{{Str::limit($party->title, 30) }}</div>
                                </div>
                              </div>
                            </a>
                        </div>
                    </div>
                </div>

                @elseif ($party->day == "subota")
                <div class="tabcontent" id="sub">
                    <div class="content-list d-flex justify-content-between">
                        <div class="content m-4">
                            <a href="{{ route('party.id', $party) }}">
                            <div class="card" id="cards" style="width: 18rem;">
                                <img class="card-img-top" src="/storage/uploads/{{ $party->image }}" alt="Card image cap">
                                <div class="card-body d-flex">
                                    <div class="card-title">{{Str::limit($party->title, 30) }}</div>
                                </div>
                              </div>
                            </a>
                        </div>
                    </div>
                </div>

                @elseif ($party->day == "nedelja")
                <div class="tabcontent" id="ned">
                    <div class="content-list d-flex justify-content-between">
                        <div class="content m-4">
                            <a href="{{ route('party.id', $party) }}">
                            <div class="card" id="cards" style="width: 18rem;">
                                <img class="card-img-top" src="/storage/uploads/{{ $party->image }}" alt="Card image cap">
                                <div class="card-body d-flex">
                                    <div class="card-title">{{Str::limit($party->title, 30) }}</div>
                                </div>
                              </div>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach

        </div>

    </div>
    <hr>
    <div class="row d-flex justify-content-center p-4">
        <div class="row">
            <a href="{{route('places')}}" class="text-decoration-none"><h3 class="m-4 text-dark">Mesta koja bi vam se svidela <i class="fa fa-arrow-right" aria-hidden="true"></i></h3></a>
        </div>

        @foreach ($places as $place)
                <div class="col align-self-center">
                    <a href="{{ route('place.id', $place->id) }}">
                        <div class="card bg-dark text-white" id="cards">
                            <img class="card-img" src="/storage/uploads/{{ $place->image }}" alt="Card image">
                            <div class="card-img-overlay">
                            <h5 class="card-title">{{ $place->name }}</h5>
                            <p class="card-text">{{ Str::limit($place->description, 10) }}</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                            </div>
                        </div>
                    </a>
                </div>
        @endforeach
    </div>
    <hr>

    <div class="row">
        <div class="row">
            <a href="{{route('blogs')}}" class="text-decoration-none"><h3 class="m-4 text-dark">Zanimljivosti: <i class="fa fa-arrow-right" aria-hidden="true"></i></h3></a>
        </div>
        <div class="col-10 offset-1">
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
    </div>

    <hr>
    <div class="row bg-dark text-light rounded">
        <div class="row p-5">
            <div class="col d-flex justify-content-center">
                <h3 class="m-4">Kosovska Mitrovica</h3>
            </div>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi elit metus, aliquam a tortor non, venenatis blandit elit. 
                Mauris ut dapibus sem, ac fringilla mi. Quisque molestie lacus quis placerat suscipit. 
                Nullam ornare accumsan diam, at facilisis lacus sodales id. Nunc ut ipsum ultricies, bibendum nisl at, consequat metus. 
                Vestibulum ligula justo, lobortis sed semper fringilla, porttitor euismod velit. Pellentesque finibus lacinia magna eu pulvinar. 
                Etiam placerat fermentum sem, sit amet maximus tortor pellentesque ac. Donec eget bibendum risus, non posuere urna. 
                Phasellus cu        rsus tempus massa eu efficitur.</p>
        </div>
    </div>
    
</div>
@endsection
<script>
    document.getElementById("defaultOpen").click();
</script>