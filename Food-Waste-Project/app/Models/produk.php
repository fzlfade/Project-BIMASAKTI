<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class produk extends Model
{
    use HasFactory,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'seller_id',
        'nama_produk',
        'foto_produk',
        'detail_produk',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tabelproduk';

}
