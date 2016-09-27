

<?php
include('conexiones.php');
extract($_REQUEST);
//la función extract toma las claves de una matriz asoiativa y las convierte en nombres de variable,
//asignándoles a esas variables valores iguales a los que tenía asociados en la matriz. Es decir, convierte a $_GET['id'] en $id,
//sin que tengamos que tomarnos el trabajo de escribir $id=$_GET['ID']; 
mysql_select_db("c9");
//incluímos la conexión a nuestra base de datos'".$id."'
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$hecho = $_POST['hecho'];
$qry=mysql_query("insert into tareas(nombre,descripcion,hecho,id_listas)values ('$nombre','$descripcion','$hecho',$id);");


?>