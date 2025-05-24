<!-- resources/views/cursos/form.blade.php -->

<form action="{{ isset($curso) ? route('cursos.update', $curso) : route('cursos.store') }}" method="POST">
    @csrf
    @if(isset($curso))
        @method('PUT')
    @endif

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre"
               value="{{ old('nombre', $curso->nombre ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ old('descripcion', $curso->descripcion ?? '') }}</textarea>
    </div>

    <div class="mb-3">
        <label for="creditos" class="form-label">Créditos</label>
        <input type="number" class="form-control" id="creditos" name="creditos" min="1" max="10"
               value="{{ old('creditos', $curso->creditos ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="estudiantes" class="form-label">Estudiantes</label>
        <select multiple class="form-select" id="estudiantes" name="estudiantes[]" required>
            @foreach($estudiantes as $estudiante)
                <option value="{{ $estudiante->id }}"
                    @if(isset($curso) && $curso->estudiantes->contains($estudiante->id)) selected @endif>
                    {{ $estudiante->nombre }} {{ $estudiante->apellido }}
                </option>
            @endforeach
        </select>
        <div class="form-text">Mantén presionada Ctrl (Windows) o Cmd (Mac) para seleccionar varios.</div>
    </div>

    <button type="submit" class="btn btn-primary">
        {{ isset($curso) ? 'Actualizar Curso' : 'Crear Curso' }}
    </button>
</form>