@extends('layout.app')
@section('title', 'Design.pro - регистрация')
@section('body')
<div class="user-pages">
    <h1 class="head font-b">
        Форма регистрации
    </h1>

    <form action="/Registrate" method="POST" class="form__box">
        @csrf
        @method('post')
        <input type="text"name="FIO" class="form__input" placeholder="ФИО" required>
        <input type="text" name="login" class="form__input" placeholder="Логин" required>
        <input type="email" name="email" class="form__input" placeholder="Почта" required>
        <input type="password" name="password" class="form__input" placeholder="Пароль" required>
        <input type="password" name="password_confirmed" class="form__input" placeholder="Подтверждение пароля" required>
        @error('password')
        <p class="error-block">
            {{$message}}
        </p>
        @enderror
        <label>
            <input type="checkbox" name="sogl" class="form__input"required>
            Обработка пользовательских данных?
        </label>
        <input type="submit" class="form__input" value="Отправить">
    </form>

</div>
@endsection