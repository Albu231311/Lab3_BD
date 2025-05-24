@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">{{ isset($estudiante) ? 'Editar Estudiante' : 'Nuevo Estudiante' }}</h3>
        </div>
        <div class="card-body">
            @include('estudiantes.form')
        </div>
    </div>
</div>
@endsection