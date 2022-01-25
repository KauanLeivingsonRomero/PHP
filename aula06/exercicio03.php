<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variavel</title>
  <link rel="stylesheet" href="/projects/aulaPHP/_css/estilo.css">
</head>
<body>
  <div>
    <?php
      $a = 3;
      $b = &$a;
      $b += 5;
      echo "A variavel A vale $a";
      echo "<br>A variavel B vale $b";
    ?>
  </div>
</body>
</html>