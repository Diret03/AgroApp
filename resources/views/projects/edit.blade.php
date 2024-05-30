@extends('layouts.admin')

@section('main-content')
    <h1>Editar Proyecto</h1>
    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
        </div>
        <div class="form-group">
            <label for="description">Descripción:</label>
            <textarea class="form-control" id="description" name="description">{{ $project->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="start_date">Fecha de Inicio:</label>
            <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $project->start_date }}">
        </div>
        <div class="form-group">
            <label for="end_date">Fecha de Fin:</label>
            <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $project->end_date }}">
        </div>
        <div class="form-group">
            <label for="status">Estado:</label>
            <select class="form-control" id="status" name="status">
                <option value="initiated" {{ $project->status == 'initiated' ? 'selected' : '' }}>Iniciado</option>
                <option value="in_progress" {{ $project->status == 'in_progress' ? 'selected' : '' }}>En Progreso</option>
                <option value="cancelled" {{ $project->status == 'cancelled' ? 'selected' : '' }}>Cancelado</option>
                <option value="completed" {{ $project->status == 'completed' ? 'selected' : '' }}>Completado</option>
            </select>
        </div>
        <div class="form-group">
            <label for="progress_percentage">Progreso (%):</label>
            <input type="number" class="form-control" id="progress_percentage" name="progress_percentage" min="0"
                max="100" value="{{ $project->progress_percentage }}">
        </div>
        <div class="form-group">
            <label for="responsible_id">Responsable:</label>
            <select class="form-control" id="responsible_id" name="responsible_id">
                @foreach ($responsibles as $responsible)
                    <option value="{{ $responsible->id }}"
                        {{ $project->responsible_id == $responsible->id ? 'selected' : '' }}>{{ $responsible->name }}
                        {{ $responsible->last_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
@endsection
