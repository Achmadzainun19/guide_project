<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guide extends CI_Controller {


	public function guide_complete(){
		$this->load->view('user/header2');
		$this->load->view('user/guide_complete');
		$this->load->view('user/footer2');
	}

	public function guide_wait(){
		$this->load->view('user/header2');
		$this->load->view('user/guide_complete');
		$this->load->view('user/footer2');
	}

	private function random_generate($ttl){
		$rand = NULL;
        $no = $ttl; // jumlah karakter yang akan di bentuk.
        $chr = "0123456789ABCDEFGHIJKLMNOPQRSTUVWUXYZabcdefghijklmnopqrstuvwuxyz";
        for ($i = 0; $i < $no; $i++) {
        $create = rand(1, strlen($chr));
        $rand .= substr($chr, $create, 1);
        }
        return $rand;
	}

	public function sys_complete(){
		if($_FILES["files"]["name"] != ''){
		   	$output = '';
		   	$output1 = '';
		   	$output2 = '';
		    if($_FILES["files"]["name"][0]){
		    	$nmfile = md5($this->random_generate(4).date('Y-m-d').'profil');
		   	}elseif($_FILES["files"]["name"][1]){
		    	$nmfile = md5($this->random_generate(4).date('Y-m-d').'ktp'); 
		   	}else{
		    	$nmfile = md5($this->random_generate(4).date('Y-m-d').'licensi');
		    }
		   $config["upload_path"] = './uploads/';
		   $config["allowed_types"] = 'gif|jpg|png';
		   $config[ 'max_size' ] = 10000; // size foto
		   $config[ 'file_name' ] = $nmfile;
		   $this->load->library('upload', $config);
		   $this->upload->initialize($config);
		   for($count = 0; $count<count($_FILES["files"]["name"])-1; $count++)
		   {
		    $_FILES["file"]["name"] = $_FILES["files"]["name"][$count];
		    $_FILES["file"]["type"] = $_FILES["files"]["type"][$count];
		    $_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][$count];
		    $_FILES["file"]["error"] = $_FILES["files"]["error"][$count];
		    $_FILES["file"]["size"] = $_FILES["files"]["size"][$count];
		    if($this->upload->do_upload('file'))
		    {
		     $data = $this->upload->data();

		     
		     if($count == 0){
		     	$output .= ''.base_url().'uploads/'.$data["file_name"].'';
		     }elseif($count == 1){
		     	$output1 .= ''.base_url().'uploads/'.$data["file_name"].'';
		     }else{
		     	$output2 .= ''.base_url().'uploads/'.$data["file_name"].'';
		     }
		     $datay = array(
		     	'foto_profil' => $output,
		     	'foto_ktp' => $output1,
		     	'licensi_guide' => $output2,
		     	'stat_prof' => '1',
		     );
		     $this->m_data->update_data(array('id_user' => $this->input->post('id_user')),$datay,'guide');
		    }
		   }

		   echo json_encode('sukses');
  		}
		// $this->load->library('upload');
// $countfiles = count($_FILES['files']['name']);
  
//       for($i=0;$i<$countfiles-1;$i++){
  
//         if(!empty($_FILES['files']['name'][$i])){
  
//           // Define new $_FILES array - $_FILES['file']
//           $_FILES['file']['name'] = $_FILES['files']['name'][$i];
//           $_FILES['file']['type'] = $_FILES['files']['type'][$i];
//           $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
//           $_FILES['file']['error'] = $_FILES['files']['error'][$i];
//           $_FILES['file']['size'] = $_FILES['files']['size'][$i];
 
//           // Set preference
//           $config['upload_path'] = './uploads/'; 
//           $config['allowed_types'] = 'jpg|jpeg|png|gif';
//           $config['max_size'] = '100000'; // max_size in kb
//           $config['file_name'] = $_FILES['files']['name'][$i];
  
//           //Load upload library
//           $this->load->library('upload',$config); 
//           $arr = array('msg' => $this->upload->display_errors(), 'success' => false);
//           // File upload
//           if($this->upload->do_upload('file')){
           
//            $data = $this->upload->data(); 
//            // $insert['name'] = $data['file_name'];
//            // $this->db->insert('images',$insert);
//            // $get = $this->db->insert_id();
//           $arr = array('msg' => 'Image has been uploaded successfully');
 
//           }
//         }
  
//       }
//       echo json_encode($arr);
  
	}

	public function index(){
		$this->load->view('admin/header_guide');
		$this->load->view('admin/home_guide');
		$this->load->view('admin/footer_admin');
	}

}
