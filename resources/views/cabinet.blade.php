@extends('layout.app')
@section('title', 'Design.pro - личный кабинет')
@section('body')
<div class="user-pages">
    <div class="cabinet">
        <div class="cabinet__blocks cabinet__blocks-left ">
            <h1 class="head font-b">
                Личный кабинет
            </h1>
            <div class='font-r'>
            <?= Auth::User()->cabinet()?>
            @can('user', User::class)
                Роль: {{$role->name}}
            @endcan
            @can('admin', User::class)
                Роль: {{$role->name}}
            @endcan
            </div>
        </div>
        <div class="cabinet__blocks">

            <form action="/DeAuthorisate" method="POST" class="form__box cabinet__button cabinet__forms">
                @csrf
                @method('get')
                <input type="submit" class="form__input cabinet__button" value="Выйти из аккаунта">
            </form>
        </div>
    </div>

</div>
@endsection