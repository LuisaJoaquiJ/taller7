@extends('layouts.app')

@section('title', 'Crear Categoría')

@section('content')
    <div class="card">
        <div class="card-header">Nueva Categoría</div>
        <div class="card-body">
            <form method="POST" action="{{{ route('productos.store') }}}">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea name="descripcion" class="form-control" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection
