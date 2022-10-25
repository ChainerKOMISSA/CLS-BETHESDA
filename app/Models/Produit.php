<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $table = 'produit';
    protected $primaryKey = 'id';
    protected $connection = 'mysql';
    protected $fillable = ["nomproduit", "indication", "prixproduit", "type_id", "qtestock", "qtevendue"];

    public function type(){
        return $this->belongsTo(Type::class, 'id');
    }

}
