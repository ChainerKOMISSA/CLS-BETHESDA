<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traitement extends Model
{
    use HasFactory;
    protected $table = 'traitement';
    protected $primaryKey = 'id';
    protected $connection = 'mysql';

    protected $fillable = ["date", "patient_id", "plaintes", "diagnostic", "analyse_id", "resultat", "diagnostic", "produit_id", "montant", "paiement"];

    public function patient(){
        return $this->belongsTo('App\Models\Patient');
    }

    public function produit(){
        return $this->belongsTo('App\Models\Produit');
    }

    public function analyse(){
        return $this->belongsTo('App\Models\Analyse');
    }
}
