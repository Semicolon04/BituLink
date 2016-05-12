<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePOTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_o_s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('p_i_id')->unsigned()->index();
            $table->string('description');
            $table->string('billing_address');
            $table->string('shipping_address');
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
        Schema::drop('p_o_s');
    }
}
