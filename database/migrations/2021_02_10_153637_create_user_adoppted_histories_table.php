<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAdopptedHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_adoppted_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('posting_id');
            $table->boolean('status');
            $table->string('pertanyaan_1');
            $table->string('pertanyaan_2');
            $table->longText('pertanyaan_3');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('Users')->onDelete('cascade');
            $table->foreign('posting_id')->references('id')->on('postings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_adoppted_histories');
    }
}
