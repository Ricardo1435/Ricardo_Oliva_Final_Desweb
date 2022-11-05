<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LenguajeProgramacion extends Model
{
    use HasFactory;
    protected $table = "lenguaje_programacion";
    protected $guarded = ['id'];
    public $timestamps = false;
}
