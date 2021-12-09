<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Aula 06</title>
  </head>
  <body>
    <?php
      class DankiCode {
        function __construct() {
          echo "Olá Mundo!";
        }

        public $sobrenome = "Macedo";

        public function printNome() {
          return "Jean";
        }
      }

      $dankiCode = new DankiCode();
      echo "<br />";
      echo $dankiCode -> printNome();
      echo "<br />";
      echo $dankiCode -> sobrenome;
    ?>
  </body>
</html>