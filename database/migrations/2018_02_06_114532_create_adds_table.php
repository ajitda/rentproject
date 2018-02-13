<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('image');
            $table->boolean('type')->default(0);
            $table->integer('price');   
            $table->integer('host_id')->unsigned();
            $table->foreign('host_id')->references('id')->on('hosts');

            $table->integer('add_category_id')->unsigned();
            $table->foreign('add_category_id')->references('id')->on('add_catagories');

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
        Schema::dropIfExists('adds');
    }
}
