<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

    protected $fillable=[
        'id',
        'cat',
        'created_at',
        'updated_at',
    ];

    public function Product(){
        return $this->belongsTo(Products::class,'id','id_cat');
    }
}
