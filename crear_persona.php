<?php


include_once 'Database.php';
include_once 'Personas.php';


$database = new Database();
$db = $database->getConnection();

$item = new Personas($db);


if (isset($_POST['txtnombre']) &&
	isset($_POST['txtapellido']) &&
	isset($_POST['txtdireccion']))
{
	$nombre = $_POST['txtnombre'];
	$apellidos = $_POST['txtapellido'];
	$direccion = $_POST['txtdireccion'];
	$telefono = $_POST['txttelefono'];
	$fechanac  = $_POST['fechanac'];

	$item->nombres = $nombre;
	$item->apellidos = $apellidos;
	$item->direccion = $direccion;
	$item->telefono = $telefono;
	$item->fechanac = $fechanac;

	if($item->createEmployee())
	{
		

		echo "Se creó la persona correctamente";
		echo "<br>";
		echo "<a href='index.php'>Regresar al index</a>";
	}
	else
 	{
 		echo "Persona no creada";
 	}


	
}


?>