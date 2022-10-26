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
            $table->foreignId("patient_id")->constrained("patient");
            $table->date("date");
            $table->string("plaintes");
            $table->string("diagnostic");
            $table->string("statut");
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
