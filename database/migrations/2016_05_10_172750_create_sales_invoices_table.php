<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->string('description');
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
        Schema::drop('sales_invoices');
    }
}
