<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles.css">
  <title>Aula 02</title>
</head>
<body>
  <h1>Repetição com o foreach</h1>
  <?php
    $nome = array("Jean", "Jéssica", "Jandira", "Jeferson");

    foreach($nome as $key => $value) {
      echo $value;
      echo "<br />";
    }
  ?>
  <h1>Repetição com o for</h1>
  <?php
    for($i = 0; $i < 10; $i++) {
      echo $i;
      echo "<br />";
    }
  ?>
  <h1>Repetição com o while</h1>
  <?php
    $i = 0;
    while($i < 10) {
      echo "Mensagem ".$i;
      echo "<br />";
      $i++;
    }
  ?>
</body>
</html>