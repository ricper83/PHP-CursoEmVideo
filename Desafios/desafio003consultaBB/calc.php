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
      
      $inicio = date("m-d-Y", strtotime("-7 days"));
      $fim = date("m-d-Y");
      $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao'; //aspas simples para não processar os $. Usar contrabarra \ na frente das aspas simples internas da url em json.
      $dados = json_decode(file_get_contents($url), true);

      //var_dump($dados);

      $cotação = $dados["value"][0]["cotacaoCompra"];
      
      $real = floatval($_GET['entradavalor']);
      $dólar = $real / $cotação;
      //echo "Valor digitado: " . $real . "<br>";
      //echo "Cotação: " . $cotação . "<br>";
      //$result = $real / $cotação;
      //echo "Resultado: " . $result . "<br>";

      $padrão = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

      echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" .numfmt_format_currency($padrão, $dólar, "USD") . "</strong></p>";

    ?>
    <input type="button" onclick="javascript:history.back()" value="Voltar">
    
  </main>
  
</header>


</body>

</html>