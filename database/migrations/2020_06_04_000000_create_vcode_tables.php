<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVcodeTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vcodes', function (Blueprint $table) {

            $table->increments('id');
            $table->string('channel', 20);
            $table->string('target', 100);
            $table->string('vcode', 20);
            $table->string('content', 200);
            $table->timestamp('sent_at', 0);
            $table->timestamp('expried_at', 0);
            $table->timestamps();

            $table->index('mobile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vcodes');
    }
}