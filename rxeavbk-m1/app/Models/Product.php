<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $fillable=[
        'id',
        'name',
        'price',
        'year',
        'id_cat',
        'photo',
        'model',
        'country',
        'count',
        'created_at',
        'updated_at',
    ];

    public function Category(){
        return $this->hasOne(Category::class,'id','id_cat');
    }
}
