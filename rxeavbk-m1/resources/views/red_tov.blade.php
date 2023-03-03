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
    <form action="/public/admin/redtovsubmit/{{$product->id}}" method="post" enctype="multipart/form-data">@csrf
        <input type="text" class="form-control" placeholder="name" name="name" value="{{$product->name}}" required>
        <input type="text" class="form-control" placeholder="photo" name="photo" value="{{$product->photo}}" required>
        <input type="text" class="form-control" placeholder="price" name="price" value="{{$product->price}}" required>
        <input type="text" class="form-control" placeholder="year" name="year" value="{{$product->year}}" required>
        <input type="text" class="form-control" placeholder="country" name="country" value="{{$product->country}}" required>
        <input type="text" class="form-control" placeholder="model" name="model" value="{{$product->model}}" required>
        <input type="text" class="form-control" placeholder="count" name="count" value="{{$product->count}}" required>
        <input type="text" class="form-control" placeholder="id_cat" name="id_cat" value="{{$product->id_cat}}" required>
        <input type="submit">
    </form>
@endsection
