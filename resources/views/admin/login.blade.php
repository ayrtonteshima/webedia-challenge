<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Webedia</title>
  <link rel="stylesheet" href="{!! asset('css/login.css') !!}">
</head>
<body>
  <div class="container">
    <div class="container__login">
      <strong>Acesse a Área administrativa</strong>
      <a href="{!! route('login.google') !!}" title="Login pelo seu email do google">
        <img src="{!! asset('imgs/login-google-button.png') !!}" alt="" width="300">
      </a>
    </div>
  </div>
</body>
</html>