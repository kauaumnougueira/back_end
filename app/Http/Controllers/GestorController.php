<?php

namespace App\Http\Controllers;

use App\Models\Gestor;
use Illuminate\Http\Request;

class GestorController extends Controller
{
    public function index()
    {
        $gestores = Gestor::all();
        return response()->json($gestores);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:gestor,email',
            'telefone' => 'required|string|max:20',
            'cpf' => 'required|string|max:14|unique:gestor,cpf',
        ]);

        $gestor = Gestor::create($validatedData);
        return response()->json($gestor, 201);
    }

    public function show($id)
    {
        $gestor = Gestor::find($id);

        if (!$gestor) {
            return response()->json(['message' => 'Gestor não encontrado'], 404);
        }

        return response()->json($gestor);
    }

    public function update(Request $request, $id)
    {
        $gestor = Gestor::find($id);

        if (!$gestor) {
            return response()->json(['message' => 'Gestor não encontrado'], 404);
        }

        $validatedData = $request->validate([
            'nome' => 'sometimes|required|string|max:100',
            'email' => 'sometimes|required|string|email|max:100|unique:gestor,email,' . $id,
            'telefone' => 'sometimes|required|string|max:20',
            'cpf' => 'sometimes|required|string|max:14|unique:gestor,cpf,' . $id,
        ]);

        $gestor->update($validatedData);
        return response()->json($gestor);
    }

    public function destroy($id)
    {
        $gestor = Gestor::find($id);

        if (!$gestor) {
            return response()->json(['message' => 'Gestor não encontrado'], 404);
        }

        $gestor->delete();
        return response()->json(['message' => 'Gestor deletado com sucesso'], 204);
    }
}
