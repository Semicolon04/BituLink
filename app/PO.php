<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PO extends Model
{
    public function poi() {
		return $this->belongsTo(PI::class);
	}
    protected $table = 'p_o_s';
    //
}
