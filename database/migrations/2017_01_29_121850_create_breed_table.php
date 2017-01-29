<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBreedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breeds', function(Blueprint $table){
            $table->increments('id');
            $table->string('breed', 45);
            $table->string('country', 45)->nullable();
            $table->string('origin', 45)->nullable();
            $table->string('coat', 45)->nullable();
            $table->string('pattern', 45)->nullable();
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
        //
    }
}
