<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom',100);
            $table->string('num_cni',10);
            $table->integer('age');
            $table->char('sexe',1)->default('F');
            $table->string('statut')->default('E');    
            $table->unsignedInteger('id_region');
            $table->foreign('id_region')->references('id')->on('regions')->onDelete('cascade');
            $table->string('login',30);
            $table->string('pwd',100);
            $table->string('email',300)->nullable();
            $table->boolean('etat')->default('1'); 
            $table->string('tel',20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
