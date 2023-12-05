<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function create(string $patologia_id)
    {
        return view('formulario_produto', compact('patologia_id'));
    }

    public function store(Request $request)
    {
        Produto::create([
            'titulo' => $request->titulo,
            'forma_uso' => $request->forma_uso,
            'IDpatologia' => $request->patologia_id
        ]);

        return redirect()->route('detalhaPatologia', $request->patologia_id);
    }

    public function edit(string $id)
    {
        $produto = Produto::find($id);

        return view('formulario_produto', compact('produto'));
    }

    public function update(Request $request)
    {
        $produto = Produto::find($request->produto_id);
        $produto->update([
            'titulo' => $request->titulo,
            'forma_uso' => $request->forma_uso
        ]);

        return redirect()->route('detalhaPatologia', $produto->IDpatologia);
    }

    public function destroy(string $id)
    {
        $produto = Produto::find($id);
        $produto->update([
            'status' => false
        ]);

        return redirect()->route('detalhaPatologia', $produto->IDpatologia);
    }
}
