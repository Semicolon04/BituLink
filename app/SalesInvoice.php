<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SalesInvoiceItem;

class SalesInvoice extends Model
{
    
	public function items() {
		return $this->hasMany('App\SalesInvoiceItem');
	}
}
