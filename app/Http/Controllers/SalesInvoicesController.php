<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\SalesInvoice;

class SalesInvoicesController extends Controller
{
    public function viewAllSI() {
		$all = SalesInvoice::all();
		return view('sales_invoices/index', ['sales_invoices' => $all]);
	}
	public function viewSI(SalesInvoice $sales_invoice) {
		return view('sales_invoices/sales_invoice', 
					['sales_invoice' => $sales_invoice]);
	}
	public function newSI() {
		return view('sales_invoices.new');
	}
	public function createSI(Request $request) {
		$si = new SalesInvoice;
		$si->description = $request->description;
		$si->date = $request->date;
		$si->billing_address = $request->billing_address;
		$si->shipping_address = $request->shipping_address;
		$si->save();
		return redirect('/sales_invoices/' . $si->id);
	}
	public function editSI(SalesInvoice $sales_invoice) {
		return view('sales_invoices.edit', 
					['sales_invoice' => $sales_invoice]);
	}
	public function updateSI(Request $request, SalesInvoice $sales_invoice) {
		$sales_invoice->description = $request->description;
		$sales_invoice->date = $request->date;
		$sales_invoice->billing_address = $request->billing_address;
		$sales_invoice->shipping_address = $request->shipping_address;
		$sales_invoice->save();
		
		return redirect('/sales_invoices/' . $sales_invoice->id);
	}
	public function deleteSI(SalesInvoice $sales_invoice) {
		$sales_invoice->delete();
		return redirect('/sales_invoices/');
	}
	public function newItem(Request $request, SalesInvoice $sales_invoice) {
		return view('sales_invoices.new_item', 
					['sales_invoice' => $sales_invoice]);
	}
}
