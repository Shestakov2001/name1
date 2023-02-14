@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Корзина</h1>
        @foreach($carts as $c)
            <p>{{$c->Product->name}}</p>
            <p>{{$c->count}}</p>
            <p>{{$c->Product->price * $c->count}}</p>
            <a href="/public/cart/minus/{{$c->id}}">-</a>
            <a href="/public/cart/plus/{{$c->id}}">+</a>
        @endforeach
        @if($carts->count() > 0)<a href="/public/cart/pay/{{$carts[0]->id_buscet}}">Оформить</a>@endif
    </div>
@endsection