<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('utilisateurId');
            $table->unsignedBigInteger('produitId');
            $table->dateTime('dateCommande')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('statut', 50)->nullable();
            $table->timestamps();

            $table->foreign('utilisateurId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('produitId')->references('id')->on('produits')->onDelete('cascade');
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
};
