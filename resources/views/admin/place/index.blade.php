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
        
    <h2 class="m-4">Objekti</h2>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Lista svih objekata u gradu
        </div>
        <div class="card-body">
            
            <table class="table" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Naziv Objekta</th>
                        <th>Datum kreiranja</th>
                        <th>Obriši objekat</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Naziv Objekta</th>
                        <th>Datum Kreiranja</th>
                        <th>Obriši objekat</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($places as $place)
                    <tr>
                        <td>{{ $place->id }}</td>
                        <td>{{ $place->name }}</td>
                        <td>{{ $place->created_at }}</td>
                        <td>
                            <form action="{{ route('destroy.place', $place) }}" method="post">
                                @csrf
                                @method('delete')
                                <div class="row d-flex justify-content-center">
                                    <div class="col ">
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
        <a href="{{ route('admin.places.create') }}"><button class="btn btn-outline-dark">Dodaj objekat</button></a>
    </div>
</div>
@endsection