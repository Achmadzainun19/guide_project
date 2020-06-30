<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Redirect extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(!$this->ion_auth->logged_in()){
			redirect("auth/login");
		}
		$user_kini  =$this->ion_auth->user()->row();
		$wh_user = array(
				'user_id' => $user_kini->id
				);
				$user_gr = $this->m_data->where('users_groups',$wh_user)->row();

				if($user_gr->group_id == 1){
					redirect('ntfs/', 'refresh');
				}elseif($user_gr->group_id == 2){
					redirect('p/', 'refresh');
				}elseif($user_gr->group_id == 3){
					$guide = $this->m_data->where('guide',array('id_user' => $user_kini->id))->row();
					if($guide->stat_prof == 0){
							redirect('guide/guide_wait','refresh');
					}else{
						redirect('guide/', 'refresh');
					}
				}
	}

	public function index(){
		$this->load->view('w_m');
	}
}
