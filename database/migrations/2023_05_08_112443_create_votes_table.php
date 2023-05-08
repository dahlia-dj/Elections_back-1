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
        Schema::create('votes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->unsignedInteger('id_election');
            $table->unsignedInteger('id_bulletin');
            $table->unsignedInteger('id_participant');
            $table->foreign(('id_election'))->references('id')->on('elections')->onDelete('cascade');
            $table->foreign(('id_bulletin'))->references('id')->on('bulletins')->onDelete('cascade');
            $table->foreign(('id_participant'))->references('id')->on('participants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('votes');
    }
};
