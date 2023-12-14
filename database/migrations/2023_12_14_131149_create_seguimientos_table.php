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
        Schema::create('seguimientos', function (Blueprint $table) {
            $table->id();
            $table->integer('idEst');
            $table->string('traAct'); //SI NO
            $table->string('ofiAct'); // 1CP, 2CP, 3CP, ...
            $table->integer('satEst'); //0-3
            $table->date('fecSeg');
            $table->integer('estSeg'); //1-6
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seguimientos');
    }
};
