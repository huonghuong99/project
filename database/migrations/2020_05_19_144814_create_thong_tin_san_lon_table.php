<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThongTinSanLonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thong_tin_san_lon', function (Blueprint $table) {
            $table->id('ma');
            $table->string('ten');
            $table->string('ten_duong_so_nha');
            $table->string('tien_ich');
            $table->string('loai_mat_san');
            $table->string('sdt_lien_he');
            $table->integer('ma_trang_thai_duyet_san');
            $table->softDeletes('deleted_at');
            $table->bigInteger('deleted_by');
            $table->bigInteger('ma_quan_huyen');
            $table->bigInteger('ma_chu_san');
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
        Schema::dropIfExists('thong_tin_san_lon');
    }
}
