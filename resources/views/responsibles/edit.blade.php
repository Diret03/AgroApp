@extends('layouts.admin')

@section('main-content')
    <h1>Editar Responsable</h1>
    <form action="{{ route('responsibles.update', $responsible->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $responsible->name }}">
        </div>
        <div class="form-group">
            <label for="last_name">Apellido:</label>
            <input type="text" class="form-control" id="last_name" name="last_name"
                value="{{ $responsible->last_name }}">
        </div>
        <div class="form-group">
            <label for="area">Área:</label>
            <input type="text" class="form-control" id="area" name="area" value="{{ $responsible->area }}">
        </div>
        <div class="form-group">
            <label for="phone_number">Teléfono:</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number"
                value="{{ $responsible->phone_number }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
@endsection
