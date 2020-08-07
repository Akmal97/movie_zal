<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4 ">
  <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">Movie_zal</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Список новинок</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Категории
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Триллер</a>
              <a class="dropdown-item" href="#">Боевик</a>
              <a class="dropdown-item" href="#">Комедия</a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto mr-2">
          @if (Auth::check())
            <li class="nav-item"><a href="#" class="nav-link">{{ Auth::user()->getNameOrUserName() }}</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Личеый кабинет</a></li>
            <li class="nav-item"><a href="/" class="nav-link">Выйти</a></li>
          @else
            <li class="nav-item"><a href="{{ route('auth.signup') }}" class="nav-link">Зарегистрироваться</a></li>
            <li class="nav-item"><a href="/" class="nav-link">Войти</a><li>
          @endif
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Что ищем?" aria-label="Search">
          <button class="btn btn-success my-2 my-sm-0" type="submit">Найти</button>
        </form>
      </div>
  </div>
</nav>