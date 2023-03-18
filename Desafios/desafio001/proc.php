<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <header>
      <h1>Resultado</h1>
    </header>
    <p>
      <?php 
        $n = $_GET["numero"] ?? 0;
        echo "<p>O número escolhido foi $n.";
        echo "<br>O número anterior é: " . $n-1 . ".";
        echo "<br>O número posterior é: " . $n+1 . ".";
      ?>
    </p>
    <!-- <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button> -->
    <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
  </main>
</body>
</html>