<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PenjualController extends Controller 
{

   public function profiltoko(): View
   {
      
      return view ('Penjual/profiltoko');
   }
   
   public function tokoedit(): View
   {
      $id = Auth::user()->id;
      $data = Seller::where('user_id',$id)->first();
      return view ('Penjual/tokoedit')->with('data',$data);
   }

   
   public function editprofile(Request $request) : RedirectResponse
   
   {
      $request->validate([
         
         'foto_profil_toko' => 'image|mimes:jpeg,jpg,png|max:2048',
         'alamat_toko'=> 'required | string |max:100'
      ]);

      // $image = $request->file('foto_profil_toko');
      // $image->storeAs('public/img/foto_profile_toko', $image->hashName());

      $userid = Auth::user()->id;
      $data = Seller::where('user_id', $userid)->first();
      

      if ($request->hasFile('foto_profil_toko')) {

         //upload new image
         $foto_file = $request->file('foto_profil_toko');
         $foto_ekstensi = $foto_file->extension();
         $foto_nama = date('ymdhis') . '.' . $foto_ekstensi;
         $foto_file->move(public_path('foto'), $foto_nama);

         //delete old image
         // $oldimage = $data->foto_profil_toko;
         // $oldimage->delete();

         //update product with new image
         $data->update([
            'foto_profil_toko'    => $foto_nama,
            'alamat_toko'         => $request->alamat_toko,
         ]);}
         
         //update product without image
      else { 
         $data->update([
         'alamat_toko'         => $request->alamat_toko,
      ]);}

      

      return redirect()->route('Penjual.tokoedit')->with(['success' => 'Data Berhasil Diubah!']);
   }

  
}



