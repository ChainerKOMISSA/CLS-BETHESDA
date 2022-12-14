<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analyse extends Model
{
    use HasFactory;
    protected $table = 'analyse';
    protected $primaryKey = 'id';
    protected $connection = 'mysql';

    protected $fillable = ["nom", "description", "prix", "prixCMS"];

    public function traitements(){
        return $this->hasMany('App\Models\Traitement');
    }

}
