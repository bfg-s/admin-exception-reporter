<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laravel_exceptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 255);
            $table->string('code');
            $table->text('message');
            $table->string('file', 255);
            $table->integer('line');
            $table->text('trace');
            $table->string('method');
            $table->string('path', 255);
            $table->text('query');
            $table->text('body');
            $table->text('cookies');
            $table->text('headers');
            $table->string('ip');
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
        Schema::dropIfExists('laravel_exceptions');
    }
};
