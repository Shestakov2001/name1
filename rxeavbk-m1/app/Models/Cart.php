<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = "carts";

    protected $fillable=[
        "id",
        "id_buscet",
        "id_user",
        "id_product",
        'created_at',
        'updated_at',
    ];

    public function user(){
        return $this->hasOne(User::class,'id','id_user');
    }

    public function product(){
        return $this->hasOne(Product::class,'id','id_product');
    }
}
