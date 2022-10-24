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
    protected $fillable = ["nomproduit", "prixproduit", "type_id"];

    public function type(){
        return $this->belongsTo(Type::class);
    }

}
