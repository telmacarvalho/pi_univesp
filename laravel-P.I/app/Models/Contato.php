<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    protected $table = 'contato';
    public $timestamps = false; 

    protected $fillable = [
        'id_nome_completo',
        'data_nascimento',
        'email',
        'telefone',
        // 'cep',
        // 'logradouro',
        // 'numero',
        // 'complemento',
        // 'bairro',
        // 'cidade',
        // 'estado',
        // 'cargo',
        // 'midia',
        // 'editoria1',
        // 'editoria2',
        // 'tipo_conteudo1',
        // 'periodicidade1',
        // 'tipo_conteudo2',
        // 'periodicidade2',
        // 'nome_empresa',
        // 'url_empresa',
        // 'explicacao_empresa',
    ];

    public function nome_completo(){
        return $this->hasOne(NomeCompleto::class, 'id', 'id_nome_completo');
    }
}
