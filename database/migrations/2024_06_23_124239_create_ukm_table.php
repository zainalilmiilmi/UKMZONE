<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ukm', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('image_path');
            $table->text('visi')->nullable(); // Tambah kolom visi
            $table->text('misi')->nullable(); // Tambah kolom misi
            $table->text('kegiatan')->nullable(); // Tambah kolom kegiatan
            $table->string('image_kegiatan')->nullable(); // Tambah kolom image_kegiatan
            $table->timestamps();
        });
    }

    /**
     * Batalkan migrasi.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ukm');
    }
};
