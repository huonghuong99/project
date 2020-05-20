<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanGhepChiTietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_ghep_chi_tiet', function (Blueprint $table) {
            $table->bigInteger('ma_san_ghep');
            $table->bigInteger('ma_san_don');
            $table->primary(['ma_san_ghep', 'ma_san_don']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('san_ghep_chi_tiet');
    }
}
