<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    use HasFactory;

    protected $fillable=['nombre','precio','marca'];



    public  function fabricante(){

        return $this->hasOne(Fabricantes::class);
    }
    public  function departamento(){

        return $this->hasOne(Departamento::class);
    }
}
