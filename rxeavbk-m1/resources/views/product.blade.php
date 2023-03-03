@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$product->name}}</h1>
        <div class="d-flex">

            <div class="cards_solo">

                <img src="/public/img/{{ $product->photo }}" alt="" class="catimg_solo img-fluid">

            </div>

            <div class="right">

                <div class="cardsinfo">

                    <div>
                        <p class="pros_name">{{ $product->Category->name }}</p>
                    </div>
                        <p>{{$product->name}}</p>
                    <div>
                        <p class="pros_price">{{ $product->price }} руб.</p>
                    </div>



                </div>

                <div class="character">


                    <p class="pros">Харакетристики товара: </p>

                    <p class="pros">Страна: {{ $product->country }}</p>

                    <p class="pros">Модель: {{ $product->model }}</p>

                    <p class="pros">Год выпуска: {{ $product->year }}</p>

                </div>

            <a href="/public/cart/add/{{$product->id}}">В корзину</a>

        </div>
    </div>
@endsection
