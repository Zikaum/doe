<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
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
            <form action="/register" method="post">
                @csrf
                <h1>CADASTRO:</h1>
                <div style="display: flex;flex-direction: column;justify-content: center;">
                    <p>
                        <label for="name">Nome: </label>
                        <input name="name" class="long_input" type="text">
                    </p>
                    <p>
                        <label for="age">Idade: </label>
                        <input name="age" type="number" class="short_input" type="text">
                    </p>
                    <div>
                        <p>
                            <label for="city">Cidade: </label>
                            <input name="city" type="text">
                        </p>
                        <p>
                            <label for="state">Estado: </label>
                            <input name="state" type="text">
                        </p>
                        <p style="margin-right: 0px; width: 100%;">
                            <label for="cep">Cep: </label>
                            <input name="cep" type="number">
                        </p>
                    </div>
                    <p>
                        <label for="email">Email: </label>
                        <input name="email" class="long_input" type="text">
                    </p>
                    <p>
                        <label for="password">Senha: </label>
                        <input name="pass" class="long_input" type="text">
                    </p>
                    <p>
                        <label for="blood_type">Tipo Sanguíneo: </label>
                        <input name="bloodType" class="short_input" type="text">
                    </p>
                </div>
                <button>CADASTRAR</button>
            </form>
            <img src="{{asset('images/RegisterImage.png')}}" alt="RegisterImage">
        </div>
    </div>

    <footer></footer>
</body>
</html>