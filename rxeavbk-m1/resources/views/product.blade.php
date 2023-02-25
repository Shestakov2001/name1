@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$product->name}}</h1>
        <div class="d-flex">
            <img src="/public/img/{{$product->photo}}" alt="">
         
            @if($product->Category->name)
            <p>{{$product->Category->name}}</p>
            @else
            <p>{{$product->name}}</p>
            
            @endif
          

            <a href="/public/cart/add/{{$product->id}}">В корзину</a>
        </div>
    </div>
@endsection