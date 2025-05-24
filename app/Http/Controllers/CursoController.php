<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Estudiante;
use App\Models\VistaCursoEstudiante;

class CursoController extends Controller
{
    public function index()
    {
    $datos = VistaCursoEstudiante::all();
    return view('cursos.index', compact('datos'));
    }

    public function create()
    {
        $estudiantes = Estudiante::all();
        return view('cursos.create', compact('estudiantes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|unique:cursos,nombre|max:255',
            'descripcion' => 'required',
            'creditos' => 'required|integer|min:1|max:10',
            'estudiantes' => 'array|exists:estudiantes,id',
        ]);

        $curso = Curso::create($validated);
        if ($request->has('estudiantes')) {
            $curso->estudiantes()->attach($request->estudiantes);
        }

        return redirect()->route('cursos.index')->with('success', 'Curso creado correctamente.');
    }

    public function edit(Curso $curso)
    {
        $estudiantes = Estudiante::all();
        $estudiantesSeleccionados = $curso->estudiantes->pluck('id')->toArray();

        return view('cursos.edit', compact('curso', 'estudiantes'));
    }

    public function update(Request $request, Curso $curso)
    {
        $validated = $request->validate([
            'nombre' => 'required|max:255|unique:cursos,nombre,' . $curso->id,
            'descripcion' => 'required',
            'creditos' => 'required|integer|min:1|max:10',
            'estudiantes' => 'array|exists:estudiantes,id',
        ]);

        $curso->update($validated);
        $curso->estudiantes()->sync($request->estudiantes ?? []);

        return redirect()->route('cursos.index')->with('success', 'Curso actualizado correctamente.');
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index')->with('success', 'Curso eliminado.');
    }
}
