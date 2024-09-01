<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::with('estacao')->get();
        return response()->json($cursos);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:100',
            'descricao' => 'required|string',
            'professor' => 'required|string|max:100',
            'horario' => 'required|string|max:50',
            'estacao_id' => 'required|exists:estacao,id',
        ]);

        $curso = Curso::create($validatedData);
        return response()->json($curso, 201);
    }

    public function show($id)
    {
        $curso = Curso::with('estacao')->find($id);

        if (!$curso) {
            return response()->json(['message' => 'Curso não encontrado'], 404);
        }

        return response()->json($curso);
    }

    public function update(Request $request, $id)
    {
        $curso = Curso::find($id);

        if (!$curso) {
            return response()->json(['message' => 'Curso não encontrado'], 404);
        }

        $validatedData = $request->validate([
            'nome' => 'sometimes|required|string|max:100',
            'descricao' => 'sometimes|required|string',
            'professor' => 'sometimes|required|string|max:100',
            'horario' => 'sometimes|required|string|max:50',
            'estacao_id' => 'sometimes|required|exists:estacao,id',
        ]);

        $curso->update($validatedData);
        return response()->json($curso);
    }

    public function destroy($id)
    {
        $curso = Curso::find($id);

        if (!$curso) {
            return response()->json(['message' => 'Curso não encontrado'], 404);
        }

        $curso->delete();
        return response()->json(['message' => 'Curso deletado com sucesso'], 204);
    }
}
