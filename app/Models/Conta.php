<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;

class Conta extends Model
{
   
    
    use HasFactory;
    protected $fillable = [
        'quantPessoas',
        'valorTotal',
        'valorRestante',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
