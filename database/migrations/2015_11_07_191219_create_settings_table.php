<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('site_maintenance');
             $table->integer('site_register');
              $table->integer('site_auto_active');
               $table->string('sitename');
               $table->string('siteurl');
               $table->string('sitemail');
               $table->string('driver');
               $table->longtext('message_maintenance');
               $table->string('site_smtp_host');
               $table->string('site_smtp_email');
               $table->string('site_smtp_port');
               $table->string('site_smtp_pass');
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
        Schema::drop('settings');
    }
}
