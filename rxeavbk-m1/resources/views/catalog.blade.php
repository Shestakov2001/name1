@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="potis">
        <h1>Каталог</h1>
            <form action="public/catalog">
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

        <div class="row">
            @foreach($products as $p)
                <div class="col-lg-4">
                    <div><img src="/public/img/{{$p->photo}}" alt=""class="img-fluid"></div>
                        <p>{{$p->name}}</p>
                        <p>{{$p->price}}</p>
                    @guest else <a href="/public/product/{{$p->id}}">Купи</a>@endguest
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection