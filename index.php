<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles.css">
  <title>Aulas</title>
</head>
<body>
  <h1>Aulas Dank Code 2.0</h1>
  <nav>
    <?php
      $path = "/opt/lampp/htdocs/aulas_dank_2.0";
      $diretorio = dir($path);
      $links = array();

      while($arquivo = $diretorio -> read()){
        if($arquivo != "." && $arquivo != ".." && $arquivo != "index.php" && $arquivo != ".git" && $arquivo != "README.md") {
          array_push($links, $arquivo);
        }
      }
      $diretorio -> close();

      sort($links);
      
      foreach($links as $key => $value) {
        echo "<a href='".$value."'>".$value."</a>";
      }
    ?>
  </nav>
</body>
</html>