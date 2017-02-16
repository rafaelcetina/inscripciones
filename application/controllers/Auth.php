<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('usuarios_model');

	}

	public function index(){
		$this->login();
	}

	public function login(){
		if($this->session->userdata('login')){
			header("Location: ". base_url()."home");
		}
		
		$this->load->view('auth/login');
		
	}

	public function postLogin(){
		$this->load->library('encrypt');
		// Recibe los valores de los campos enviados por el método post()		
		$email		= $this->input->post('email');
		$password	= $this->input->post('password');
		
		// Llama a la function getUser() del modelo usuarios
		$fila = $this->usuarios_model->getUser($email);


		if($fila!=null){ // Comprueba que la fila no este vacia
			if($this->encrypt->decode($fila->password) == $password){
				$data = array(
					'email' 	=> $email,
					'id' 		=> $fila->id_usuario,
					'rol'		=> $fila->rol,
					'login'		=> true
				);
				$this->session->set_userdata($data);

				if($this->session->userdata('rol')==2){
					echo "¡Bienvenido participante!";
				}else{
					echo "¡Bienvenido administrador!";
				}

			}else{
				echo "¡Error! - Datos incorrectos";
			}
		}else{
			//header("Location: " . base_url('auth/login?error=true'));
			echo "¡Error! - Datos no registrados";
		}
	}

	public function register(){
		if($this->session->userdata('login')){
			header("Location: ". base_url()."home");
		}
		
		$this->load->view('auth/register');
		
	}


	public function postRegister()
	{
		$usuario = $this->input->post();
		
		
		$respuesta = $this->usuarios_model->insert_usuario($usuario);

		if ($respuesta == 1) {
			/**
			//Enviar Email
			//cargamos la libreria email de ci
			$this->load->library("email");

			//configuracion para gmail
			$configGmail = array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_port' => 465,
				'smtp_user' => 'rrdc123@gmail.com',
				'smtp_pass' => 'cetina123',
				'mailtype' => 'html',
				'charset' => 'utf-8',
				'newline' => "\r\n"
			);    

			//cargamos la configuración para enviar con gmail
			$this->email->initialize($configGmail);

			$this->email->from('Sistema de Control Escolar');
			$this->email->to($usuario['email']);
			$this->email->subject('Bienvenido/a');
			$this->email->message("<h2>Te has registrado con éxito en el Sistema</h2><hr>");
			$this->email->send();
			*/
			echo "¡Exito! - redireccionando al inicio de sesión...";
		}
		elseif($respuesta == 2 ){
			echo "¡Error! - correo electrónico ya registrado";
		}
		else{
			echo "¡Error! - ocurrio un error interno";
		}
	}


	public function logout(){
		$this->session->sess_destroy();
		header("Location: " . base_url());

	}
}
