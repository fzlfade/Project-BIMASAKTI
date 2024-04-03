<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\produk;


class PembeliController extends Controller
{
    public function view(): View{
        $data = produk::all('seller_id')->paginate(10);
        return view ('Pembeli/daftar-produk')->with('data',$data);
    }
}

