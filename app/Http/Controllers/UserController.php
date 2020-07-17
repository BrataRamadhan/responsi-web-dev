<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use App\Kategori;
use App\Brand;


use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    // public function __construct(){
    //     $this->middleware(function($request, $next){
    //         if(Gate::allows('manage-users')) return $next($request);
    //         abort(403, 'Anda tidak memiliki cukup hak akses');
    //     });
    // }

    public function tampildata(){
        return view ('produk');
    }
}
