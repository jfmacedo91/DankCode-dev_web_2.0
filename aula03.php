<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles.css">
  <title>Aula 03</title>
</head>
<body>
  <h1>Funções</h1>
  <?php
    function helloWorld() {
      echo "Hello World <br />";
    }

    function somar($valor1, $valor2) {
      return $valor1 + $valor2;
    }

    function verificaNome($nome = "Jean") {
      if($nome == "Jean") {
        return true;
      } else {
        return false;
      }
    }

    helloWorld();
    echo somar(10, 20)."<br />";
    if(verificaNome("Jéssica")) {
      echo "Verdade! <br />";
    } else {
      echo "Mentira! <br />";
    }
    if(verificaNome("Jean")) {
      echo "Verdade! <br />";
    } else {
      echo "Mentira! <br />";
    }
  ?>
</body>
</html>