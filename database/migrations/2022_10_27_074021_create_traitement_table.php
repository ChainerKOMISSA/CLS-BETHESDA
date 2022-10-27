<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraitementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traitement', function (Blueprint $table) {
            $table->id();
            $table->date("date");
            $table->foreignId("patient_id")->constrained("patient");
            $table->string("plaintes");
            $table->foreignId("analyse_id")->constrained("analyse");
            $table->string("resultat");
            $table->string("diagnostic");
            $table->foreignId("produit_id")->constrained("produit");
            $table->integer("montant");
            $table->string("paiement");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('traitement');
    }
}
