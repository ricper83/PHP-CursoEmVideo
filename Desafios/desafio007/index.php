<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <h1>Qual sua renda mensal?</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <label for="renda">Digite sua renda mensal:</label>
    <input type="number" name="renda" id="renda" required step="0.01">
    <input type="submit" name="renda" value="Calcular em salários mínimos">
    </form>
  </main>
  <section>
    <h2>Quantidade de salários mínimos:</h2>
    <?php 
      $renda = $_GET['renda'] ?? 0;
      $sMinBase = 1320;
      $sMin = (int)($renda / $sMinBase);


      echo "<p>Analisando sua renda de <strong>$renda</strong></p>";
      echo "<p>É o equivalente a " . $sMin . " salário(s) mínimo(s).</p>";
    ?>
  </section>
</body>
</html>