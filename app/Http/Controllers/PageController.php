<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Produk;
use \App\Models\Items;
use App\Models\Transactions;
use Auth;

class PageController extends Controller
{
    public function home()
    {
        $produk = Produk::all();
        return view('index', compact('produk'));
    }


    public function search(Request $req)
    {
    	if(empty($req->q)){
    		return view('search', ['result' => Produk::all()]);
    	}
    	$result = Produk::where('nama','LIKE','%'.$req->q.'%')->get();

    	if( $result->isEmpty() ){
    		return view('search', ['noresult' => 'Produk tidak di temukan']);
    	} else {
    		return view('search', ['result' => $result]);
    	}
    }


    public function show($nama)
    {
        $produk = Produk::where('pulsa_op',$nama)->first();
        return view('view', ['produk' => $produk]);
    }


    public function payment($type, $order_id)
    {
        $data = Transactions::where(['order_id' => $order_id, 'status' => 'pendding'])->firstOrFail();


        if($type = 'voucher'){
            return view('payment.voucher', ['data' => $data]);
        }
    }


    public function transaction()
    {
        if(Auth::user()){
            $transaction = Transactions::where('email',Auth::user()->email);
            $success = Transactions::where(['email' =>  Auth::user()->email,'status' => 'success'])->count();

            return view('transaction', ['data' => $transaction->get(),'dataNum' => $transaction->count(), 'success' => $success]);
        } else {
            return view('transaction');
        }
    }


    public function account()
    {
        $transactions = Transactions::where(['email' => Auth::user()->email])->count();
        $success = Transactions::where(['email' => Auth::user()->email,'status' => 'success'])->count();
        $failed = Transactions::where(['email' => Auth::user()->email,'status' => 'failed'])->count();
        return view('account', ['transactions' => $transactions,'success' => $success,'failed' => $failed]);
    }
}