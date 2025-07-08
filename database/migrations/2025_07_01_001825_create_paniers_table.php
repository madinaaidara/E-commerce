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
        Schema::create('paniers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('utilisateurId');
            $table->unsignedBigInteger('produitId');
            $table->decimal('total', 10, 2);
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
        Schema::dropIfExists('paniers');
    }
};
