<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sellerprofiles extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'nama_toko',
        'foto_profil_toko',
        'alamat_toko',
    ];
}
