<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $Producto = 'productos';
    protected $primarykey = 'id';
    protected $fillable = ['nombre','precio','stock',];
}
