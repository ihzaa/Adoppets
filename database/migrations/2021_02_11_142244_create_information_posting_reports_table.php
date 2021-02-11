<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationPostingReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information_posting_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('posting_id');
            $table->unsignedBigInteger('report_posting_id');
            $table->timestamps();

            $table->foreign('posting_id')->references('id')->on('postings')->onDelete('cascade');
            $table->foreign('report_posting_id')->references('id')->on('report_postings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('information_posting_reports');
    }
}
