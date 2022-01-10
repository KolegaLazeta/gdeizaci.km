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
        
    <h2 class="m-4">Kategorije</h2>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Lista svih kategorija
        </div>
        <div class="card-body">
            
            <table class="table" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ime Korisnika</th>
                        <th>E-Mail</th>
                        <th>Datum kreiranja</th>
                        <th>Obriši korisnika</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Ime Korisnika</th>
                        <th>E-Mail</th>
                        <th>Datum kreiranja</th>
                        <th>Obriši korisnika</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($users as $user)
                        
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                            <form action="" method="post">
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
</div>
@endsection