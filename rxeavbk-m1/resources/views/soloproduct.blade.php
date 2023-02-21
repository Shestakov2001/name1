@extends('layouts.app')

@section('content')

    <div class="container d-flex">

            <div class="cards_solo">

                <img src="/public/img/{{$p->photo}}" alt="" class="catimg_solo img-fluid">

                    
            </div>
            
            <div class="right">

                <div class="cardsinfo">
                            
                    <div><p class="pros_name">{{$p->name}}</p></div>

                    <div><p class="pros_price">{{$p->price}} руб.</p></div>

                    <button class="cupi">Купить</button>

                </div>

                <br>
                
                <br>

                <div class="character">
                    

                    <p class="pros">Харакетристики товара:</p>

                    <p class="pros">Страна:{{$p->country}}</p>

                    <p class="pros">Модель:{{$p->model}}</p>

                    <p class="pros">Год выпуска:{{$p->year}}</p>

                </div>
            </div>
    </div>

@endsection