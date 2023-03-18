<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos primitivos de PHP</title>
</head>
<body>
  <h1>Teste de tipos primitivos</h1>
  <?php 
  // 0x = hexadecimal.
  // 0b = binário
  // 0 = octal
    // $num = 300;
    // echo "O valor da variável é $num";

    //$v = (integer) 3e2; // 3 x 10(2) coerção
    //echo "O valor é $num";
    //ar_dump($v);

    // $num = (float) "950";
    // var_dump($num);

    // $vet = [6, 2.5, "Fulano", false, 5];
    // var_dump($vet);

    class Pessoa {
      private string $nome;
    }

    $p = new Pessoa;
    var_dump($p);

  ?>
</body>
</html>