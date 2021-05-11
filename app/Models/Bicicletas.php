<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bicicletas extends Model
{
    use HasFactory;
    // Instancio la tabla 'jugos'
    protected $table = 'bicicletas';

    // Declaro los campos que usaré de la tabla 'jugos'
    protected $fillable = ['nombre', 'precio', 'stock', 'imagenes', 'url'];

    // Relación
    public function imagenesbicicletas()
    {
        return $this->hasMany('App\Models\Imgbicicletas');
    }

}
