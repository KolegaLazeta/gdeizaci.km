<style>
    .form-popup{
        display: none;
    }
    </style>
    @extends('layouts.app')
    @section('main')
        <div class="container">
            <div class="row m-5">
                <div class="col">
                    <div class="title">
                        <h3><strong>{{ $party->title }}</strong></strong></h3>
                    </div>
                    <div class="description pt-3">
                        <p>{{$party->description}}</p>
                    </div>
                    <div class="menu">
                        <a href="">Cenovnik</a>
                    </div>
                    <div class="musician">
                        <strong>Muzicar: </strong><a href="{{ route('musician.id', $party->musician) }}">{{ $party->musician->name }}</a> 
                    </div>
                    <div class="guestMAX">
                        <p><strong>Maximalni broj osoba: </strong>{{ $party->maxGuests }}</p>
                    </div>
                    <div class="phoneNumber">
                        <p><strong>Broj telefona: </strong></p>
                    </div>

                    <div class="booking">
                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
                            Rezervisite
                        </button>
                    </div>
                </div>
                <div class="col">
                    <div class="img">
                        <img src="/storage/uploads/{{ $party->image }}" width="500" height="400" style="object-fit: cover;" alt="Insomnia">
                    </div>
                </div>
    
              
    
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Unesite inforamcije:</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="{{ route('store.booking') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="modal-body">
                                <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
                                <input type="text" name="party_id" value="{{ $party->id }}" hidden>

                                <label class="mt-3"for="first_name">Ime</label>
                                <input class="form-control" type="text" name="first_name"  id="first_name" value="{{ old('first_name') }}">
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label class="mt-3"for="last_name">Prezime</label>
                                <input class="form-control" type="text" name="last_name"  id="last_name" value="{{ old('last_name') }}">
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label class="mt-3" for="phone">Broj Telefona</label>
                                <input class="form-control" type="number" name="phone" id="phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label class="mt-3"for="guestNumber">Broj osoba</label>
                                <input class="form-control" type="number" name="guestNumber" id="guestNumber" value="{{ old('guestNumber') }}">
                                @error('guestNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Rezervisite</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
    
            </div>
        </div>
    @endsection
    