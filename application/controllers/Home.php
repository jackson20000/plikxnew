<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
         parent::__construct();
		 $this->load->helper('url');
		 $this->load->library('session');
    }

	public function index()
	{
		$this->load->view('index');
	}
	public function signin()
	{
		$this->load->view('login_user');
	}
	public function join()
	{
		$this->load->view('reg');
	}
	public function reguser(){
		$data['fname']=$this->input->post('fname');
		$data['lname']=$this->input->post('lname');
		$data['dobd']=$this->input->post('dobd');
		$data['dobm']=$this->input->post('dobm');
		$data['doby']=$this->input->post('doby');
		$data['sex']=$this->input->post('sex');
		$data['country']=$this->input->post('country');
		$data['addr1']=$this->input->post('addr1');
		$data['addr2']=$this->input->post('addr2');
		$data['city']=$this->input->post('city');
		$data['state']=$this->input->post('state');
		$data['zip']=$this->input->post('zip');
		$data['mob']=$this->input->post('mob');
		$data['email']=$this->input->post('email');
		print_r($data);
	}

}
