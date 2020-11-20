<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
class CreateduserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('password');
            $table->string('hoten');
            $table->string('diachi');
            $table->string('sdt');
            $table->string('email')->unique();
            $table->string('loai');
            $table->string('trangthai');
            $table->timestamp('email_verified_at')->nullable();         
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert([
            'name' => 'admin',
            'password' => Hash::Make('123456'),
            'hoten' => 'Võ Thái Hùng',
            'diachi' => 'Q7',   
            'sdt' => '0852925296',
            'email' => 'admin@example.com',
            'loai' => 'user',
            'trangthai' => 'active',

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
