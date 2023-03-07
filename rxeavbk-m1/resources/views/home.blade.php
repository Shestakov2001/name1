@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Заказы</h1>

        <div class ="cartbp">

            @foreach($carts as $c)

            <div class ="cartname">

                <p>{{$c->Product->name}}</p>

            </div>

            <div class = "cartcount">

                <p>{{$c->Product->model}}</p>

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

                <form class="otpr" action="/public/home/accept" method="get">
                <input type="text" name="password">
                <button type="submit">Отправить</button>
                </form>
    </div>
    <div class="container">
       <div class="cartbp">
        @foreach($order as $o)

        <div class ="cartname">

            <p>{{$o->Product->name}}</p>

        </div>

        <div class = "cartcount">

            <p>{{$o->Product->model}}</p>

            <p>{{$o->count}}</p>

        </div>

        <div class ="cartprice">

            <p>{{$o->Product->price * $o->count}}</p>

        </div>

        @endforeach
    </div>
    </div>
@endsection
