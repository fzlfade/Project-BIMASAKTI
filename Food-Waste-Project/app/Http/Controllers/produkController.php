<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\produk;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class produkController extends Controller
{
    // Tampilan
    public function vieweditproduk(): View
    {
        $id = Auth::user()->id;
        $data = produk::where('seller_id',$id)->paginate(3);
        return view ('Penjual/produk')->with('data',$data);
    }

    public function editproduk($id): View
    {
        $data = produk::where('id',$id)->first();
        return view ('Penjual/editproduk')->with('data',$data);
    }

    public function editproduks(Request $request, $id)
    {
        $request->validate([
            'foto_produk' => 'image|mimes:jpeg,jpg,png|max:2048',
            'nama_produk'=> 'required | string |max:100',
            'detail_produk'=> 'required | string |max:100',
         ]);

        $data = produk::where('id',$id)->first();

        if ($request->hasFile('foto_produk')) {

            //upload new image
            $foto_file = $request->file('foto_produk');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . '.' . $foto_ekstensi;
            $foto_file->move(public_path('foto'), $foto_nama);
   
            //delete old image
            // $oldimage = $data->foto_profil_toko;
            // $oldimage->delete();
   
            //update product with new image
            $data->update([
               'foto_produk'    => $foto_nama,
               'nama_produk'    => $request->nama_produk,
               'detail_produk'  => $request->detail_produk
            ]);}
            
            //update product without image
         else { 
            $data->update([
            'nama_produk'          => $request->nama_produk,
            'detail_produk'        => $request->detail_produk
         ]);}

         return redirect()->route('vieweditproduk')->with(['success' => 'Data Berhasil Diubah!']);
    }
    
    public function viewtambahproduk(): View
    {
        return view ('Penjual/tambahproduk');
    }

    // Menambahkan Produk

    public function tambahproduk(Request $request): RedirectResponse
    {
        $request->validate([
            'foto_produk' => 'image|mimes:jpeg,jpg,png|max:2048',
            'nama_produk'=> 'required | string |max:100',
            'detail_produk'=> 'required | string |max:100',
         ]);

         $foto_file = $request->file('foto_produk');
         $foto_ekstensi = $foto_file->extension();
         $foto_nama = date('ymdhis') . '.' . $foto_ekstensi;
         $foto_file->move(public_path('foto'), $foto_nama);

        produk::create([
            'seller_id' => Auth::user()->id,
            'nama_produk' => $request->nama_produk,
            'foto_produk' => $foto_nama,
            'detail_produk' => $request->detail_produk,
         ]);        
         return redirect()->route('viewtambahproduk')->with(['success' => 'Data Berhasil Diubah!']);

         
    }

    // EDIT PRODUK
    
    
    // HAPUS PRODUK

    
}
