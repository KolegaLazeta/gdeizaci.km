@extends('layouts.admin')
@section('main')


<div class="container-fluid px-4">
    <div class="row">
        @if(session()->has('message'))
        <div class="alert {{session('alert') ?? 'alert-info'}}">
            {{ session('message') }}
        </div>
        @endif
    </div>
        
    <h2 class="m-4">Rezervacije</h2>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Na cekanju
        </div>
        <div class="card-body">
            
            <table class="table" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>E-mail</th>
                        <th>Telefon</th>
                        <th>Mesto</th>
                        <th>Broj osoba</th>
                        <th>Potvrdi rezervaciju</th>
                        <th>Obriši rezervaciju</th>
                    </tr>
                </thead>
               
                <tbody>
                    @foreach ($bookings as $booking)
                    @if (!$booking->is_accepted)
                        
                    <tr>
                        <td>{{ $booking->id }}</td>
                        <td>{{ $booking->first_name }}</td>
                        <td>{{ $booking->last_name }}</td>
                        <td>{{ $booking->user->email }}</td>
                        <td>{{ $booking->phone }}</td>
                        <td>{{ $booking->party->title }}</td>
                        <td>{{ $booking->guestNumber }}</td>
                        <td>
                            <form action="{{route('booking.update', $booking->id)}}" method="post">
                                @csrf
                                @method('put')
                                    <button class="btn btn-primary py-1 text-white" name="is_accepted" id="" value="1" type="submit"><i
                                            class="fas fa-check"></i></button>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                @csrf
                                @method('delete')
                                <div class="row">
                                    <div class="col">
                                    <button class="btn btn-danger text-white" type="submit">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                    @endif

                    @endforeach
                    
             
                </tbody>
            </table>
        </div>
        <div class="table-responsive mt-5">
            <div class="table-title">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Rezervisano
                </div>
            </div>
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>E-mail</th>
                    <th>Telefon</th>
                    <th>Mesto</th>
                    <th>Broj osoba</th>
                </thead>
                @foreach ($bookings as $booking)
                    @if($booking->is_accepted)
                        <tbody>
                            <td>{{ $booking->id }}</td>
                            <td>{{ $booking->first_name }}</td>
                            <td>{{ $booking->last_name }}</td>
                            <td>{{ $booking->user->email }}</td>
                            <td>{{ $booking->phone }}</td>
                            <td>{{ $booking->party->title }}</td>
                            <td>{{ $booking->guestNumber }}</td>
                        </tbody>
                    @endif
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection