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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categorieId');
            $table->string('nom', 150);
            $table->decimal('prix', 10, 2);
            $table->integer('quantiteProduit')->default(1);
            $table->integer('stock')->nullable();
            $table->string('image', 255)->nullable();
            $table->timestamps();

            $table->foreign('categorieId')->references('id')->on('categories')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
};
