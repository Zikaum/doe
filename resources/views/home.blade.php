<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/header.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />
  <title>Doe</title>
</head>
<body style="margin: 0px">

  <header>
    <img id="header-image" src="{{asset('images/DoeAgora.png')}}" alt="Doe Agora"/>
    <nav>
        <div style="display: flex; flex: 1; justify-content: center;">
            <a class="a_selected" href="/">INICIO</a>
            <a href="/requirements">DESEJA DOAR?</a>
        </div>
        <div class="login">
            <div>
                <img width="40" src="{{asset('images/GroupIcon.png')}}" alt="Cadastre-se" />
                <a href="/register">CADASTRE-SE</a>
            </div>
            <div>
                <img width="30px" src="{{asset('images/ProfileIcon.png')}}" alt="Entre" />
                <a href="/login">ENTRAR</a>
            </div>
        </div>
    </nav>
  </header>


  <div class="main">
      inicio
  </div>

  <footer></footer>
</body>
</html>



