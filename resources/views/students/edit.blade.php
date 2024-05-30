@extends('layouts.admin')

@section('main-content')
    <h1>Editar Estudiante</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}">
        </div>
        <div class="form-group">
            <label for="last_name">Apellido:</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $student->last_name }}">
        </div>
        <div class="form-group">
            <label for="course">Curso:</label>
            <input type="text" class="form-control" id="course" name="course" value="{{ $student->course }}">
        </div>
        <div class="form-group">
            <label for="hours">Horas:</label>
            <input type="text" class="form-control" id="hours" name="hours" value="{{ $student->hours }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
@endsection
