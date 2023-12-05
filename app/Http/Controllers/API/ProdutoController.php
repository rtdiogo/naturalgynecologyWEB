<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function show(string $id){
        $produto = Produto::where("IDpatologia", "=", $id)->get();
        
        return response()->json($produto);
    }
}
