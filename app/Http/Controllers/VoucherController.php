<?php

namespace App\Http\Controllers;

use App\Voucher;
use Illuminate\Http\Request;

use App\Http\Requests;

class VoucherController extends Controller
{
    public function viewVouchers(){
       
            $vouchers = Voucher::all();
            return view('voucher.index',['vouchers'=>$vouchers]);
        
    }
    public function newVoucher() {
        return view('voucher.new');
    }

    public function addVoucher(Request $request){
        $this->validate($request, [
            'vNo' => 'required',
        ]);
        $voucher = new Voucher;
        $voucher ->vNo = $request->vNo;
        $voucher ->amount = $request->amount;
        $voucher ->description = $request->description;
        $voucher ->vender = $request->vender;
        $voucher ->paymentType = $request->paymentType;
        $voucher ->signedBy = $request->signedBy;
        $voucher ->approvedBy = $request->approvedBy;
        $voucher ->save();
        return redirect('/voucher');

    }
    public function viewVoucher(Voucher $voucher) {
        return view('voucher.voucher', ['voucher' => $voucher]);
    }
    public function editVoucher(Voucher $voucher) {
        return view('voucher.edit	', ['voucher' => $voucher]);
    }
    public function updateVoucher(Request $request, Voucher $voucher) {
        $voucher ->vNo = $request->vNo;
        $voucher ->amount = $request->amount;
        $voucher ->description = $request->description;
        $voucher ->vender = $request->vender;
        $voucher ->paymentType = $request->paymentType;
        $voucher ->signedBy = $request->signedBy;
        $voucher ->approvedBy = $request->approvedBy;
        $voucher ->save();
        return redirect(url( '/voucher/'. $voucher->id . '/details'));
    }
    public function deleteVoucher(Voucher $voucher) {
        $voucher->delete();
        return redirect('/voucher/');
    }
}
