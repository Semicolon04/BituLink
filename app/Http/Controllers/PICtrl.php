<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\PI;
use App\PIItem;
use App\PO;



class PICtrl extends Controller
{
    public function viewAll() {
		$all = PI::all();
		return view('pi/all', ['pis' => $all]);
	}
	public function viewPI(PI $pi) {
		return view('pi/pi', ['pi' => $pi]);
	}
	public function newPI(Supplier $supplier) {
		$customers = Supplier::all();
		return view('pi/new',['supplier' => $supplier]);
	}
    public function createPI(Request $request,Supplier $supplier) {
		$pi = new PI;
		$pi->description = $request->description;
		$pi->date = $request->date;
		//$supplier->pi()->save($pi);
		$pi->billing_address = $request->billing_address;
		$pi->shipping_address = $request->shipping_address;
        $pi->save();
		return redirect('/pi/' . $pi->id);
	}
	
	public function editPI(Pi $pi) {
		return view('pi/edit', ['pi' => $pi]);
	}
	public function updatePI(Request $request, PI $pi) {
		$pi->description = $request->description;
		$pi->date = $request->date;
		$pi->billing_address = $request->billing_address;
		$pi->shipping_address = $request->shipping_address;
		$pi->save();
		
		return redirect('/pi/' . $pi->id);
	}
	public function deletePI(PI $pi) {
		$pi->delete();
		return redirect('/pi/');
	}
	
	public function addPIItem(Request $request, PI $pi) {
		$pi_item = new PIItem;
		$pi_item->item_code = $request->item_code;
		$pi_item->description = $request->description;
		$pi_item->quantity = $request->quantity;
		$pi_item->price = $request->price;
		$pi->items()->save($pi_item);
		//return redirect('/pi/' . $pi->description);
		return back();

	}
    public function addPO(PI $pi) {
        $pis = PI::find($pi->id);
		$po = new PO;
		$po->description = $pis->description;
		$po->shipping_address= $pis->shipping_address;
		$po->billing_address = $pis->billing_address;
		$pis->po()->save($po);
		//return redirect('/pi/' . $pi->id);
		return back();
}
}