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

                <select name="category" id="category">
                    @foreach($category as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                </select>

            <button type="submit">Применить</button>
            </form>

        <div class="container">
            <div class="pifo">
            @foreach($products as $p)
                <div class="bordercard col-lg-4 p-3">
                    <div class="imgcard">
                        <a href="/public/soloproduct/{{ $p->id }}">
                            <img src="/public/img/{{$p->photo}}" alt=""class="ifot img-fluid">
                        </a>
                    </div>
                    <div class="infocard ps-4 d-flex justify-content-around">
                        <p class="m-0">{{$p->name}}</p>
                        <p class="m-0">{{$p->price}} руб.</p>
                        @guest @else <button class="cupi" href="/public/product/{{$p->id}}">Купить</button>@endguest
                    </div>
                    
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection