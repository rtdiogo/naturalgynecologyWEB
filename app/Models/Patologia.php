<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patologia extends Model
{
    use HasFactory;
    protected $fillable=[
        'titulo',
        'descricao',
        'sintomas',
        'status'
    ];

    public function produtos (){
        return $this->hasMany('App\Models\Produto', 'IDpatologia', 'id')->where('status', '=', true);
    }

}
