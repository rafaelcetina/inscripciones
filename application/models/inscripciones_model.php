<?php
	
class inscripciones_model extends CI_Model
{

	public function getCursosDisponibles()
	{
		$id = $this->session->userdata('id');

		$result = $this->db->query("SELECT * FROM cursos 
									WHERE id_curso NOT IN(
										SELECT id_curso FROM inscripciones
										WHERE id_participante = '$id')"
									);
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return null;
		}
	}

	public function getCursosInscrito()
	{
		$id = $this->session->userdata('id');

		$result = $this->db->query("SELECT * FROM cursos 
									WHERE id_curso IN(
										SELECT id_curso FROM inscripciones
										WHERE id_participante = '$id')"
									);
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return null;
		}
	}

	public function getInscripcion($id_curso)
	{
		$user = $this->session->userdata('id');

		$result = $this->db->query("SELECT * FROM inscripciones where id_curso = '$id_curso' and id_participante = '$user'");
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return null;
		}
	}


	public function inscribir($participante)
	{
		if($participante != null){

			$id_participante = $this->session->userdata('id');
			
			$id_curso	= $participante['id_curso'];
			$opciones	= $participante['opciones'];
			$opciones	= implode(",", $opciones);

			$check = $this->db->query("SELECT id_inscripcion FROM inscripciones WHERE id_curso = '$id_curso' and id_participante = '$id_participante'");

			if ($check->num_rows() > 0) {
				return " - ¡error! ya se encuentra inscrito";
			}

			
			$sql = "INSERT INTO inscripciones VALUES(
			NULL, '$id_curso', '$id_participante', '$opciones',NULL)";
			
			if ($this->db->query($sql)) {
				return " - ¡exito! datos actualizados";
			}
		return "error interno";
	}
		return "error interno";

	}

	
}