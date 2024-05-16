<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $table = 'cargo';
    public $timestamps = false;

    protected $fillable = [
        'nomeCargo'
    ];

    public function contato(){
        return $this->belongsTo(Contato::class, 'cargo');
    }
}
