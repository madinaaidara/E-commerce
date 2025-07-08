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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable();  
            $table->string('email', 50)->unique();
            $table->string('password', 255);
            $table->string('adresse', 255)->nullable();
            $table->string('numtel', 20)->nullable();
            $table->enum('role', ['admin', 'visiteur', 'client', 'livreur']);
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
        Schema::dropIfExists('users');
    }
};
