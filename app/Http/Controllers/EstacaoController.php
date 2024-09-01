<?php

namespace App\Http\Controllers;

use App\Models\Estacao;
use Illuminate\Http\Request;

class EstacaoController extends Controller
{
    public function index()
    {
        $estacoes = Estacao::with(['endereco', 'gestor'])->get();
        return response()->json($estacoes);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:100',
            'horario' => 'required|string|max:50',
            'contato' => 'required|string|max:50',
            'endereco_id' => 'required|exists:endereco,id',
            'gestor_id' => 'required|exists:gestor,id',
        ]);

        $estacao = Estacao::create($validatedData);
        return response()->json($estacao, 201);
    }

    public function show($id)
    {
        $estacao = Estacao::with(['endereco', 'gestor'])->find($id);

        if (!$estacao) {
            return response()->json(['message' => 'Estação não encontrada'], 404);
        }

        return response()->json($estacao);
    }

    public function update(Request $request, $id)
    {
        $estacao = Estacao::find($id);

        if (!$estacao) {
            return response()->json(['message' => 'Estação não encontrada'], 404);
        }

        $validatedData = $request->validate([
            'nome' => 'sometimes|required|string|max:100',
            'horario' => 'sometimes|required|string|max:50',
            'contato' => 'sometimes|required|string|max:50',
            'endereco_id' => 'sometimes|required|exists:endereco,id',
            'gestor_id' => 'sometimes|required|exists:gestor,id',
        ]);

        $estacao->update($validatedData);
        return response()->json($estacao);
    }

    public function destroy($id)
    {
        $estacao = Estacao::find($id);

        if (!$estacao) {
            return response()->json(['message' => 'Estação não encontrada'], 404);
        }

        $estacao->delete();
        return response()->json(['message' => 'Estação deletada com sucesso'], 204);
    }
}
