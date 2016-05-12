<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesInvoiceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_invoice_items', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->string('item_code');
			$table->string('description');
			$table->integer('quantity');
			$table->decimal('price', 5, 2);
        });
    }
	

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sales_invoice_items');
    }
}
