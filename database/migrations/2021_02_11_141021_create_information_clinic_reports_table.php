<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationClinicReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information_clinic_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clinic_information_id');
            $table->unsignedBigInteger('report_clinic_id');
            $table->timestamps();

            $table->foreign('clinic_information_id')->references('id')->on('clinic_informations')->onDelete('cascade');
            $table->foreign('report_clinic_id')->references('id')->on('report_clinics')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('information_clinic_reports');
    }
}
