<?php 
	class Test extends CI_Controller{
		public function fecha(){
			$this->load->model('test_model');
			$f=$this->test_model->fecha();//recupera la fecha en $f
			//echo $f;//imprime la fecha
			//$this->load->view('welcome_message');
			//$this->load->view('fecha');
			$datos=array();
			$datos['fecha']=$f;
			//$this->load->view('fecha',$datos);
			$datos['nombre']="Lus Felipe";
			$this->load->view('fecha',$datos);
		}
	}
 ?>