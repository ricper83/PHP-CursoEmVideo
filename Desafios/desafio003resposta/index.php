<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resposta do CursoEmVideo</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <h1>Conversor de Moedas</h1>
    <?php 
      $cotação = 5.17;
      $real = 1250;
      $dólar = $real / $cotação;

      //echo "<p>Seus R\$" . number_format($real, 2, "," , ".") . " equivalem a U\$" . number_format($dólar, 2, ",",".");

      //Para a internacionalização do código ao lidar com moedas, é um meio mais complicado porém mais completo. Precisa habilitar a biblioteca INTL (internalization PHP) na configuração do servidor apache no xampp.

      $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
      //cria-se uma variável que recebe a criação de uma formatação de número que contém informações do país(pt_BR) e o formatador de números com instruções de moeda (CURRENCY).

      echo "Seus " . numfmt_format_currency($padrão , $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dólar, "USD"); 
    ?>
  </main>
</body>
</html>