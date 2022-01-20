<div class="d-flex flex-column align-items-center">
    <form method="POST" style="width: 70%">
        @csrf
        <div class="mb-3">
            <input type="email" class="form-control" id="ModalLogin_email" name="email"
                   placeholder="Электронная почта" value="{{$data->email}}">
            @isset($error['email'][0])
            <label class="text-danger">{{$error['email'][0]}}</label>
            @endisset

        </div>
        <div class="mb-3">
            <input type="password" class="form-control"  id="ModalLogin_password" name="password"
                   placeholder="Пароль"  value="{{$data->password}}" >
            @isset($error['password'][0])
            <label class="text-danger">{{$error['password'][0]}}</label>
            @endisset
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="ModalLogin_remember" name="remember">
            <label class="form-check-label">
                Запомнить
            </label>
        </div>
        <div class="mt-3 d-flex justify-content-center align-items-center ">
            <button type="button" onclick="login()" class="btn btn-primary buton">Войти</button>

        </div>
    </form>
</div>
