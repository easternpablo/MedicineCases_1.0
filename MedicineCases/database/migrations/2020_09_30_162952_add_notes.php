<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNotes extends Migration
{
    public function up()
    {
        Schema::table('notes', function (Blueprint $table) {
            $table->unsignedBigInteger('type_id')->after('file');
            $table->foreign('type_id')->references('id')->on('types');
        });
    }

    public function down()
    {
        Schema::table('notes', function (Blueprint $table) {
            //
        });
    }
}
