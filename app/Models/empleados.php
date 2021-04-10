<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_e';
    protected $fillable = [
      'id_e',
      'nom_e',
      'app',
      'apm',
      'fednac',
      'tel_e',
      'calle',
      'num_ext_e',
      'num_int_e',
      'col_e',
      'cp_e',
      'antiq',
      'id_c'

    ];
}
