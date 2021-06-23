<?php 
#LLAMAR HORARIO DE ARGENTINA
date_default_timezone_set('America/Argentina/Buenos_Aires');

#CONTROLADORES y MODELOS
#-----------------------------------------------------
//LLAMO A LA PlantillaControlador
require_once "controladores/plantilla.controlador.php";
//LLAMO A CONTROLADOR DE LOGIN Y AL MODELO
require_once "controladores/login.controlador.php";

//LLAMO A CONTROLADOR DE USUARIOS Y MODELOS
// require_once "controladores"
 require_once "modelos/usuarios.modelo.php";


#LLAMAR A LA PLANTILLA.
#-------------------------------------
$plantilla = new ControladorPlantilla();
$plantilla->plantilla();

 


