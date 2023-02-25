@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Корзина</h1>

        <div class ="cartbp">

            @foreach($carts as $c)
            
            <div class ="cartname">

                <p>{{$c->Product->name}}</p>
                
            </div>

            <div class = "cartcount">

                <p>{{$c->count}}</p>

            </div>

            <div class ="cartprice">

                <p>{{$c->Product->price * $c->count}}</p>

            </div>

            <div class = "cartminpl">

                <a href="/public/cart/minus/{{$c->id}}">-</a>

                <a href="/public/cart/plus/{{$c->id}}">+</a>

            </div>

            @endforeach

        </div>

        @if($carts->count() > 0)<a href="/public/cart/pay/{{$carts[0]->id_buscet}}">Оформить</a>@endif
        
    </div>

@endsection