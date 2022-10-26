<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soin', function (Blueprint $table) {
            $table->id();
            $table->foreignId("produit_id")->constrained("produit");
            $table->foreignId("traitement_id")->constrained("traitement");
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
        Schema::dropIfExists('soin');
    }
}
