@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2 class="mb-4">Lista de usuarios</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container mt-5">
    
                        <table class="table table-bordered yajra-datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Pais</th>
                                    <th>Estado</th>
                                    <th>Genero</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $usuarios as $usuario)
                                <tr>
                                    <td>{{ $usuario->id }}</td>
                                    <td>{{ $usuario->name }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>{{ $usuario->country->name_country }}</td>
                                    <td>{{ $usuario->city->city_name }}</td>
                                    <td>{{ $usuario->gender->gender }}</td>
                                    <td>Action</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

<div class="justify-content-center">
    {!! $usuarios->links('pagination::bootstrap-4') !!}
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
