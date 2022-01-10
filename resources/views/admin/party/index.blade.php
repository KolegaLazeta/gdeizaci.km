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
        
    <h2 class="m-4">Zurke</h2>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Sve zurke u gradu
        </div>
        <div class="card-body">
            
            <table class="table" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Naslov</th>
                        <th>Cena karte</th>
                        <th>Broj mesta</th>
                        <th>Datum kreiranja</th>
                        <th>Obriši zurku</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Naslov</th>
                        <th>Cena karte</th>
                        <th>Broj mesta</th>
                        <th>Datum kreiranja</th>
                        <th>Obriši zurku</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($parties as $party)
                    <tr>
                            
                        <td>{{ $party->id }}</td>
                        <td>{{ $party->title }}</td>
                        <td>{{ $party->ticketPrice }}</td>
                        <td>{{ $party->maxGuests }}</td>
                        <td>{{ $party->created_at }}</td>
                        
                        <td>
                            <form action="{{ route('destroy.party', $party) }}" method="post">
                                @csrf
                                @method('delete')
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                    <button class="btn btn-danger text-white" type="submit">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                     @endforeach
             
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <a href="{{ route('admin.parties.create') }}"><button class="btn btn-outline-dark">Dodaj Zurku</button></a>
    </div>
</div>
@endsection