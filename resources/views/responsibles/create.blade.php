@extends('layouts.admin')

@section('main-content')
    <h1>Crear Responsable</h1>
    <form action="{{ route('responsibles.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="last_name">Apellido:</label>
            <input type="text" class="form-control" id="last_name" name="last_name">
        </div>
        <div class="form-group">
            <label for="area">Área:</label>
            <input type="text" class="form-control" id="area" name="area">
        </div>
        <div class="form-group">
            <label for="phone_number">Teléfono:</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
