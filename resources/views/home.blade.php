<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
  <title>Doe</title>
  @livewireStyles
</head>
<body style="margin: 0px">

  @livewire('header', ['headerSelected' => 0])

  <div class="main">


    <div style="display: flex; flex-direction: column; margin: px 3px 0px 3px;">
      <div style="height: 40px; background-color: #EEBBB7; margin-bottom: 6px;"></div>
      <div style="background-color: #D9D9D9; padding: 7px; width: 300px;">
        <p>LOCAL: </p>
        <p>QUANTIDADE DE BOLSAS: </p>
        <p>MOTIVO: </p>
        <div>
          <img src="{{asset('images/Doe.png')}}" width="150" alt="">
        </div>
      </div>
    </div>

    
  </div>

  @livewire('footer')
  @livewireScripts
</body>
</html>



