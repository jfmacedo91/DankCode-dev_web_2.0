<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles.css">
  <title>Aula 05</title>
</head>
<body>
  <h1>Form Post</h1>
  <form action="" method="POST">
    <input type="text" name="nome" id="nome">
    <input type="submit" name="acao" value="Enviar">
  </form>

  <h1>Form Get</h1>
  <form action="" method="GET">
    <input type="text" name="nome" id="nome">
    <input type="submit" name="acao" value="Enviar">
  </form>

  <h1>Form Arquivo</h1>
  <form enctype="multipart/form-data" action="" method="POST">
    <input type="file" name="arquivo" id="arquivo">
    <input type="submit" name="acao" value="Enviar">
  </form>

  <br />

  <?php
    if(isset($_POST["acao"])) {
      echo "Post: ".$_POST["nome"];
      echo $_FILES["arquivo"]["name"];
    } elseif(isset($_GET["nome"])) {
      echo "Get: ".$_GET["nome"];
    } 
  ?>
</body>
</html>