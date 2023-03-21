<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado conversor</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Resultado da conversão:</h1>
  <main>
    <?php 
      $real = floatval($_GET['entradavalor']);
      echo "Valor digitado: " . $real . "<br>";
      $cotacao = 5.26;
      echo "Cotação: " . $cotacao . "<br>";
      $result = $real / $cotacao;
      echo "Resultado: " . $result . "<br>";

    ?>
    <input type="button" onclick="javascript:history.back()" value="Voltar">
  </main>
</header>

  
</body>
</html>