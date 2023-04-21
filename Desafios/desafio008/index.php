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
  <?php 
    // Área de declarações:
    $num = $_GET['num'] ?? 1; // Colocar esse ?? 1 para que se não mandar nada, começar vazio o input de número, ele não dar erro que não tem nada, já começar com 1 na tela.
    
    //tentei colocar aqui o cálculo, mas dá erro e fica feio no resultado final, melhor numa section abaixo do main, para ficar num espaço dedicado...

  ?>
  <main>
    <h1>Informe um número</h1>
    <form action="" method="get">
      <label for="num">Número</label>
      <input type="number" name="num" id="num" required step="1">
      <input type="submit" value="Calcular">
    </form>
  </main>
  <section>
    <h2>Resultado Final:</h2>
    <?php 
      $rq = sqrt($num); // Aqui é a função que já abrevia e facilita, mas pode ser feito da forma de baixo, só colocando o 1/2 no lugar de 1/3.
      $rc = $num ** (1/3);// Aqui é o número elevado à um terço, que é o mesmo que raiz cúbica.
  
      //echo "<p>A raiz quadrada de $num é $rq</p>";
      //echo "<p>A raiz cúbica de $num é $rc</p>";

      echo "<p>Analisando o número <strong>$num</strong></p>";
      echo "<ul><li>A sua raiz quadrada é " . number_format($rq, 3, ",", ".") . "</li>";
      echo "<li>A sua raiz cúbica é " . number_format($rc, 3 , ",", ".") . "</li></ul>";
    ?>
  </section>
</body>
</html>