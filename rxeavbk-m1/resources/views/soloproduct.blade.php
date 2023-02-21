@extends('layouts.app')

@section('content')

    <div class="container d-flex w-100">

        <div class="cards_solo">

            <img src="/public/img/{{$p->photo}}" alt=""class="catimg_solo img-fluid">

                <div class="cardsinfo">
                    
                    <p class="pros_name">{{$p->name}}</p>

                    <p class="pros_price">{{$p->price}} руб.</p>

                    <button class="btn btn-succes">Купить</button>

                </div>
        </div>
        
        <div class="character">

            <p class="pros">Харакетристики товара:</p>

            <p class="pros">Страна:{{$p->country}}</p>

            <p class="pros">Модель:{{$p->model}}</p>

            <p class="pros">Год выпуска:{{$p->year}}</p>

        </div>

    </div>
@endsection