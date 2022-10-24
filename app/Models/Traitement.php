<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traitement extends Model
{
    use HasFactory;
    protected $table = 'patient';
    protected $primaryKey = 'id';
    protected $connection = 'mysql';
    
}
