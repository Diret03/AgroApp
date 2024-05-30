@extends('layouts.admin')

@section('main-content')
    <h1>Crear Proyecto</h1>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="description">Descripción:</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="start_date">Fecha de Inicio:</label>
            <input type="date" class="form-control" id="start_date" name="start_date">
        </div>
        <div class="form-group">
            <label for="end_date">Fecha de Fin:</label>
            <input type="date" class="form-control" id="end_date" name="end_date">
        </div>
        <div class="form-group">
            <label for="status">Estado:</label>
            <select class="form-control" id="status" name="status">
                <option value="initiated">Iniciado</option>
                <option value="in_progress">En Progreso</option>
                <option value="cancelled">Cancelado</option>
                <option value="completed">Completado</option>
            </select>
        </div>
        <div class="form-group">
            <label for="progress_percentage">Progreso (%):</label>
            <input type="number" class="form-control" id="progress_percentage" name="progress_percentage" min="0"
                max="100">
        </div>
        <div class="form-group">
            <label for="responsible_id">Responsable:</label>
            <select class="form-control" id="responsible_id" name="responsible_id">
                @foreach ($responsibles as $responsible)
                    <option value="{{ $responsible->id }}">{{ $responsible->name }} {{ $responsible->last_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
