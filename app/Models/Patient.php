<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $table = 'patient';
    protected $primaryKey = 'id';
    protected $connection = 'mysql';
    protected $fillable = ["nom", "prenom", "age", "quartier", "sexe", "telephone"];

    public function traitements(){
        return $this->hasMany(Traitement::class);
    }

}
