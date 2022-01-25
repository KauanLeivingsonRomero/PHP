<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ano anterior</title>
  <link rel="stylesheet" href="/projects/aulaPHP/_css/estilo.css">
</head>
<body>
  <div>
    <?php
      $anoatual = $_GET["anoatual"];
      echo "Ano passado: ". --$anoatual .", Ano atual: ". ++$anoatual. " Proximo ano: ". ++$anoatual;
    ?>
  </div>
</body>
</html>