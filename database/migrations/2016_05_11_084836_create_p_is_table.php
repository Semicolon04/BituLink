<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePIsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_i_s', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->string('description');
           // $table->integer('supplier_id')->unsigned()->index();
			$table->string('date');
			$table->string('billing_address');
			$table->string('shipping_address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('p_i_s');
    }
}
