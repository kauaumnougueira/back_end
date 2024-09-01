<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    public function index()
    {
        $enderecos = Endereco::all();
        return response()->json($enderecos);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cep' => 'required|string|max:10',
            'bairro' => 'required|string|max:100',
            'logradouro' => 'required|string|max:150',
            'cidade' => 'required|string|max:100',
            'uf' => 'required|string|max:2',
            'coordenada' => 'nullable|string|max:50',
        ]);

        $endereco = Endereco::create($validatedData);
        return response()->json($endereco, 201);
    }

    public function show($id)
    {
        $endereco = Endereco::find($id);

        if (!$endereco) {
            return response()->json(['message' => 'Endereço não encontrado'], 404);
        }

        return response()->json($endereco);
    }

    public function update(Request $request, $id)
    {
        $endereco = Endereco::find($id);

        if (!$endereco) {
            return response()->json(['message' => 'Endereço não encontrado'], 404);
        }

        $validatedData = $request->validate([
            'cep' => 'sometimes|required|string|max:10',
            'bairro' => 'sometimes|required|string|max:100',
            'logradouro' => 'sometimes|required|string|max:150',
            'cidade' => 'sometimes|required|string|max:100',
            'uf' => 'sometimes|required|string|max:2',
            'coordenada' => 'nullable|string|max:50',
        ]);

        $endereco->update($validatedData);
        return response()->json($endereco);
    }

    public function destroy($id)
    {
        $endereco = Endereco::find($id);

        if (!$endereco) {
            return response()->json(['message' => 'Endereço não encontrado'], 404);
        }

        $endereco->delete();
        return response()->json(['message' => 'Endereço deletado com sucesso'], 204);
    }
}
