@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>О нас</h1>
        <div class="logos">
            <img src="/public/img/logo.png" width="360px" height="360px">
            <h1>Распечатай новый лист своей жизни</h1>
        </div>
    </div>

    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                @foreach ($Products as $prod)
                    @if ($loop->index == 0)
                        <div class="carousel-item active">
                            <img src="/public/img/{{ $prod->photo }}" class="d-block " alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{ $prod->name }}</h5>
                                <p>{{ $prod->price }} руб.</p>
                            </div>
                        </div>
                    @else
                        <div class="carousel-item">
                            <img src="/public/img/{{ $prod->photo }}" class="d-block " alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{ $prod->name }}</h5>
                                <p>{{ $prod->price }} руб.</p>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>
    </div>
@endsection
