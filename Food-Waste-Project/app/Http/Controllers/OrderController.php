<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Seller;
use App\Models\order;
use App\Models\produk;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{

    // Order View
    // public function vieworder(): RedirectResponse
    // {
        // if(Auth::user()->hasRole('seller')){
        //     $dataid = Auth::user()->id;
        //     $dataorder = order::where('seller_id',$dataid)->first();
        //     $dataproduk = produk::where('id',$dataorder->produk_id);
        //     $databuyer = User::where('id',$dataorder->buyer_id);
        //     $dataseller = User::where('id',$dataorder->seller_id);
        //     return  redirect()->route('riwayatpesanan')->with('dataorder',$dataorder)
        //         ->with('dataproduk',$dataproduk)
        //         ->with('databuyer',$databuyer)
        //         ->with('dataseller',$dataseller);
        // };

        // if(Auth::user()->hasRole('buyer')){
            // $dataid = Auth::user()->id;
            // $dataorder = order::where('buyer_id',$dataid)->first();
            // $dataproduk = produk::where('id',$dataorder->produk_id);
            // $databuyer = User::where('id',$dataorder->buyer_id);
            // $dataseller = User::where('id',$dataorder->seller_id);
            // return redirect()->route('listriwayatpesanan')->with('dataorder',$dataorder)->with('dataproduk',$dataproduk)
            // ->with('databuyer',$databuyer)->with('dataseller',$dataseller)
            // ;
        // };
    // }


    // Buyer Function
    public function buyerstatus(Request $request, $idproduk): RedirectResponse
    {

        $dataid = Auth::user()->id;
        $dataproduk = produk::where('id',$idproduk)->first();

        order::create([
            'status'=>'pending',
            'seller_id'=>$dataproduk->seller_id,
            'buyer_id'=>$dataid,
            'produk_id'=>$dataproduk->id
        ]);
        return redirect()->route('viewproduk')->with(['Succses'=>'Pesanan Berhasil Harap Tunggu']);
    }

    


    public function buyervieworder(): View 
    {
        $id = Auth::user()->id;
        $data = db::table('orders')->where('buyer_id',$id)
                ->join('users','orders.seller_id','=','users.id')
                ->join('tabelproduk','orders.produk_id','=','tabelproduk.id')
                ->select('orders.*','users.*','tabelproduk.*')
                ->get();
        return View('buyerorder')
        ->with('id',$id)
        ->with('data',$data)
        ;
    }

    public function sellervieworder(): View 
    {
        $id = Auth::user()->id;
        $data = db::table('orders')
                ->where('orders.seller_id',$id)
                ->join('users','orders.buyer_id','=','users.id')
                ->join('tabelproduk','orders.produk_id','=','tabelproduk.id')
                ->select('orders.id as orders_id','orders.*','users.*','tabelproduk.*')
                ->get();
        return View('sellerorder')
        ->with('id',$id)
        ->with('data',$data)
        ;
    }

    // Seller Function Terima
    public function sellerstatusterima($idorder)
    {        
        // $datastatus = order::where('id',$idorder)->first();

        // $datastatus->update([
        order::where('id',$idorder)->first()->update([
            'status'=>'Tersedia',
        ]); 
        return redirect()->route('sellervieworder')->with(['Succses'=>'Oke']);
    }

    // Seller Function Tolak
    public function sellerstatustolak(Request $request,$idorder)
    {        

        order::where('id',$idorder)->first()->update([
            'status'=>'Tidak tersedia',
        ]); 
        return redirect()->route('sellervieworder')->with(['Succses'=>'Oke']);
    }
    
}   


