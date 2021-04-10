<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    public $timestamps = false;
	protected $primaryKey = 'id_t';
	protected $nom_t;
	protected $desc_t;
	protected $carac_t;
    use HasFactory;
}
