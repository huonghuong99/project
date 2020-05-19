<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gia', function (Blueprint $table) {
            $table->id('ma_san_bong');
            $table->bigInteger('ma_tieu_chuan');
            $table->time('khung_gio_bat_dau');
            $table->time('khung_gio_ket_thuc');
            $table->integer('gia_cho_30_phut');
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
        Schema::dropIfExists('gia');
    }
}
