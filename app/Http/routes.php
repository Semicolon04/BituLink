<?php
use App\Customer;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome') ;
});
Route::group([] ,function() {
	Route::get('/suppliers', 'SuppliersController@viewSuppliers');
	Route::get('/suppliers/{supplier}', 'SuppliersController@viewSupplier')
		->where(['supplier' => '[0-9]+']);
	Route::get('/suppliers/new', 'SuppliersController@newSupplier');
	Route::post('/suppliers/create', 'SuppliersController@createSupplier');
	Route::get('/suppliers/{supplier}/edit', 'SuppliersController@editSupplier');
	Route::patch('/suppliers/{supplier}', 'SuppliersController@updateSupplier');
	Route::delete('/suppliers/{supplier}', 'SuppliersController@deleteSupplier');
});
Route::group([] ,function() {
    
Route::get('/customers', 'CustomerController@viewCustomers');
Route::get('/customers/new', 'CustomerController@newCustomer');
Route::post('customers/create', 'CustomerController@createCustomer');
Route::get('/customers/{customer}/details', 'CustomerController@viewCustomer');
Route::get('/customers/{customer}/edit', 'CustomerController@editCustomer');
Route::patch('/customers/{customer}', 'CustomerController@updateCustomer');
Route::delete('/customers/{customer}', 'CustomerController@deleteCustomer');
});
             
Route::group([], function() {
	Route::get('/sales_invoices', 
			   'SalesInvoicesController@viewAllSI');
	Route::get('/sales_invoices/{sales_invoice}', 
			   'SalesInvoicesController@viewSI')
		->where('sales_invoice', '[0-9]+');
	Route::get('/sales_invoices/new',
			  'SalesInvoicesController@newSI');
	Route::post('/sales_invoices/', 
				'SalesInvoicesController@createSI');
	Route::get('/sales_invoices/{sales_invoice}/edit', 
			  'SalesInvoicesController@editSI');
	Route::patch('/sales_invoices/{sales_invoice}',
				'SalesInvoicesController@updateSI');
	Route::delete('/sales_invoices/{sales_invoice}', 
				  'SalesInvoicesController@deleteSI');
	Route::get('/sales_invoices/{sales_invoice}/new_item', 
			  		'SalesInvoicesController@newItem');
	Route::post('/new', function() {  });
});

Route::group([], function() {
	Route::get('/pi', 'PICtrl@viewAll');
	Route::get('/pi/{pi}', 'PICtrl@viewPI')->where('pi', '[0-9]+');
	Route::get('/pi/new', 'PICtrl@newPI');
	Route::post('/pi/', 'PICtrl@createPI');
	Route::get('/pi/{pi}/edit', 'PICtrl@editPI');
	Route::patch('/pi/{pi}', 'PICtrl@updatePI');
	Route::delete('/pi/{pi}', 'PICtrl@deletePI');
	Route::post('/pi/{pi}', 'PICtrl@addPIItem');
	Route::get('/po/{pi}', ['uses' =>'PICtrl@addPO']);
});
Route::get('/voucher/new','VoucherController@newVoucher');
Route::get('/voucher','VoucherController@viewVouchers');

Route::post('/voucher/create', 'VoucherController@addVoucher');
Route::get('/voucher/{voucher}', 'VoucherController@viewVouchers');
Route::get('/voucher/{voucher}/edit', 'VoucherController@editVoucher');
Route::patch('/voucher/{voucher}', 'VoucherController@updateVoucher');
Route::get('/voucher/{voucher}/', 'VoucherController@viewVoucher');
Route::delete('/voucher/{voucher}/', 'VoucherController@deleteVoucher');




	
