<?php
	
class participantes_model extends CI_Model
{

	public function update_participante($participante)
	{
		if($participante != null){

			$email		= $this->session->userdata('email');
			
			$nombre		= $participante['nombre'];
			$estudios	= $participante['estudios'];
			$entidad	= $participante['entidad'];
			$municipio	= $participante['municipio'];
			$ciudad		= $participante['ciudad'];
			$telefono	= $participante['telefono'];
			
			$check = $this->db->query("SELECT telefono FROM participantes WHERE telefono = '$telefono' and email != '$email'");

			if ($check->num_rows() > 0) {
				return " - ¡error! teléfono ya registrado";
			}

			$sql = "UPDATE participantes set 
				nombre = '$nombre',
				estudios = '$estudios',
				entidad = '$entidad',
				municipio = '$municipio',
				ciudad = '$ciudad',
				telefono = '$telefono'
				WHERE email = '$email'";
			
			if ($this->db->query($sql)) {
				return " - ¡exito! datos actualizados";
			}
		return "error interno";
	}
		return "error interno";

	}
	

	

	public function getParticipante($email='')
	{
		$result = $this->db->query("SELECT * FROM participantes WHERE email = '".$email."' ");
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return null;
		}
	}

	
}