<?php 

class model_cuentas{
	public $nick;
	public$clave;
	private $id;
	private $conexionDB;
function __construct()
{
	include "..setting/DB.php";
	$conexion=new DB();
	$this->conexionDB= $conexion->conexion;
}
	function crear(){}// guardar o registrar nuevos usuarios
	function modifyPassword(){}//cambiar clave
	function vereficarCampo(){}//verifica la clave de un dato
	function verificaClave(){}//verifica la seguridad de clave

	function iniciarsession(){}//verifica que el usuario y clave sean correctos


	private  function campo(){}//limpiar y verificar el nombre de usuario

	function getId($user){}//
	function getUser($id){}//


}
 ?>
