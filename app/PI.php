<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PI extends Model
{
    public function items() {
		return $this->hasMany(PIItem::class);
	}
	
	public function po() {
		return $this->hasOne(PO::class);
	}
	
	protected $table = 'p_i_s';
}
