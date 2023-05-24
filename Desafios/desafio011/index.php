<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio Porcentagem</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php 
    $preco = $_REQUEST['preco'] ?? '0';
    $reaj = $_REQUEST['reaj'] ?? '0';

  ?>
  <main>
    <h1>Reajustador de Preços</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <label for="preco">Preço do Produto (R$)</label>
    <input type="number" name="preco" id='preco' min="0.10" step="0.01">
    <label for="reaj">Qual será o percenutal de reajuste? <b>(<output id="reaj"><?= $reaj?></output>%)</b></label>
            <input id="reaj" name="reaj" type="range" min="0" max="100" value="<?= $reaj?>" oninput="p.value=value"></input>
    <input type="submit" value="Reajustar">
  </form>
  </main>
  <?php 
    $aumento = $preco * $reaj / 100;
    $novo = $preco + $aumento;
  ?>
  <section>
    <h2>Resultado do Reajuste</h2>
    <p>O produto que custava R$<?=$preco?>, com <strong><?=$reaj?> de aumento</strong> vai passar a custar <strong>R$<?=$novo?></strong> a partir de agora.</p>
  </section>

  <script>
    //Declarações automáticas:
    mudavalor()

    function mudaValor() {
      p.innerText = reaj.value;
    }
  </script>
</body>
</html>