<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntriansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antrians', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('nomor_antrian');
            $table->string('nama');
            $table->string('nama_perusahaan');
            $table->unsignedBigInteger('layanan_id');
            $table->foreign('layanan_id')
                ->references('id')
                ->on('layanans')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antrians');

    }
}
