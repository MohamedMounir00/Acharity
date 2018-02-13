<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('country',50);
            $table->string('city',50);
            $table->string('address');
            $table->string('pesonal_id');
            $table->string('mobile_1');
            $table->string('mobile_2');
            $table->string('pirthdata');
            $table->string('digree');
            $table->integer('office_id')->unsigned();
            $table->foreign('office_id')->references('id')->on('offices');

            $table->enum('level',['user','admin']);
            $table->integer('group_admin');

            $table->rememberToken();
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
        Schema::drop('users');
    }
}
