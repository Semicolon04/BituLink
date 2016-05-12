<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Customer;
class CustomerController extends Controller
{
    public function viewCustomers() {
			$customers = Customer::all();
			return view('Customers.index', ['customers' => $customers]);
		}
		public function viewCustomer(Customer $customer) {
			return view('customers.customer', ['customer' => $customer]);
		}
		public function newCustomer() {
			return view('customers.new');
		}
		public function createCustomer(Request $request) {
			$this->validate($request, [
				'name' => 'required',
			]);
			$customer = new Customer;
			$customer->name = $request->name;
			$customer->address = $request->address;
			$customer->email = $request->email;
            $customer->phone = $request->phone;
			$customer->tAmount = 0;
			$customer->save();
			return redirect('/customers');
		}
		public function editCustomer(Customer $customer	) {
			return view('customers.edit	', ['customer' => $customer]);
		}
		public function updateCustomer(Request $request, Customer $customer) {
			$customer-> name = $request->name;
			$customer-> address = $request->address;
			$customer-> email = $request->email;
			$customer-> save();
			return redirect(url( '/customers/'. $customer->id . '/details'));
		}
		public function deleteCustomer(Customer $customer) {
			$customer->delete();
			return redirect('/customers/');
		}
}
