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
        Schema::create('it_e', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->integer('age');
            $table->text('addres');
            $table->text('day');
            $table->integer('hour');
            $table->date('date_time');
            $table->timestamps();
        });
    }

    /*
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('it_e');
    }
};
