<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchiveDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archive_donations', function (Blueprint $table) {
            $table->increments('id');

             $table->string('name',50);
              $table->string('price',50);
               $table->enum('payment_method',['cash','check']);
                $table->integer('user_id');
                 $table->string('date',50);
                  $table->integer('office_id')->unsigned();
            $table->foreign('office_id')->references('id')->on('offices');
             $table->integer('cat_id')->unsigned();
            $table->foreign('cat_id')->references('id')->on('catogreys');
             $table->enum('proccess_type',['edit','delete']);
              $table->longtext('reason');
               $table->integer('order_id');

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
        Schema::drop('archive_donations');
    }
}
