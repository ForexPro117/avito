@extends('header')
<title>Главная</title>
<link rel="stylesheet" href="{{ asset('css/items.css') }}"
@section('bodyContent')
    <div class="container d-flex flex-column align-items-center mt-5">
        <form class="input-group mt-1 " method="POST" action="/workList">
            @csrf
            <select class="form-select form-select-search rounded-start">
                <option selected>Любая категория</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <input type="text" class="form-control" placeholder="Поиск по обьявлениям" name="search">
            <button class="btn btn-outline-primary" type="submit">Найти</button>
        </form>

    </div>
    <h3 class="container mt-4">Рекомендации для вас</h3>
    <div class="container d-flex flex-row flex-wrap mt-5">
        @for($i=0;$i<30;$i++)
            <div class="border card ">
                <div id="carouselExampleIndicators{{$i}}" class="carousel slide" data-interval="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators{{$i}}" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators{{$i}}" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators{{$i}}" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators{{$i}}" data-bs-slide-to="3"
                                aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators{{$i}}" data-bs-slide-to="4"
                                aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        <a href="/jj" target="_blank">
                            <div class="carousel-item active">
                                <img src="{{asset("storage/12668852199.jpg")}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset("storage/12668852199.jpg")}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset("storage/12668852199.jpg")}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset("storage/12668852199.jpg")}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset("storage/12668852199.jpg")}}" class="d-block w-100" alt="...">
                            </div>
                        </a>
                    </div>
                    <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleIndicators{{$i}}"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleIndicators{{$i}}"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <a href="/jj" target="_blank"><label class="text">Машина б/у</label> </a>
                <label class="price">100 000 ₽</label>
                <label class="text-other">Ижевск, Индустриальный район</label>
                <label class="text-other">Сегодня 16:23</label>
            </div>
        @endfor
    </div>
@endsection
