<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePIItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_i_items', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('p_i_id')->unsigned()->index();
			$table->string('item_code');
			$table->string('description');
			$table->integer('quantity');
			$table->decimal('price', 5, 2);
			
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
        Schema::drop('p_i_items');
    }
}
