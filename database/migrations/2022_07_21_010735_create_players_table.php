<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    public function up():void
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name',1000);
            $table->foreignId('character_id')->constrained('characters');
            $table->timestamps();
        });
    }

    public function down():void
    {
        Schema::dropIfExists('players');
    }
}
