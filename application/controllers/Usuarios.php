<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('login')){
			header("Location: ". base_url('auth/login'));
		}
		$this->load->model('participantes_model');
	}

	public function index(){	
		
		
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('dashboard/dashboard');
		$this->load->view('layout/menu');
		$this->load->view('layout/scripts');
		
		$data = array('app' => 'Sistema Servicio Social');
				
		//$this->load->view('home',$data);
	}

	public function perfil(){
		$data = array('page' => 'Perfil de usuario');
		$this->load->view('layout/head',$data);
		$this->load->view('layout/header');
		$usuario = $this->participantes_model->getParticipante($this->session->userdata('email'));
		
		$data = array('usuario'=>$usuario);

		$this->load->view('usuarios/perfil',$data);
		$data = array('usuarios_active'=>1,'miperfil'=>1);
		$this->load->view('layout/menu',$data);
		$this->load->view('layout/scripts');
		
	}

	public function update(){
		$participante = $this->input->post();

		$respuesta = $this->participantes_model->update_participante($participante);

		echo $respuesta;

		
	}

}
