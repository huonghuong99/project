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
            $table->bigInteger('ma_san_bong')->unsigned();
            $table->bigInteger('ma_tieu_chuan')->unsigned();
            $table->datetime('khung_gio_bat_dau');
            $table->datetime('khung_gio_ket_thuc');
            $table->integer('gia_cho_30_phut');
            $table->primary(['ma_san_bong', 'ma_tieu_chuan', 'khung_gio_bat_dau', 'khung_gio_ket_thuc'], 'gia_primary_key');
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
