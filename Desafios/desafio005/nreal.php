<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado da análise</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <h1>Resultado da análise:</h1>
    <?php 
      $n = $_POST["n"] ?? 0;

      $int = (int)$n;
      $frac = $n - $int;

      //método que usei:
      //echo "<p>Analisando o número <strong>". number_format($n, 3, ",",".") ."</strong> informado pelo usuário:</p>";
      //echo "<p>O número inteiro é<strong> " . number_format($int, 0, ",", "."). "</strong></p>";
      //echo "<p>O número fracionário é<strong> " . number_format($frac, 3, ",",".") . "</strong></p>";
      
      //sem a formatação:
      //echo "<ul><li> A parte inteira do número é <strong>$int</strong></li>"

      //com a formatação final:
      echo "<ul><li>A parte inteira do número é <strong>" . number_format($int, 0, ",","."). "</strong></li>";
      echo "<li>A parte fracionária do número é <strong>" . number_format($frac, 3, ",", ".") . "</strong></li></ul>";
      
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
  </main>
</body>
</html>