<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('nombre');
            $table->date('fecha_creacion');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
