<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Aula 08</title>
  </head>
  <body>
    <?php
      class Aplicacao {
        public function __construct($nome) {
          echo $nome;
          echo "<br />";
        }

        public function runApp() {
          echo "Rodando!";
        }
      }

      class DankiCode extends Aplicacao {
        public static $contagem = 0;

        public function __construct() {
          parent::__construct("Jean");
        }

        public static function incrementar() {
          self::$contagem++;
        }
      }

      $dankiCode = new DankiCode();
      $dankiCode -> runApp();
      DankiCode::incrementar();
      DankiCode::incrementar();
      DankiCode::incrementar();
      echo "<br />";
      echo DankiCode::$contagem;
    ?>
  </body>
</html>