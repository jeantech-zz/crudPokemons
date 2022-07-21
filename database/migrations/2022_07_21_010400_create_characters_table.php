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
            $table->foreignId('character_id')->constrained('characters');
            $table->string('is_main_series',1000);
            $table->string('effect_changes',1000);
            $table->timestamps();
        });
    }

    public function down():void
    {
        Schema::dropIfExists('characters');
    }
}
