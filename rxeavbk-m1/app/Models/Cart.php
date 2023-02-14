<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = "carts";

    protected $fillable=[
        'id',
        'id_buscet',
        'id_user',
        'id_product',
        'count',
        'created_at',
        'updated_at',
    ];

    public function User(){
        return $this->hasOne(User::class,'id','id_user');
    }

    public function Product(){
        return $this->hasOne(Product::class,'id','id_product');
    }
}
