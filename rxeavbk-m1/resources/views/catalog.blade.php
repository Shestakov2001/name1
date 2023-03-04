@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="potis">
        <h1>Каталог</h1>


            <form action="/public/catalog">
                <select name="filter" id="filter">
                    <option value ="created_at">Новизна</option>
                    <option value ="price">Цена</option>
                    <option value ="name">Название</option>
                    <option value ="year">Год</option>
                </select>
                <select name="sort" id="filter" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option value="bol">По убыванию</option>
                    <option value="men">По возрастанию</option>
                </select>
                <select name="category" id="category">
                    <option value ="all">Все</option>
                        @foreach($category as $c)
                            <option value="{{$c->id}}">{{$c->name}}</option>
                        @endforeach
                </select>

            <button type="submit">Применить</button>

            </form>

            <a href="/public/catalog"> <button>Сбросить фильтры</button></a>

        <div class="container">
            <div class="pifo">
            @foreach($products as $p)
                @if ($p->count != 0)
                    <div class="bordercard col-lg-4 p-3">
                        <div class="imgcard">
                            <a href="/public/product/{{ $p->id }}">
                                <img src="/public/img/{{$p->photo}}" alt=""class="ifot img-fluid">
                            </a>
                        </div>

                        <div class="infocard ps-4 d-flex justify-content-around">
                            <p class="m-0">{{$p->name}}</p>
                            <p class="m-0">{{$p->price}} руб.</p>
                            @guest @else <a href="/public/cart/add/{{$p->id}}"><button class="cupi" >Купить</button></a>@endguest
                            <br>
                            @guest @else <a href="/public/product/{{$p->id}}"><button class="podr" >Подробнее</button></a>@endguest
                        </div>
                    </div>
                @endif
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
