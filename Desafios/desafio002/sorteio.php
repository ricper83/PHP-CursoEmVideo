<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <main>
      <?php
      //  $sort1 = $_GET["sorteiomin"];
      //  $sort2 = $_GET["sorteiomax"];
      //  $sortres = rand($sort1, $sort2);
      //  echo "<p>O número sorteado é: " . $sortres . " !"
        $res = rand();
        echo "O número sorteado foi: $res !";
      ?>

    </main>
  </header>
</body>
</html>