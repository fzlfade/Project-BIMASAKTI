<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Seller extends Model
{
    use HasFactory,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'nama_toko',
        'foto_profil_toko',
        'alamat_toko',
        'harga_produk'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sellerprofiles';

}
