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
        Schema::create('data_selects', function (Blueprint $table) {
            $table->bigIncrements('id_select')->primary()->unsigned();
            $table->enum('kategori', ['ya', 'tidak']);
            $table->unsignedBigInteger('data_teks')->nullable();

            $table->index('data_teks');
            $table->foreign('data_teks')->references('id_text')->on('data_texts')
                ->onDelete('set null')
                ->onUpdate('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_selects');
    }
};
