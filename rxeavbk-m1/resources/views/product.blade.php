@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$product->name}}</h1>
        <div class="d-flex">
            <img src="/public/img/{{$product->photo}}" alt="">
            <p>{{$product->Category->name}}</p>
            <a href="/public/cart/add/{{$product->id}}">Купи2</a>
        </div>
    </div>
@endsection