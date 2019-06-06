<?php
if($_POST){
$error_mail=false;
$error_nombre=false;
if(($_POST["nombre"])=="" || ($_POST["nombre"])==null ){
  $error_nombre=true;
}
if(($_POST["email"])=="" || ($_POST["email"])==null || !(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))){
  $error_mail=true;
}
echo "<br>";
if($error_mail==true){
echo "Mail inválido.";
}
echo "<br>";
if($error_nombre==true){
echo "Nombre vacío.";
}
if ($error_mail==true || $error_nombre==true){

}
echo "<br>";
if ($error_mail==false && $error_nombre==false){
echo "Correcto";
$almacenar="{Email: ". $_POST["email"] .", Nombre: ".$_POST["nombre"]."}\n";
header('Location: http://127.0.0.1/practicaDH/php_clase_06_04/clase 06_04/happy.html');
file_put_contents("prueba.txt",file_get_contents("prueba.txt").$almacenar);
}
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

<body>
<!--<form action="imprimir.php" method="get">-->
<form action="imprimir.php" method="POST">
<label for="nombre">Nombre:</label>
<input type="text" name="nombre">
<br>
<label for="email">E-mail:</label>
<input type="text" name="email">
<br>
<input type="submit">
</form>
</body>
</html>
