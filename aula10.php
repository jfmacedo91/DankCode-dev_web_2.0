<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Aula 10</title>
  </head>
  <body>
    <?php
      interface DankInterface {
        public function getNome();
        public function setNome($nome);
      }

      class DankiCode implements DankInterface {
        private $nome = "Jean";

        public function getNome() {
          return $this -> nome;
        }

        public function setNome($nome) {
          $this -> nome = $nome;
        }
      }

      $dankiCode = new DankiCode();
      echo $dankiCode -> getNome();
      echo "<br />";
      $dankiCode -> setNome("Jéssica");
      echo $dankiCode -> getNome();
    ?>
  </body>
</html>