<form action="{{ isset($estudiante) ? route('estudiantes.update', $estudiante->id) : route('estudiantes.store') }}" method="POST">
    @csrf
    @if(isset($estudiante))
        @method('PUT')
    @endif

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control"
                   value="{{ old('nombre', $estudiante->nombre ?? '') }}" required>
        </div>

        <div class="col-md-6">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" name="apellido" id="apellido" class="form-control"
                   value="{{ old('apellido', $estudiante->apellido ?? '') }}" required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" name="telefono" id="telefono" class="form-control"
                   value="{{ old('telefono', $estudiante->telefono ?? '') }}">
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control"
                   value="{{ old('email', $estudiante->email ?? '') }}">
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">
            {{ isset($estudiante) ? 'Actualizar' : 'Crear' }}
        </button>
    </div>
</form>