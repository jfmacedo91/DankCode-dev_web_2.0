<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Aula 07</title>
  </head>
  <body>
    <?php
      class DankiCode {
        private $sobrenome = " Macedo";
        public static $contagem = 0;

        private function printNome() {
          echo "Jean";
        }

        public function printNomePublico() {
          $this -> printNome();
          echo $this -> sobrenome;
        }

        public static function printCidade() {
          echo "Andirá";
        }

        public static function incrementar() {
          self::$contagem++;
        }
      }

      $dankiCode = new DankiCode();
      $dankiCode -> printNomePublico();
      echo "<br />";
      DankiCode::printCidade();
      echo "<br />";
      DankiCode::incrementar();
      DankiCode::incrementar();
      DankiCode::incrementar();
      echo "<br />";
      echo DankiCode::$contagem;
    ?>
  </body>
</html>