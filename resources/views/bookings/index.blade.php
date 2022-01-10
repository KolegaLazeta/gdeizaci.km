@extends('layouts.app')
@section('main')
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="title">
                    <h2>Moje Rezervacije</h2>
                </div>
            </div>
            
            <div class="table-responsive mt-5">
                <div class="table-title">
                    <h4>Na Cekanju</h4>
                </div>
                <table class="table">
                    <thead>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>E-mail</th>
                        <th>Broj Osoba</th>
                        <th>Zurka</th>
                        <th>Datum rezervacije</th>
                    </thead>
                    
                    @foreach ($bookings as $booking) 
                        @if (!$booking->is_accepted)
                            <tbody>
                                <td>{{ $booking->first_name }}</td>
                                <td>{{ $booking->last_name }}</td>
                                <td>{{ $booking->user->email }}</td>
                                <td>{{ $booking->guestNumber }}</td>
                                <td>{{ $booking->party->title }}</td>
                                <td>{{ $booking->created_at }}</td>
                            </tbody>
                        @endif
                    @endforeach
                    </table>
                    </div>
                    <div class="table-responsive mt-5">
                        <div class="table-title">
                            <h4>Rezervisano</h4>
                        </div>
                        <table class="table">
                            <thead>
                                <th>Ime</th>
                                <th>Prezime</th>
                                <th>E-mail</th>
                                <th>Broj Osoba</th>
                                <th>Zurka</th>
                                <th>Datum rezervacije</th>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $booking)
                                    @if($booking->is_accepted)
                                        <td>{{ $booking->first_name }}</td>
                                        <td>{{ $booking->last_name }}</td>
                                        <td>{{ $booking->user->email }}</td>
                                        <td>{{ $booking->guestNumber }}</td>
                                        <td>{{ $booking->party->title }}</td>
                                        <td>{{ $booking->created_at }}</td>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
        </div>
    </div>
@endsection