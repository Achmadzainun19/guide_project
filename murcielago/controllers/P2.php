<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P2 extends CI_Controller {


	public function index(){
		$this->load->view('user2/header');
		$this->load->view('user2/home');
		$this->load->view('user2/footer');
	}
	
	public function choose(){
		$this->load->view('user/header2');
		$this->load->view('user/redi');
		$this->load->view('user/footer2');
	}

}
