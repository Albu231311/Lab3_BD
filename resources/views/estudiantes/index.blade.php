@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Lista de Estudiantes</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('estudiantes.create') }}" class="btn btn-primary mb-3">
        Registrar nuevo estudiante
    </a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Apellido</th>
                    <th class="text-center">Teléfono</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($estudiantes as $estudiante)
                    <tr>
                        <td class="text-center">{{ $estudiante->id }}</td>
                        <td class="text-center">{{ $estudiante->nombre }}</td>
                        <td class="text-center">{{ $estudiante->apellido }}</td>
                        <td class="text-center">{{ $estudiante->telefono }}</td>
                        <td class="text-center">{{ $estudiante->email }}</td>
                        <td>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('estudiantes.edit', $estudiante->id) }}" class="btn btn-sm btn-warning">
                                    Editar
                                </a>

                                <form action="{{ route('estudiantes.destroy', $estudiante->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            onclick="return confirm('¿Eliminar este estudiante?')" 
                                            class="btn btn-sm btn-danger">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No hay estudiantes registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection