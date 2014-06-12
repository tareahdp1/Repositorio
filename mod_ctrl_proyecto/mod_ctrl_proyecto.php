<?php
// No permitir el acceso directo al archivo
defined('_JEXEC') or die;
require_once __DIR__ . '/helper.php';
require ("conexion.php");

// Incluye las funciones solo una vez
require_once dirname(__FILE__).'/helper.php';


$bandera=$_POST['ban'];

$params->def('greeting', 1);
$layout= $params->get('layout', 'default');


//Recibimos los parametros enviados mediante POST por el Formulario

$nombre = $_POST["nombre"];
$universidad = $_POST['universidad'];
$pais = $_POST["pais"];
$responsable = $_POST["responsable"];
$areaEstudio = $_POST["area"];
$costo = $_POST["costo"];
$anio = $_POST["anio"];
$tipo = $_POST["tipo"];


$insertar = mysqli_query($enlace,"INSERT INTO PROYECTO (nombre, universidad, pais, responsable, areaEstudio, costo, anio, tipo) VALUES ('$nombre','$universidad','$pais','$responsable', '$areaEstudio','$costo','$anio','$tipo')");
if (!$insertar){echo "Error al guardar";}else{echo "Guardado con exito";}
//Cerramos la conexión




if($bandera==1)
{
	$layout .= '_uno';
}
if($bandera==2)
{
	$layout .= '_dos';
}
if($bandera==3)
{
	$layout .= '_tres';
}
if($bandera==4)
{
	$layout .= '_cuatro';
}

require JModuleHelper::getLayoutPath('mod_ctrl_ventanas', $layout);