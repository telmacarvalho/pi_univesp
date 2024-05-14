<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NomeCompleto extends Model
{
    use HasFactory;

    protected $table = 'nome_completo';
    public $timestamps = false; 

    protected $fillable = [
        'nome',
        'sobrenome'
    ];

    public function contato(){
        return $this->belongsTo(Contato::class, 'id_nome_completo');
    }
}
