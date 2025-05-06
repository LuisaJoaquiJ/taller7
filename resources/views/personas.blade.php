@extends('layout')

@section('title', 'Lista de Personas')

@section('content')
    <h1 class="mb-4">Lista de Personas</h1>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
                <tr>
                    <td>{{ $persona->nombre }}</td>
                    <td>{{ $persona->edad }}</td>
                    <td>{{ $persona->rol }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

