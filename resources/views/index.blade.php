<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Webedia group</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <link rel="stylesheet" href="{!! asset('css/main.css') !!}">
    </head>
    <body>
        <div class="webedia">
          <header class="webedia__header">
            <h1 class="webedia__header__logo">
              <a href="{!! route('home') !!}" title="Página principal">
                <img src="{!! asset('imgs/webedia-logo.jpg') !!}" alt="Webedia group">
              </a>
            </h1>
            <button class="webedia__header__menu__btn" type="button"></button>
            <div class="webedia__header__menu">
              <nav class="webedia__header__menu__container webedia__container">
                <a href="#" title="link 1" class="webedia__header__menu__item">Link 1</a>
                <a href="#" title="link 2" class="webedia__header__menu__item">Link 2</a>
                <a href="#" title="link 3" class="webedia__header__menu__item">Link 3</a>
                <a href="#" title="link 4" class="webedia__header__menu__item">Link 4</a>
                <a href="#" title="link 5" class="webedia__header__menu__item">Link 5</a>
                <a href="#" title="link 6" class="webedia__header__menu__item">Link 6</a>
                <a href="#" title="link 7" class="webedia__header__menu__item">Link 7</a>
                <a href="#" title="link 8" class="webedia__header__menu__item">Link 8</a>
                <a href="#" title="link 9" class="webedia__header__menu__item">Link 9</a>
                <a href="#" title="link 10" class="webedia__header__menu__item">Link 10</a>
              </nav>
            </div>
          </header>
          <section class="webedia__content webedia__container webedia__home">
            <div class="webedia__posts">
              @foreach($posts as $k => $post)
              <article class="webedia__post {!! $k === 0 ? 'webedia__post--main' : '' !!}">
                <a href="#" title="Visualizar post">
                  <h3 class="webedia__post__title">{{ $post['title'] }}</h3>
                  <p class="webedia__post__description">{{ $post['description'] }}</p>
                  <div class="webedia__post__img">
                    <img src="{{ $post['image'] }}" alt="" />
                  </div>
                  <hr class="webedia__post__detail-separator">
                  <h4 class="webedia__post__subtitle">{{ $post['subtitle'] }}</h4>
                  <div class="webedia__post__texts">
                    <p>{{ $post['text'] }}</p>
                  </div>
                </a>
              </article>
              @endforeach
            </div>
          </section>
        </div>
        <script src="{!! asset('js/main.js') !!}"></script>
    </body>
</html>
