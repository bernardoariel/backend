<?php

class ControladorLogin{

    /*=============================================
	LOGUEARME A LA APLICACION
	=============================================*/

	static public function ctrLoguearse(){

		if(isset($_POST["usuarioLogin"])){ //COMPRUEBO QUE ENVIE DATOS
			
			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST['usuarioLogin']) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST['passwordLogin'])){//COMPRUEBO QUE SEAN CORRECTOS

				// $encriptar = crypt($_POST["passwordLogin"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				/**
				 * BUSCO UN USUARIO CON LOS _POST INGRESADOS
				 */
				$tabla = "usuarios";
				$item = "usuario";
				$valor = $_POST['usuarioLogin'];

				$respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

				if($respuesta){

					if($respuesta["usuario"] ==  $_POST['usuarioLogin'] && $respuesta["password"] ==  $_POST['passwordLogin']){
					
						if($respuesta["estado"] == 1){//si el estado esta activo
	
							$_SESSION["iniciarSesion"] = "ok";
							$_SESSION["id"] = $respuesta["id"];
							$_SESSION["nombre"] = $respuesta["nombre"];
							$_SESSION["usuario"] = $respuesta["usuario"];
							$_SESSION["foto"] = $respuesta["foto"];
							$_SESSION["perfil"] = $respuesta["perfil"];
							
							/*==============================================
							  - REGISTRAR FECHA PARA SABER EL ÚLTIMO LOGIN -
							  ==============================================*/

							date_default_timezone_set('America/Bogota');

							$fecha = date('Y-m-d');
							$hora = date('H:i:s');

							$fechaActual = $fecha.' '.$hora;

							$item1 = "ultimo_login";
							$valor1 = $fechaActual;

							$item2 = "id";
							$valor2 = $respuesta["id"];

							$ultimoLogin = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

							if($ultimoLogin == "ok"){
								
								echo '<script>
		
											window.location = "inicio";
		
									  </script>';

							}

						}
						else{
							
							echo '<br><div class="alert alert-danger">El usuario aún no está activado</div>';
	 
						}
					}
				}
				
				else{

					echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';
				
				}
			}
			
		}

	}  /*FIN - INGRESO DEL LOGIN */

} /*  FINAL DEL CONTROLADOR */