<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
    <title>Super Gestão - @yield('titulo')</title>
</head>

<body>
    @include('site._partials.topo')
    @yield('conteudo')
</body>

</html>
