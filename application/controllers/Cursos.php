<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('login')){
			header("Location: ". base_url('auth/login'));
		}
		$this->load->model('cursos_model');
	}

	public function index(){
		$this->disponibles();
	}

	public function disponibles(){	
		
		$data = array('page' => 'Cursos disponibles');
		$this->load->view('layout/head',$data);
		$this->load->view('layout/header');

		$data = array('cursos' => $this->cursos_model->getCursosDisponibles());
		
		$this->load->view('cursos/disponibles',$data);
		
		$data = array('cursos_active'=>1, 'disponibles'=>1);
		
		$this->load->view('layout/menu',$data);
		$this->load->view('layout/scripts');
		
	}

	public function inscrito(){	
		
		$data = array('page' => 'Cursos inscrito');
		$this->load->view('layout/head',$data);
		$this->load->view('layout/header');

		$data = array('cursos' => $this->cursos_model->getCursosInscrito());
		
		$this->load->view('cursos/inscrito',$data);
		
		$data = array('active' => 'cursos');
		$data = array('cursos_active'=>1, 'inscrito'=>1);
		$this->load->view('layout/menu',$data);
		$this->load->view('layout/scripts');
		
	}

	public function inscribir($id_curso){	
		
		$data = array('page' => 'Inscripción a curso');
		$this->load->view('layout/head',$data);
		$this->load->view('layout/header');

		$data = array('curso' => $this->cursos_model->getCurso($id_curso));
		
		$this->load->view('cursos/inscribir',$data);
		
		$data = array('active' => 'cursos');
		
		$this->load->view('layout/menu');
		$this->load->view('layout/scripts');
		
	}

	public function postInscribir(){
		
		echo $respuesta = $this->cursos_model->inscribir($this->input->post());
		
	}
	public function cursos(){	
		$data = array('page' => 'Cursos disponibles');
		$this->load->view('layout/head', $data);
		$this->load->view('layout/header');
		$this->load->view('dashboard/dashboard');
		$this->load->view('layout/menu');
		$this->load->view('layout/scripts');
		
		$data = array('app' => 'Sistema Servicio Social');
		
		//$this->load->view('home',$data);
	}

	public function ficha($id_curso){	

		if( $this->cursos_model->getCurso($id_curso) == null)
			header("Location: ". base_url('cursos/inscrito'));	

		$data = array('page' => 'Inscripción a curso');
		$this->load->view('layout/head',$data);
		$this->load->view('layout/header');

		$this->load->model('participantes_model');
		$this->load->model('inscripciones_model');

		$participante=$this->participantes_model->getParticipante($this->session->userdata('email'));

		$opciones = $this->inscripciones_model->getInscripcion($id_curso);

		$data = array(
			'curso' => $this->cursos_model->getCurso($id_curso), 
			'participante'=>$participante,
			'opciones'=>$opciones
			);
		
		$this->load->view('cursos/ficha',$data);
		
		$data = array('active' => 'cursos');
		
		$data = array('cursos_active'=>1, 'inscrito'=>1);
		$this->load->view('layout/menu',$data);
		$this->load->view('layout/scripts');
		
	}



	
}
