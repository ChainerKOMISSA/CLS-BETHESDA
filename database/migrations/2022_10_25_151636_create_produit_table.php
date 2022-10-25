<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit', function (Blueprint $table) {
            $table->id();
            $table->string("nomproduit");
            $table->string("indication");
            $table->integer("prixproduit");
            $table->foreignId("type_id")->constrained("type");
            $table->integer("qtestock");
            $table->integer("qtevendue");
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("produit", function(Blueprint $table){
            $table->dropForeign("type_id");
        });
        Schema::dropIfExists('produit');
    }
}
