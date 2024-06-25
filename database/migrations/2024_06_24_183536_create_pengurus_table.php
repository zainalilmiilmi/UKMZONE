<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengurusTable extends Migration
{
    public function up()
    {
        Schema::create('pengurus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prodi');
            $table->string('position');
            $table->string('image_path')->nullable();
            $table->unsignedBigInteger('organization_id');
            $table->timestamps();

            // Tambahkan foreign key constraint
            $table->foreign('organization_id')->references('id')->on('ukm')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengurus');
    }
}
