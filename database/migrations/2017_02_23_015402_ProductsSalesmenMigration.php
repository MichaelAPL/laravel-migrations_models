<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsSalesmenMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('products', function(Blueprint $table)
      {
        $table->foreign('salesman_id')->references('id')->on('salesmen')
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
      Schema::table('products', function(Blueprint $table)
      {
        $table->dropForeign('products_salesman_id_foreign');        
      });
    }
}
