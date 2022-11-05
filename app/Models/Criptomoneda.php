<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criptomoneda extends Model
{
    use HasFactory;
    protected $table = "criptomoneda";
    protected $guarded = ['id'];
    public $timestamps = false;
}
