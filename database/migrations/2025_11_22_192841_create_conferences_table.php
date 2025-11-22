<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('conferences', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description');
        $table->string('lecturers');
        $table->date('date');
        $table->time('time');
        $table->string('address');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('conferences');
}
}
