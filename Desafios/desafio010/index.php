<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php 
    $atual = date("Y");
    $nasc = $_GET['nasc'] ?? '2000';
    $ano = $_GET['ano'] ?? $atual;
  ?>
  <main>
    <h1>Calculando sua idade</h1>
    <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
    <label for="nasc">Em que ano você nasceu?</label>
    <input type="number" name="nasc" id="nasc" require min="1900" max="<?=($atual-1)?>" value="<?=$nasc?>">
    <label for="ano">Quer saber de sua idade em que ano? (Atualmente estamos em <strong><?=$atual?></strong>)</label>
    <input type="number" name="ano" id="ano" require min="<?=($nasc+1)?>" value="<?=$ano?>">
    <input type="submit" value="Qual será minha idade?">
  </form>
  </main>
  <section>
    <?php 
      $idade = $ano - $nasc;
      $plural = "ano"; #aqui improvisei uma var para escrever "ano" ou "anos".
      if ($idade > 1) { #Se a idade for maior que 1,
        $plural = "anos"; #A var plural recebe "anos" ao invés de "ano". 
      }
    ?>
    <h2>Resultado</h2>
    <p>Quem nasceu em <?=$nasc?> vai ter <strong><?=$idade?> <?=$plural?></strong> em <?=$ano?>.</p> <!--Aqui troquei a palavra anos pela variável $plural, para pegar o resultado lá de cima e mostrar, deu certo :) -->
  </section>
</body>
</html>