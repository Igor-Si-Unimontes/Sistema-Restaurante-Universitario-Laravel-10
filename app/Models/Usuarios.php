<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nome',
        'matricula',
        'email',
        'nascimento',
        'curso'
    ];
}
