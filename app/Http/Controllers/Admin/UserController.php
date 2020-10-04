<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Pegawai;
use App\Models\Aktifity;
use App\User;

class UserController extends Controller
{
    public function view($user)
    {
    	$user = User::where('hash',$user)->first();
    	return view('admin.user-view', compact(['user']));
    }


    public function delete($user)
    {
    	User::where('hash',$user)->delete();
    	return redirect('/admin/user');
    }
}