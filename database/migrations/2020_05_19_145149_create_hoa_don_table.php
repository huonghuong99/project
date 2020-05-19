<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoaDonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoa_don', function (Blueprint $table) {
            $table->id('ma');
            $table->time('khung_gio_bat_dau');
            $table->time('khung_gio_ket_thuc');
            $table->time('ngay_dat');
            $table->string('sdt_dat_don');
            $table->integer('ma_trang_thai_duyet_don');
            $table->bigInteger('updated_by');
            $table->bigInteger('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoa_don');
    }
}
