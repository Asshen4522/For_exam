
<header class="header">
    <div class="header__left">
        <a href="/main" class="font-b header__elem">Design.pro</a>
    </div>
    <div class="header__right">
        <a href="/main" class="header__elem font-r">Главная</a>
        <a href="/registration" class="header__elem font-r">Зарегестрироваться</a>
        @guest
            <a href="/authorisation" class="header__elem font-r">Войти</a>
        @endguest
        @auth
            <button class="header__elem font-r" id="menu_button"><?= Auth::User()->getFio()?></button>
            <ul class="header__account-menu-close" id="menu_list">
                <li><a href="/cabinet" class="header__elem font-r">Личный кабинет</a></li>
                <li><a href="#" class="header__elem font-r">Мои заявки</a></li>
                <li><a href="#" class="header__elem font-r">Новая заявка</a></li>
                <li><a href="/DeAuthorisate" class="header__elem font-r">Выход</a></li>
            </ul>
        @endauth

    </div>
</header>