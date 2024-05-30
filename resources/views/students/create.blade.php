@extends('layouts.admin')

@section('main-content')
    <h1>Crear Estudiante</h1>
    <form action="{{ route('students.store') }}" method="POST">
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
            <label for="course">Curso:</label>
            <input type="text" class="form-control" id="course" name="course">
        </div>
        <div class="form-group">
            <label for="hours">Horas:</label>
            <input type="text" class="form-control" id="hours" name="hours">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
