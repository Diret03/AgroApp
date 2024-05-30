@extends('layouts.admin')

@section('main-content')
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Contenido principal -->
        <div id="content">
            <!-- Encabezado -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <!-- Título de la página -->
                <h1 class="h3 mb-0 text-gray-800">Estudiantes</h1>
                <!-- Botón para agregar estudiante -->
                <a href="{{ route('students.create') }}" class="btn btn-primary btn-icon-split ml-auto">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Agregar Estudiante</span>
                </a>
            </nav>
            <!-- Contenido de la página -->
            <div class="container-fluid">
                <!-- Tabla de estudiantes -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Curso</th>
                                        <th>Horas</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->last_name }}</td>
                                            <td>{{ $student->course }}</td>
                                            <td>{{ $student->hours }}</td>
                                            <td>
                                                <!-- Botón para editar estudiante -->
                                                <a href="{{ route('students.edit', $student->id) }}"
                                                    class="btn btn-primary btn-circle btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <!-- Formulario para eliminar estudiante -->
                                                <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-circle btn-sm"
                                                        onclick="return confirm('¿Estás seguro de que deseas eliminar este estudiante?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
