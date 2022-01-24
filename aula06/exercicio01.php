<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Porcentagem de preco</title>
  <link rel="stylesheet" href="/projects/aulaPHP/_css/estilo.css">
</head>
<body>
  <div>
    <?php
      $produto = $_GET["produto"];
      $desconto = 24;
      $valorfinal = $produto * ($desconto/100);
      $produtofinal = $produto - $valorfinal;
      echo "O produto de preço  R$ " . number_format($produto, 2, ',', '.');
      echo "<br>Com $desconto% de desconto ficará: R$ " . number_format($produtofinal, 2, ',', '.');
    ?>
  </div>
</body>
</html>