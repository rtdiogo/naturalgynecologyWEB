<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Patologia;
use Illuminate\Http\Request;
use App\Models\Produto;

class PatologiaController extends Controller
{
    public function index(){
        $patologias = Patologia::where('status', '=', true)->paginate(5);
        return view("patologia", compact("patologias"));
    }
    public function create(){
        return view("formulario");
    }
    public function store(Request $request){
        $patologia = Patologia::create([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'sintomas' => $request->sintomas,
            'status' => true
        ]);

        $id_patologia = $patologia->id;
       
        if($request->titulo_produto){
            for($i = 1; $i <= count($request->titulo_produto); $i++){
                $produto['titulo'] = $request->titulo_produto[$i];
                $produto['descricao'] = $request->desc_produto[$i];
                $produto['IDpatologia'] = $id_patologia;

                if($produto['titulo']){
                  Produto::create([
                      'titulo' => $produto['titulo'],
                      'forma_uso' => $produto['descricao'],
                      'IDpatologia' => $produto['IDpatologia']
                  ]);
                }
            }
        }

    

        return redirect()->route('patologia');
        
    }

    public function destroy(string $id) 
    {
        $produto = Produto::where('IDpatologia', '=', ($id));

        if($produto){
            $produto->update([
                'status' => false
            ]);
        }

        Patologia::find(($id))
            ->update([
                'status' => false
            ]);

        return redirect()->route('patologia');

    }

    public function search(Request $request)
    {
        $patologias = Patologia::where('titulo', 'LIKE', '%' . $request->buscar . '%')
            ->where('status', '=', true)
            ->paginate(5);


        return view('patologia', compact('patologias'));
    }
}
