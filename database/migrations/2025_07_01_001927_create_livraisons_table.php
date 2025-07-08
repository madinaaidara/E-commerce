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
       Schema::create('livraisons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('commandeId');
            $table->date('dateLivraison')->nullable();
            $table->timestamps();

            $table->foreign('commandeId')->references('id')->on('commandes')->onDelete('cascade');
        });
            }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livraisons');
    }
};
