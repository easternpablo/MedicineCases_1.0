<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNumbersTable extends Migration
{
    public function up()
    {
        Schema::create('numbers', function (Blueprint $table) {
            $table->id();
            $table->string('secret_number',8);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('numbers');
    }
}
