<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanDonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_don', function (Blueprint $table) {
            $table->id('ma');
            $table->string('ten_san_don');
            $table->bigInteger('ma_san_lon');
            $table->bigInteger('ma_tieu_chuan');
            $table->bigInteger('deleted_by');
            $table->softDeletes();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('san_ddon');
    }
}
