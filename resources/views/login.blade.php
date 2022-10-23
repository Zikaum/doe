<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <title>Doe</title>
</head>
<body style="margin: 0px;">

    <header>
        <img id="header-image" src="{{asset('images/DoeAgora.png')}}" alt="Doe Agora"/>
        <nav>
            <div style="display: flex; flex: 1; justify-content: center;">
                <a @if ($headerSelected == 0) class="a_selected" @endif href="/">INICIO</a>
                <a @if ($headerSelected == 1) class="a_selected" @endif href="/requirements">DESEJA DOAR?</a>
            </div>
            <div class="login">
                <div @if ($headerSelected == 2) class="a_selected" @endif>
                    <img width="40" src="{{asset('images/GroupIcon.png')}}" alt="Cadastre-se" />
                    <a href="/register">CADASTRE-SE</a>
                </div>
                <div @if ($headerSelected == 3) class="a_selected" @endif>
                    <img width="30px" src="{{asset('images/ProfileIcon.png')}}" alt="Entre" />
                    <a href="/login">ENTRAR</a>
                </div>
            </div>
        </nav>
      </header>

      <div class="main">
          <div style="display: flex; justify-content: center; align-items: center;">
            <form action="/login" method="POST">
                <h1>LOGIN</h1>
                <p>
                    <label for="email">Email: </label>
                    <input type="text" name="email">
                </p>
                <p>
                    <label for="pass">Senha: </label>
                    <input type="password" name="pass">
                </p>
                <button>
                    <img src="{{asset('images/ProfileIcon.png')}}" width="25" alt="ProfileIcon">
                    <p>ENTRAR</p>
                </button>
            </form>
            <img src="{{asset('images/Doe.png')}}" width="150" alt="Doe">
        </div>
      </div>

    <footer></footer>
</body>
</html>