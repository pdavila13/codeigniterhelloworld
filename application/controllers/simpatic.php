<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Simpatic extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->config->load('codeigniterhelloworld');
	}
	
	public function index()
	{
		$this->load->view ('saluda');
	}
	
	public function saluda_2() {
		$data = array();
		
		$name = $this->input->get('name');

		$data['name'] = $name;
		
		$this->load->view('saluda',$data);
	}
	
	public function saluda($name){
		$data = array();
		
		//$this->config->load('codeigniterhelloworld');
		
		$data['parem1'] = $name;
		$data['param2'] = $this->config->item('academic_period');
		
		$this->load->view('saluda',$data);
	}
	
}

/* End of file simpatic.php */
/* Location: ./application/controllers/simpatic.php */