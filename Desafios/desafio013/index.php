<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caixa Eletrônico</title>
  <link rel="stylesheet" href="style.css">
  <style>
    img.nota {
      height: 50px;
      margin: 5px;
    }
  </style>
</head>
<body>
  <?php 
    $saque = $_REQUEST['saque'] ?? 0;
	
    $resto = $saque;
    //Saque de 100
    //o floor é uma função de arredondamento pra baixo, pode ser usada no lugar de int que iria pegar a parte inteira.
    $tot100 = floor($resto/100);
    // ao invés de $resto = $resto % 100, pode simplificar dessa forma:
    $resto %= 100;
    
    //Saque de 50
    $tot50 = floor($resto/50);
    $resto %= 50;
    //Saque de 10
    $tot10 = floor($resto/10);
    $resto %= 10;
    //Saque de 20
    $tot20 = floor($resto/20);
    $resto %= 20;
    //Saque de 5
    $tot5 = floor($resto/5);
    $resto %= 5;
    //Saque de 2
    $tot2 = floor($resto/2);
    $resto %= 2;
    //Saque de 1
    $tot1 = floor($resto/1);
    $resto %= 1;
  ?>
  <main>
    <h1>Caixa Eletrônico</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get" >
      <label for="saque">Qual valor deseja sacar? (R$)<sup>*</sup></label>
      <input type="number" name="saque" id="saque" step="1" value="<?=$saque?>" required>
      <p style="font-size : 0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$20, R$10, R$5, R$2 e moedas de R$1.</p>
      <input type="submit" value="SACAR">
  </form>
  </main>
  <section>
    <h2>Saque de R$ <?=number_format($saque,2,",",".")?> realizado</h2>
    <p>O caixa eletrônico vai entregar-lhe as seguintes notas (ou moedas):</p>
    <ul>
      <li><img src="imagens/100-reais.jpg" alt="Nota de 100 reais" class="nota"><strong>x <?=$tot100?></strong></li>
      <li><img src="imagens/50-reais.jpg" alt="Nota de 50 reais" class="nota"><strong>x <?=$tot50?></strong></li>
      <li><img src="imagens/20-reais.jpg" alt="Nota de 20 reais" class="nota"><strong>x <?=$tot20?></strong></li>
      <li><img src="imagens/10-reais.jpg" alt="Nota de 10 reais" class="nota"><strong>x <?=$tot10?></strong></li>
      <li><img src="imagens/5-reais.jpg" alt="Nota de 5 reais" class="nota"><strong>x <?=$tot5?></strong></li>
      <li><img src="imagens/2-reais.jpg" alt="Nota de 2 reais" class="nota"><strong>x <?=$tot2?></strong></li>
      <li><img src="imagens/1-real.jpg" alt="Moeda de 1 real" class="nota"><strong>x <?=$tot1?></strong></li>
    </ul>
  </section>
</body>
</html>