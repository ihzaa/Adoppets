<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postings', function (Blueprint $table) {
            $table->id();
            $table->dateTime('informasi_vaksin');
            $table->string('jenis_kelamin');
            $table->string('ras');
            $table->longText('kondisi_fisik');
            $table->integer('umur');
            $table->string('makanan');
            $table->longText('warna');
            $table->string('lokasi');
            $table->string('jenis_hewan');
            $table->longText('informasi_lain');
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('postings');
    }
}
