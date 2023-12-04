<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Patologia;
use Illuminate\Http\Request;

class PatologiaController extends Controller
{
    public function index(){
        $patologias = Patologia::where('status', '=', true)->get();
        return response()->json($patologias);
    }

    public function show(string $id){
        $patologia = Patologia::find($id);
        $patologia['produtos'] = $patologia->produtos()->get();

        return response()->json($patologia);
    }
}
