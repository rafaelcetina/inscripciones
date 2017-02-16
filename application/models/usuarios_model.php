<?php
	/**
	* 
	*/
	class usuarios_model extends CI_Model
	{

		public function insert_usuario($usuario)
		{
			if($usuario != null){
				$this->load->library('encrypt');
				$email		= $usuario['email'];
				$password 	= $this->encrypt->encode($usuario['password']);
				
				$check = $this->db->query("SELECT email FROM usuarios WHERE email = '$email'");
				
				if ($check->num_rows() > 0) {
					return 2;
				}

				$sql = "INSERT INTO usuarios VALUES(null, '$email', '$password', 2, curdate(), 1)";
				
				$sql2 = "INSERT INTO participantes VALUES(NULL, '$email', null,null,null,null,null,null)";
				
				if ($this->db->query($sql) and $this->db->query($sql2)) {
					return 1;
				}
				return 0;
			}
		return 0;
		}
		

		public function getUsuarios()
		{
			return $this->db->get('usuarios');
		}

		public function getUser($email='')
		{
			$result = $this->db->query("SELECT * FROM usuarios WHERE email = '".$email."' ");
			if($result->num_rows() > 0){
				return $result->row();
			}else{
				return null;
			}
		}

		public function getUserByMatricula($matricula='')
		{
			$result = $this->db->query("SELECT * FROM usuarios WHERE matricula = '".$matricula."' ");
			if($result->num_rows() > 0){
				return $result->row();
			}else{
				return null;
			}
		}

		public function getUserById($id='')
		{
			$result = $this->db->query(" SELECT * FROM usuarios WHERE id = '".$id."' ");
			return $result->row();
		}
	}