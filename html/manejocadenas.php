<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>cadenas</title>
  <link rel="stylesheet" href="../css/cadenas.css">
</head>
<body>
  <?php
  $cadena='hola my nombre es j y aqui va un salto de linea o enter
como ven e saltado de linea los espacion no se se consideran saltos de linea

este tuvo doble sato de linea osea deberia ser un parra fo vamoa a ver como sale y aqui va otro

este es el otron parrafo veremos q talk rsulta XDXDXD este es el otron parrafo veremos q talk rsulta XDXDXD este es el otron parrafo veremos q talk rsulta XDXDXD este es el otron parrafo veremos q talk rsulta XDXDXD este es el otron parrafo veremos q talk rsulta XDXDXD este es el otron parrafo veremos q talk rsulta XDXDXD v este es el otron parrafo veremos q talk rsulta XDXDXD este es el otron parrafo veremos q talk rsulta XDXDXD este es el otron parrafo veremos q talk rsulta XDXDXD en este no agrege nada de saltos ede linea osea escrivi todo al mierdazo a ver q sale';

  echo $cadena.'<br><br>';

  $cadenare=explode('
',$cadena);
  for($i=0;$i<count($cadenare);$i++){
    echo '<p>'.$cadenare[$i].'<p>';
  }

  ?>
  <div id="textarea">
    <form id="form" action="manejocadenas.php" method="post">
      <label for="texto">Texto: </label>
      <textarea name="texto" id="texto" cols="30" rows="10"></textarea>
      <input type="submit" value="enviar">
    </form>
  </div>
  <div id="resultado">
    <?php
    if(isset($_POST['texto'])){
      $texto = $_POST['texto'];
      $cadenare=explode('\n',$texto);
      //            for($i=0;$i<count($cadenare);$i++){
      //        echo '<p>'.$cadenare[$i].'<p>';
      //                echo $i;
      //        }
      $cad= str_replace("\n","</p><p>",$texto);
      echo '<p>'.$cad.'</p>';
    }

    ?>
  </div>
  <div id="archivos">
    <form action="manejocadenas.php" method="post" enctype="multipart/form-data">
      <label for="filer">archivo: </label>
      <input type="hidden" name="MAX_FILE_SIZE" value="3000">
      <input type="file" name="file" id="file">
      <input type="submit" value="enviar">
    </form>
  </div>
  <?php
  $uploads_dir = '/uploads';
  foreach ($_FILES["file"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
      $tmp_name = $_FILES["file"]["tmp_name"][$key];
      $name = $_FILES["file"]["name"][$key];
      move_uploaded_file($tmp_name, "$uploads_dir/$name");
    }
  }

  ?>
</body>
</html>