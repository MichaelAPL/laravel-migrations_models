<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('products_tags', function (Blueprint $table) {
        $table->integer('product_id')->unsigned();
        $table->integer('tag_id')->unsigned();

        $table->foreign('product_id')->references('id')->on('products')
          ->onDelete('cascade');
        $table->foreign('tag_id')->references('id')->on('tags')
          ->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products_tags');
    }
}
