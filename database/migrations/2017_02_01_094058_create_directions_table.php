<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('adress');
            $table->string('city');
            $table->string('region');
            $table->string('country');
            $table->string('postal_code');
            $table->integer('salesman_id')->unsigned();
            $table->foreign('salesman_id')->references('id')->on('salesmen')
            ->onDelete('cascade');
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
        Schema::drop('directions');
    }
}
