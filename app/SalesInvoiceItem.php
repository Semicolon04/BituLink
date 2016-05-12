<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SalesInvoice;
class SalesInvoiceItem extends Model
{
    
	public function salesInvoice() {
		return $this->belongsTo('App\SalesInvoice');
	}
}
