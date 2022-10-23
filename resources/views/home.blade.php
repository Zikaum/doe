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

    @for ($i = 0; $i < 5; $i++)
      @livewire('post', ['data' => ["local" => "local", "quant" => "xx", "motivo" => "porque sim"]])
    @endfor

    
  </div>

  @livewire('footer')
  @livewireScripts
</body>
</html>



