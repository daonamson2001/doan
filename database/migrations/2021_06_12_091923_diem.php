<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Diem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Diem', function (Blueprint $table) {
            $table->string('idSV');
            $table->string('idMH');
            $table->string('idHK');
            $table->foreign('idSV')->references('idSV')->on('SinhVien');
            $table->foreign('idMH')->references('idMH')->on('MonHoc');
            $table->foreign('idHK')->references('idHK')->on('HocKy');
            $table->double('DiemLan1');
            $table->double('DiemLan2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Diem');
    }
}