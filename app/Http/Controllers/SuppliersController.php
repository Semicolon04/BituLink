<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Supplier;
use App\PI;

class SuppliersController extends Controller
{
    public function viewSuppliers() {
			$suppliers = Supplier::all();
			return view('suppliers.index', array('suppliers' => $suppliers));
		}
		public function viewSupplier(Supplier $supplier) {
			return view('suppliers.supplier', array('supplier' => $supplier));
		}
		public function newSupplier() {
			return view('suppliers.new');
		}
	
		public function createSupplier(Request $request) {
			$this->validate($request, [
				'name' => 'required',
				'email' => 'email'
			]);
			$supplier = new Supplier;
			$supplier->name = $request->name;
			$supplier->address = $request->address;
			$supplier->email = $request->email;
			$supplier->tAmount = 0;
			$supplier->save();
			return redirect('/suppliers');
		}
		public function editSupplier(Supplier $supplier	) {
			return view('suppliers.edit	', array('supplier' => $supplier));
		}
		public function updateSupplier(Request $request, Supplier $supplier) {
			$supplier->name = $request->name;
			$supplier->address = $request->address;
			$supplier->email = $request->email;
			$supplier->save();
			return redirect(url('/suppliers/' . $supplier->id ));
		}
		public function deleteSupplier(Supplier $supplier) {
			$supplier->delete();
			return redirect('/suppliers/');
		}
}
