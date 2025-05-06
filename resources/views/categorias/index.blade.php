@extends('layouts.app')

@section('title', 'Listado de Categorías')

@section('content')
    <h1 class="mb-4">Listado de Categorías</h1>

    <a href="/categorias/create" class="btn btn-success mb-3">+ Nueva Categoría</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->nombre }}</td>
                    <td>{{ $categoria->descripcion }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
