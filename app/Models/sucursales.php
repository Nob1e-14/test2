<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class sucursales extends Model
{
    use HasFactory;
    use Softdeletes;

    protected $primaryKey = 'id_s';
    protected $fillable = [
      'id_s',
      'calle',
      'numext',
      'numint',
      'colonia',
      'municipio',
      'estado',
      'cp',
      'tel',
      'id_e'
    ];
}
