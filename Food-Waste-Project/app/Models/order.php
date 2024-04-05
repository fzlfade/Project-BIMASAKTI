<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class order extends Model
{
    use HasFactory,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'status',
        'seller_id',
        'buyer_id',
        'produk_id',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orders';

}
