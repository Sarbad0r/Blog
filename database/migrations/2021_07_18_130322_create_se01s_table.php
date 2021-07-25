<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSe01sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('se01s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string("password");
            // image соз да ича
            $table->string("ABOUT");
            $table->string("birthday");
            //ичада таблицаи бала месози
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
        Schema::dropIfExists('se01s');
    }
}
