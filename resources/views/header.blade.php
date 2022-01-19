<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    <title>Work</title>
</head>
<body>
<header class="p-2 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center mb-md-0">
                <input type="image" class="logo_img" onclick="location.href='/'" src="{{asset("storage/logo-avito.png")}}">
                @if(!Auth::check())

                @endauth
            </ul>
            <div class="text-end nav">
                @if(Auth::check())
                    <label class="nav-link px-2 link-light">{{request()->user()->email}}</label>
                    <button type="button" class="btn btn-outline-primary me-2"
                            onclick="location.href='{{route('logout')}}'">
                        Выйти
                    </button>
                @else
                    <li><a href="/registration" class="nav-link px-2 link-light">Вход и регистрация</a></li>
                    <div>
                        <button type="button" class=" text-white btn btn btn-primary mx-2"
                                onclick="location.href='{{route('login')}}'">Разместить объявление
                        </button>
                    </div>

                @endauth
            </div>
        </div>
    </div>
</header>
<main>
    @yield("bodyContent")

</main>
{{--<footer
    class="d-flex flex-wrap justify-content-around py-3 my-4 border-top @if($_SERVER["REQUEST_URI"]!="/bdView")fixed-bottom @endif">
    <div>
        <span class="text-muted">© 2022 Company, Inc</span>
    </div>
    <div>
        <span class="text-muted"></span>
    </div>
    <div>
        <a class="text-muted text-decoration-none" href="https://www.google.ru/">email@example.com</a>
    </div>
</footer>--}}
</body>
</html>
