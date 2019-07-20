<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
	//constructor
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MainModel');
	}
	//metodo index
	public function index()
	{
		$sms['sms'] = 'Oportunidades'; //mensaje para mostrar en la vista
		$this->load->view('template/head'); //con esto incluimos el head
		$this->load->view('template/navbar'); //con esto incluimos el navbar
		$this->load->view('Main/index', $sms); //con esto cargamos la vista
		$this->load->view('template/footer'); //con esto incluimos el footer
	}
	//funcion q manda los datos de la bd a la tabla 
	public function recargar()
	{
		$data = ['datos' => $this->MainModel->obtener()];
		$this->load->view('Main/tabla', $data);
	}
	// //metodo post
	// public function agregar()
	// {
	// 	$datos =[$_POST['nombre'],$_POST['cantidad'],$_POST['precio'],$_POST['estado']];
	// 	$this->mainModel->ingresar($datos);
	// }
	// //metodo eliminar
	// public function eliminar()
	// {
	// }
}
