<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {


	public function wisatawan(){
		$this->load->view('user/header2');
		$this->load->view('user/regis_wisatawan');
		$this->load->view('user/footer2');
	}

	public function guide(){
		$this->load->view('user/header2');
		$this->load->view('user/regis_guide');
		$this->load->view('user/footer2');
	}

	public function cek_email(){
		$users = $this->m_data->where('users',array('email' => $this->input->post('email')))->num_rows();
		if($users >= 1 ){
			echo 'fail';
		}else{
			echo 'sukses';
		}
	}

	public function cek_username(){
		$users = $this->m_data->where('users',array('username' => $this->input->post('username')))->num_rows();
		if($users >= 1){
			echo 'fail';
		}else{
			echo 'sukses';
		}
	}

	public function auth_wisatawan(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$additional_data = array(
						 'first_name' => $this->input->post('nama_lengkap'),
						 'phone' => $this->input->post('no_hp'),
						 );
		$group = array('2');
		$this->ion_auth->register($username, $password, $email, $additional_data, $group);

		$cek_akhir = $this->m_data->cek_akhir('id','DESC','users')->row();

		$data = array(
			 'alamat' => $this->input->post('alamat_rumah'),
			 'pekerjaan' => (empty($this->input->post('pekerjaan_anda'))) ? '' : $this->input->post('pekerjaan_anda'),
			 'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			 'id_user' => $cek_akhir->id,
			'created' => date('Y-m-d H:i:s'),
		);

		$this->db->insert('wisatawan',$data);

		echo 'sukses';

	}

	public function auth_guide(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$additional_data = array(
						 'first_name' => $this->input->post('nama_lengkap'),
						 'phone' => $this->input->post('no_hp'),
						 );
		$group = array('3');
		$this->ion_auth->register($username, $password, $email, $additional_data, $group);

		$cek_akhir = $this->m_data->cek_akhir('id','DESC','users')->row();

		$data = array(
			'tanggal_lahir' => $this->input->post('tgl_lahir'),
			'bahasa_dikuasai' => $this->input->post('bahasa'),
			'deskripsi' => $this->input->post('deskripsi'),
			 'alamat' => $this->input->post('alamat_rumah'),
			 'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			 'id_user' => $cek_akhir->id,
			 'stat_prof' => '0',
			'created' => date('Y-m-d H:i:s')
		);

		$this->db->insert('guide',$data);

		echo 'sukses';

	}

}
