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
        Schema::create('data_texts', function (Blueprint $table) {
            $table->bigIncrements('id_text')->unsigned();;
            $table->string('Judul')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();

            $table->primary('id_text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_texts');
    }
};
