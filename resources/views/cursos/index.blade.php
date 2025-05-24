@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Lista de Cursos</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('cursos.create') }}" class="btn btn-primary mb-3">
        Crear nuevo curso
    </a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th class="text-center" >ID</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Descripción</th>
                    <th class="text-center">Créditos</th>
                    <th class="text-center">Estudiantes</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($datos as $dato)
                    <tr>
                        <td class="text-center">{{ $dato->id }}</td>
                        <td>{{ $dato->nombre }}</td>
                        <td>{{ $dato->descripcion }}</td>
                        <td class="text-center">{{ $dato->creditos }}</td>
                        <td>{{ $dato->estudiantes ?? 'No asignados' }}</td>
                        <td>
                            <div class="d-flex justify-content-center gap-2">

                            <a href="{{ url('cursos/' . $dato->id . '/edit') }}" class="btn btn-sm btn-warning me-2">Editar</a>

                            <form action="{{ url('cursos/' . $dato->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        onclick="return confirm('¿Eliminar este curso?')" 
                                        class="btn btn-sm btn-danger">
                                    Eliminar
                                </button>
                            </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No hay cursos registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection