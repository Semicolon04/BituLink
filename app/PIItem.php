<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PIItem extends Model
{
    public function pi() {
		return $this->belongsTo(PI::class);
	}
	protected $table = 'p_i_items';
	
}
