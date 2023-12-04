<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable=[
        'titulo',
        'forma_uso',
        'imagem',
        'IDpatologia',
        'status'
    ];

    public function patologia(){
        return $this->belongsTo('App\Models\Patologia', 'IDpatologia', 'id');
    }
}
