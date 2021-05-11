<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imgbicicletas extends Model
{
    use HasFactory;
    // Instancio la tabla 'img_bicicletas'
    protected $table = 'img_bicicletas';

    // Declaro los campos que usaré de la tabla 'img_bicicletas'
    protected $fillable = ['nombre', 'formato', 'bicicletas_id'];

    // Relación Inversa (Opcional)
    public function bicicleta()
    {
        return $this->belongsTo('App\Models\Bicicletas');
    }
}
