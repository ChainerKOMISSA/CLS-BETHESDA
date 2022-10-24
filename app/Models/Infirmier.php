<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infirmier extends Model
{
    use HasFactory;
    protected $table = 'infirmier';
    protected $primaryKey = 'id';
    protected $connection = 'mysql';

    protected $fillable = ["nom", "prenom", "grade"];

}
