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
  //aqui vi que é necessário este pequeno espaço php para colocar a informação que será puxada logo a seguir, do valor do salário mínimo:
    $minimo = 1_380.60;
    //interessante que este valor pode ser colocado com underline ao invés de vírgula(a partir do php7).
    //parece que mais informações podem ser colocadas aqui junto.
    $salario = $_GET['sal'] ?? $minimo; #Geralmente coloca 0, mas aqui vamos colocar o valor padrão de 1380.60, afinal não queremos valores menores que o salário mínimo, então entra uma chamada pra variável mínimo aqui.
  ?>
  <main>
    <h1>Informe seu salário</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="sal">Salário (R$)</label>
      <!-- A seguir, a parte value foi editada com a short tag php para $salario para não apagar o valor digitado, ele continua na tela após apertar o botão de envio: -->
      <input type="number" name="sal" id="sal" value="<?=$salario?>" required step="0.01">
      <p>Considerando o salário mínimo de <strong>R$<?=number_format($minimo, 2, ",", ".")?></strong></p>
      <input type="submit" value="Calcular">
    </form>
  </main>
  <section>
    <h2>Resultado Final</h2>
    <?php 
      //$renda = $_GET['renda'] ?? 0;
      //$sMinBase = 1320;

      //O erro foi nessa linha a seguir:
      //$sMin = (int)($renda / $sMinBase);


      //echo "<p>Analisando sua renda de <strong>$renda</strong></p>";
      //echo "<p>É o equivalente a " . $sMin . " salário(s) mínimo(s).</p>";

      //Isso tudo deu erro no cálculo e na página mostrada, vou refazer como o professor mostrou e usando até seus nomes de variáveis:

      $tot = intdiv($salario, $minimo); #divisão inteira entre salário e mínimo (dentro de salário, cabem quantos mínimos?)
      $dif = $salario % $minimo; # o que sobra depois que encaixar todos os mínimos dentro de salário, o que resta. Por exemplo: Mínimo de 1000 e salário de 2300, são dois mínimos e aqui retorna 300.

      echo "<p>Quem recebe um salário de R\$".number_format($salario, 2, ",",".")." ganha $tot salários mínimos + R\$ ". number_format($dif, 2, ",","."). "</p>"

      //fazendo dessa forma o resultado foi perfeito.

    ?>
  </section>
</body>
</html>