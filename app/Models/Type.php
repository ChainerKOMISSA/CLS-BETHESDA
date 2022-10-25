<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $table = 'type';
    protected $primaryKey = 'id';
    protected $connection = 'mysql';
    protected $fillable = ["idtype", "libelle"];

    public function produits(){
        return $this->hasMany(Produit::class);
    }

}
