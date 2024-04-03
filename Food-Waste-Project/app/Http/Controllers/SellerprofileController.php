<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Seller;
use App\Models\sellerprofile;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;




class SellerprofileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('Penjual.tokoedit', [
            'seller' => $request->sellerprofile(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Seller $request): RedirectResponse
    {
        $request->sellerprofile()->fill ($request->validated());

        $request->user()->save();

        return Redirect::route('Penjual.tokoedit')->with('status', 'profile-updated');
    }

    
}


// class SellerprofileController extends Controller
// {
//     // TAMPILAN
    
//     // }

//     /**
//      * edit
//      *
//      * @param  mixed $id
//      * @return View
//      */
//     public function show(string $id): View
//     {
//         //get product by ID
//         $sellerprofile = Seller::findOrFail($id);

//         //render view with product
//         return view('   .Penjual', compact('seller'));
//     }
    // EDIT
    // public function edit(Request $request)
    // {
    //     $data = [
    //         'nama_toko' => $request->namatoko,
    //         'foto_profil_toko'=>$request->foto_profil_toko,
    //         'alamat_toko'=>$request->alamat_toko,
    //     ];

    //     DB::table('Seller')->insert($data);

    //     return $data;
    // }   
    
// }
