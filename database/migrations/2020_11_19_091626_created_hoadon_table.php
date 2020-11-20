<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatedHoadonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadon', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id')->unsigned();
            $table->integer('user_id')->nullable();
            $table->string('hoten')->nullable();
            $table->integer('sdt')->nullable();
            $table->string('diachi')->nullable();
            $table->integer('thanhtien')->nullable();
            $table->integer('trangthai')->nullable();
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
        Schema::dropIfExists('hoadon');
    }
}
