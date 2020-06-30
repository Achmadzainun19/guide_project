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
		     	'stat_prof' => '2',
		     );
		     $this->m_data->update_data(array('id_user' => $this->input->post('id_user')),$datay,'guide');
		    }
		   }

		   echo json_encode('sukses');
  		}
	}

	public function index(){
		$user_kini  =$this->ion_auth->user()->row();
		$guide = $this->m_data->where('guide',array('id_user' => $user_kini->id))->row();
		if($guide->stat_prof == 0){
			redirect('guide/guide_wait','refresh');
		}
		$this->load->view('admin/header_guide');
		$this->load->view('admin/home_guide');
		$this->load->view('admin/footer_admin');
	}

	function download_file_contoh(){
		$this->load->helper('download');
		force_download(FCPATH.'/assets/file/contoh_jadwal.docx', NULL);
	}

	public function data_paket(){
		$data['title'] = 'Admin Dashboard';
		$data['user'] = $this->ion_auth->user()->row();
		$this->load->view('admin/header_guide',$data);
		$this->load->view('admin/data_paket_wisata');
		$this->load->view('admin/footer_admin');
	}

	public function transaksi_tour_masuk(){
		$data['title'] = 'Admin Dashboard';
		$data['user'] = $this->ion_auth->user()->row();
		$this->load->view('admin/header_guide',$data);
		$this->load->view('admin/transaksi_tour_masuk');
		$this->load->view('admin/footer_admin');
	}

	public function tambah_paket(){
		$data['title'] = 'Admin Dashboard';
		$data['user'] = $this->ion_auth->user()->row();
		$this->load->view('admin/header_guide',$data);
		$this->load->view('admin/tambah_paket_wisata');
		$this->load->view('admin/footer_admin');
	}

	function hapus_paket($id){
		$this->m_data->hapus_data(array('id_paket' => $id),'paket_wisata');
		$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible show fade">
			 <div class="alert-body">
				 <button class="close" data-dismiss="alert">
					 <span>×</span>
				 </button>
				 Paket Wisata Berhasil Di Hapus
			 </div>
		 </div>');
		redirect('guide/data_paket');
	}

	function update_data_paket(){
		$data = array(
			'nama_paket' => $this->input->post('nama_wisata'),
			'durasi_wisata' => $this->input->post('durasi_wisata'),
			'harga_paket' => $this->input->post('harga_wisata'),
		);
		$this->m_data->update_data(array('id_paket' => $this->input->post('id_paket')),$data,'paket_wisata');
		$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible show fade">
			 <div class="alert-body">
				 <button class="close" data-dismiss="alert">
					 <span>×</span>
				 </button>
				 Data Paket Wisata Berhasil Di Ganti
			 </div>
		 </div>');
		redirect('guide/data_paket');
	}

	function update_syarat(){
		$data = array(
			'syarat_ketentuan' => $this->input->post('syarat')
		);
		$this->m_data->update_data(array('id_paket' => $this->input->post('id_paket')),$data,'paket_wisata');
		$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible show fade">
			 <div class="alert-body">
				 <button class="close" data-dismiss="alert">
					 <span>×</span>
				 </button>
				 Syarat & Ketentuan Paket Wisata Berhasil Di Ganti
			 </div>
		 </div>');
		redirect('guide/data_paket');
	}

	function update_jadwal(){
		$data = array(
			'jadwal_paket' => $this->input->post('jadwal')
		);
		$this->m_data->update_data(array('id_paket' => $this->input->post('id_paket')),$data,'paket_wisata');
		$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible show fade">
			 <div class="alert-body">
				 <button class="close" data-dismiss="alert">
					 <span>×</span>
				 </button>
				 Jadwal Paket Wisata Berhasil Di Ganti
			 </div>
		 </div>');
		redirect('guide/data_paket');
	}

	function update_gambar(){
		$nmfile1 = "paket_wisata_".$this->random_generate(4);
		$config1[ 'upload_path' ] = './uploads/wisata/';
		$config1[ 'allowed_types' ] = 'jpg|png';
		$config1[ 'max_size' ] = 30000000;
		$config1[ 'file_name' ] = $nmfile1;
		$this->upload->initialize( $config1);
			 if($_FILES['gambar']['name']){ // jika input type file sudah ada inputan
					 if ($this->upload->do_upload('gambar')){ // upload foto
							 $gbr1 = $this->upload->data(); // deklarasi upload foto+
							 $cari_paket = $this->m_data->where('paket_wisata',array('id_paket' => $this->input->post('id_paket')))->row();
 								unlink('./uploads/wisata/'.$cari_paket->gambar_wisata);
							 $data = array(
								 'gambar_wisata' => $gbr1['file_name'],
							 );
							 $this->m_data->update_data(array('id_paket' => $this->input->post('id_paket')),$data,'paket_wisata');
							 $this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible show fade">
									<div class="alert-body">
										<button class="close" data-dismiss="alert">
											<span>×</span>
										</button>
										Gambar Paket Wisata Berhasil Di Ganti
									</div>
								</div>');
							 redirect('guide/data_paket');
					 }else{
					 $this->session->set_flashdata('alert','<div class="alert alert-danger alert-dismissible show fade">
									<div class="alert-body">
										<button class="close" data-dismiss="alert">
											<span>×</span>
										</button>
										'.$this->upload->display_errors().'
									</div>
								</div>');
							 redirect('guide/data_paket');
					 }
			 }else{
				 $this->session->set_flashdata('alert','<div class="alert alert-danger alert-dismissible show fade">
									<div class="alert-body">
										<button class="close" data-dismiss="alert">
											<span>×</span>
										</button>
										Gambar Belum Terisi
									</div>
								</div>');
							 redirect('guide/data_paket');
			 }
	}

	public function add_paket_wisata(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_wisata', 'Nama Wisata', 'trim|required');
		$this->form_validation->set_rules('durasi_wisata', 'Durasi Wisata', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Wisata', 'trim|required');
		$this->form_validation->set_rules('harga_wisata', 'Harga Paket Bagian', 'trim|required');

       if($this->form_validation->run() == FALSE){
       	redirect('guide/tambah_paket');
       }else{
	      $nmfile1 = "paket_wisata_".$this->random_generate(4);
	      $config1[ 'upload_path' ] = './uploads/wisata/';
	      $config1[ 'allowed_types' ] = 'jpg|png';
	      $config1[ 'max_size' ] = 30000000;
	      $config1[ 'file_name' ] = $nmfile1;
	      $this->upload->initialize( $config1);
	         if($_FILES['gambar']['name']){ // jika input type file sudah ada inputan
	             if ($this->upload->do_upload('gambar')){ // upload foto
	                 $gbr1 = $this->upload->data(); // deklarasi upload foto
	                 $data = array(
	                   'nama_paket' => $this->input->post('nama_wisata'),
	                   'durasi_wisata' => $this->input->post('durasi_wisata'),
	                   'detail_wisata' => $this->input->post('deskripsi'),
	                   'harga_wisata' => $this->input->post('harga_wisata'),
	                   'gambar_wisata' => $gbr1['file_name'],
	                   'id_guide' => $this->input->post('id_guide'),
	                   'created' => date('Y-m-d H:i:s'),
										 'jadwal_paket' => $this->input->post('jadwal'),
										 'syarat_ketentuan' => $this->input->post('syarat'),
	                 );
	                 $this->db->insert('paket_wisata',$data);
	                 $this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>×</span>
                        </button>
                        Wisata Berhasil Ditambah
                      </div>
                    </div>');
	                 redirect('guide/tambah_paket');
	             }else{
	             $this->session->set_flashdata('alert','<div class="alert alert-danger alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>×</span>
                        </button>
                        '.$this->upload->display_errors().'
                      </div>
                    </div>');
	                 redirect('guide/tambah_paket');
	             }
	         }else{
	           $this->session->set_flashdata('alert','<div class="alert alert-danger alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>×</span>
                        </button>
                        Gambar Belum Terisi
                      </div>
                    </div>');
	                 redirect('guide/tambah_paket');
	         }

       }

	}

}
