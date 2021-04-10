<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasteles extends Model
{
    public $timestamps = false;
	protected $primaryKey = 'id_p';
	protected $id_p;
	protected $nom_p;
	protected $desc_p;
	protected $carac_p;
	protected $extras;
	protected $tam_p;
	protected $tiempprep;
	protected $precio ;
    use HasFactory;
}
