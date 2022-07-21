<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    public function up():void
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('url',1000);
            $table->timestamps();
        });
    }

    public function down():void
    {
        Schema::dropIfExists('characters');
    }
}
