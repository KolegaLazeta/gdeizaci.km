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
        
    <h2 class="m-4">Muzicari</h2>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Lista svih muzicara
        </div>
        <div class="card-body">
            
            <table class="table" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ime Muzicara</th>
                        <th>Datum kreiranja</th>
                        <th>Obriši muzicara</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Ime Muzicara</th>
                        <th>Datum kreiranja</th>
                        <th>Obriši muzicara</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($musicians as $musician)
                        <tr>
                            <td>{{ $musician->id }}</td>
                            <td>{{ $musician->name }}</td>
                            <td>{{ $musician->created_at }}</td>
                        
                            <td>
                                <form action="{{ route('destroy.musician', $musician) }}" method="post">
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
        <a href="{{ route('admin.musicians.create') }}"><button class="btn btn-outline-dark">Dodaj Muzicara</button></a>
    </div>
</div>
@endsection