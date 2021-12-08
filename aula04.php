<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles.css">
  <title>Aula 04</title>
</head>
<body>
  <h1>Funções nativas do PHP</h1>
  <?php
    $frase = "Jeferson é programador!";
    $fraseReplace = str_replace("Jeferson", "Jean", $frase);
    $fraseSub = substr($frase, 5, 11);
    $fraseExplode = explode(" ", $frase);
    $fraseImplode = implode(" ", $fraseExplode);

    echo $frase."<br />";
    echo $fraseReplace."<br />";
    echo $fraseSub."<br />";
    print_r($fraseExplode);
    echo "<br />";
    echo $fraseImplode."<br />";
  ?>
</body>
</html>