<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'telefone',
        'email',
    ];

    public function contas()
    {
        return $this->hasMany(Conta::class);
    }
}
