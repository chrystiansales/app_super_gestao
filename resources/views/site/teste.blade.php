<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>View de Teste</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #667eea, #764ba2);
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .container {
      background-color: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      padding: 2rem 3rem;
      border-radius: 1rem;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      text-align: center;
    }

    h3 {
      font-size: 2rem;
      margin-bottom: 1.5rem;
    }

    .result {
      font-size: 1.25rem;
      line-height: 2rem;
    }

    .result span {
      font-weight: bold;
      color: #ffe066;
    }
  </style>
</head>

<body>
  <div class="container">
    <h3>Resultado Soma</h3>
    <div class="result">
      P1 = <span id="p1">{{ $p1 }}</span> <br />
      P2 = <span id="p2">{{ $p2 }}</span> <br />
      Soma = <span id="soma">{{ $p1 + $p2 }}</span>
    </div>
  </div>
<!--
  <script>
    // Exemplo JS para simular os valores caso precise testar localmente
    // Remova ou ajuste conforme uso com back-end (ex: Blade)
    const p1 = parseFloat(document.getElementById('p1').textContent) || 0;
    const p2 = parseFloat(document.getElementById('p2').textContent) || 0;
    const soma = p1 + p2;

    document.getElementById('soma').textContent = soma;
  </script>
-->

</body>

</html>
