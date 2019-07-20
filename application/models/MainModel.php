<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainModel extends CI_Model
{
	//metodo construcor
	public function __construct()
	{
		parent::__construct();
	}
	//metoto get en db
	function obtener()
	{
		return $this->db->get('alumnos')->result();
	}
	// //metoto ingresar en db
	// function ingresar($datos){
	// 	$sql = "INSERT INTO compreme (nombre,cantidad,preciou,estado) values (? , ? , ? , ?)";
	// 	$this->db->query($sql, $datos);
	// }
	// //metoto eiminar en db
	// function eliminar($id){
	// 	$this->db->delete('compreme',$id);
	// }
}
