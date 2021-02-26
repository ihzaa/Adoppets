<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinic_informations', function (Blueprint $table) {
            $table->id();
            $table->string('nama_klinik');
            $table->string('picture');
            $table->longText('deskripsi');
            $table->integer('no_telepon');
            $table->string('email');
            $table->unsignedBigInteger('user_id');
            $table->string('lokasi');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinic_informations');
    }
}