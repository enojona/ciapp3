<?php
class Persona extends CI_Controller {
	public function nuevo(){
		$this->load->view('nuevo_formulario');
	}
	public function guarda(){
		var_dump($_POST);
		var_dump($this->input->post());
	}
}
