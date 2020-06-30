<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ntfs extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->ion_auth->logged_in()){
			if(!$this->ion_auth->is_admin()){
				redirect('err1');
			}
		}else{
				redirect('err1');
		}
	}
	public function index(){
		$data['title'] = 'Admin Dashboard';
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/home_admin');
		$this->load->view('admin/footer_admin');
	}
	public function tambah_wisata(){
		$data['title'] = 'Admin Dashboard';
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/tambah_wisata');
		$this->load->view('admin/footer_admin');
	}
	public function data_artikel(){
		$data['title'] = 'Admin Dashboard';
		$data['artikel'] = $this->m_data->semua('blog')->result();
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/data_artikel');
		$this->load->view('admin/footer_admin');
	}
	public function data_wisata(){
		$data['title'] = 'Admin Dashboard';
		$data['wisata'] = $this->m_data->semua('wisata')->result();
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/data_wisata');
		$this->load->view('admin/footer_admin');
	}
	public function data_guide(){
		$data['title'] = 'Admin Dashboard';
		$data['guide'] = $this->m_data->list_guide()->result();
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/data_guide');
		$this->load->view('admin/footer_admin');
	}
	public function guide_verifikasi(){
		$data['title'] = 'Admin Dashboard';
		$data['guide'] = $this->m_data->list_guide_v()->result();
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/guide_verifikasi');
		$this->load->view('admin/footer_admin');
	}

	function acc_guide($id,$stat){
		if($stat == 'ok'){
			$no ='1';
		}else{
			$no='2';
		}
		$datay = array(
		 'stat_prof' => $no,
		);
		$this->m_data->update_data(array('id_guide' => $id),$datay,'guide');
		$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible show fade">
			 <div class="alert-body">
				 <button class="close" data-dismiss="alert">
					 <span>×</span>
				 </button>
				 Berhasil Verifikasi Guide
			 </div>
		 </div>');
		 redirect('ntfs/guide_verifikasi');
	}

	public function data_slide(){
		$data['title'] = 'Admin Dashboard';
		$data['slide'] = $this->m_data->semua('slide')->result();
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/data_slide');
		$this->load->view('admin/footer_admin');
	}
	function hapus_slide($id){
		$cari_gambar = $this->m_data->where('slide',array('id_slide' => $id))->row();
		unlink('./uploads/slide/'.$cari_gambar->gambar_slide.'');
		$this->m_data->hapus_data(array('id_slide' => $id),'slide');
		$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible show fade">
			 <div class="alert-body">
				 <button class="close" data-dismiss="alert">
					 <span>×</span>
				 </button>
				 Gambar Slide Berhasil dihapus
			 </div>
		 </div>');
		redirect('ntfs/data_slide');
	}
	function update_slide(){
		$nmfile1 = "slide".$this->random_generate(4);
		$config1[ 'upload_path' ] = './uploads/slide/';
		$config1[ 'allowed_types' ] = 'jpg|png';
		$config1[ 'max_size' ] = 30000000;
		$config1[ 'file_name' ] = $nmfile1;
		$this->upload->initialize( $config1);
			 if($_FILES['gambar']['name']){ // jika input type file sudah ada inputan
					 if ($this->upload->do_upload('gambar')){ // upload foto
							 $gbr1 = $this->upload->data(); // deklarasi upload foto
							 unlink('./uploads/slide/'.$this->input->post('gambarx').'');
							 $data = array(
								 'gambar_slide' => $gbr1['file_name'],
							 );
							 $this->m_data->update_data(array('id_slide' => $this->input->post('id_slide')),$data,'slide');
							 $this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible show fade">
									<div class="alert-body">
										<button class="close" data-dismiss="alert">
											<span>×</span>
										</button>
										Gambar Slide Berhasil diupdate
									</div>
								</div>');
							 redirect('ntfs/data_slide');
					 }else{
					 $this->session->set_flashdata('alert','<div class="alert alert-danger alert-dismissible show fade">
									<div class="alert-body">
										<button class="close" data-dismiss="alert">
											<span>×</span>
										</button>
										'.$this->upload->display_errors().'
									</div>
								</div>');
							 redirect('ntfs/data_slide');
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
							 redirect('ntfs/data_slide');
			 }
	}
	public function tambah_slide(){
		$data['title'] = 'Admin Dashboard';
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/tambah_slide');
		$this->load->view('admin/footer_admin');
	}
	function add_slide(){
		$nmfile1 = "slide".$this->random_generate(4);
		$config1[ 'upload_path' ] = './uploads/slide/';
		$config1[ 'allowed_types' ] = 'jpg|png';
		$config1[ 'max_size' ] = 30000000;
		$config1[ 'file_name' ] = $nmfile1;
		$this->upload->initialize( $config1);
			 if($_FILES['gambar']['name']){ // jika input type file sudah ada inputan
					 if ($this->upload->do_upload('gambar')){ // upload foto
							 $gbr1 = $this->upload->data(); // deklarasi upload foto
							 $data = array(
								 'gambar_slide' => $gbr1['file_name'],
								 'created' => date('Y-m-d H:i:s'),
							 );
							 $this->db->insert('slide',$data);
							 $this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible show fade">
									<div class="alert-body">
										<button class="close" data-dismiss="alert">
											<span>×</span>
										</button>
										Gambar Slide Berhasil Ditambah
									</div>
								</div>');
							 redirect('ntfs/tambah_slide');
					 }else{
					 $this->session->set_flashdata('alert','<div class="alert alert-danger alert-dismissible show fade">
									<div class="alert-body">
										<button class="close" data-dismiss="alert">
											<span>×</span>
										</button>
										'.$this->upload->display_errors().'
									</div>
								</div>');
							 redirect('ntfs/tambah_slide');
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
							 redirect('ntfs/tambah_slide');
			 }
	}
	function delete_artikel($id){
		$this->m_data->hapus_data(array('id_blog' => $id),'blog');
		$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible show fade">
			 <div class="alert-body">
				 <button class="close" data-dismiss="alert">
					 <span>×</span>
				 </button>
				 Artikel Berhasil dihapus
			 </div>
		 </div>');
		redirect('ntfs/data_artikel');
	}
	function update_artikel(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('judul_blog', 'Judul Blog', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Blog', 'trim|required');
		if($this->form_validation->run() == FALSE){
		 redirect('ntfs/data_artikel');
		}else{
		 $nmfile1 = "artikel_".$this->random_generate(4);
		 $config1[ 'upload_path' ] = './uploads/artikel/';
		 $config1[ 'allowed_types' ] = 'jpg|png';
		 $config1[ 'max_size' ] = 30000000;
		 $config1[ 'file_name' ] = $nmfile1;
		 $this->upload->initialize( $config1);
				if($_FILES['gambar']['name']){ // jika input type file sudah ada inputan
						if ($this->upload->do_upload('gambar')){ // upload foto
								$gbr1 = $this->upload->data(); // deklarasi upload foto
								$data = array(
									'judul_blog' => $this->input->post('judul_blog'),
									'deskripsi_blog' => $this->input->post('deskripsi'),
									'gambar_blog' => $gbr1['file_name'],
									'slug' => slug($this->input->post('judul_blog')),
								);
								$this->m_data->update_data(array('id_blog' => $this->input->post('id_blog')),$data,'blog');
								$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible show fade">
									 <div class="alert-body">
										 <button class="close" data-dismiss="alert">
											 <span>×</span>
										 </button>
										 Artikel Berhasil update
									 </div>
								 </div>');
								redirect('ntfs/data_artikel');
						}else{
						$this->session->set_flashdata('alert','<div class="alert alert-danger alert-dismissible show fade">
									 <div class="alert-body">
										 <button class="close" data-dismiss="alert">
											 <span>×</span>
										 </button>
										 '.$this->upload->display_errors().'
									 </div>
								 </div>');
								redirect('ntfs/data_artikel');
						}
				}else{
					$data = array(
						'judul_blog' => $this->input->post('judul_blog'),
						'deskripsi_blog' => $this->input->post('deskripsi'),
						'slug' => slug($this->input->post('judul_blog')),
					);
					$this->m_data->update_data(array('id_blog' => $this->input->post('id_blog')),$data,'blog');
					$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible show fade">
						 <div class="alert-body">
							 <button class="close" data-dismiss="alert">
								 <span>×</span>
							 </button>
							 Artikel Berhasil update
						 </div>
					 </div>');
					redirect('ntfs/data_artikel');
				}
		}
	}
	function add_artikel(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('judul_blog', 'Judul Blog', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Blog', 'trim|required');
			 if($this->form_validation->run() == FALSE){
				redirect('ntfs/tambah_artikel');
			 }else{
				$nmfile1 = "artikel_".$this->random_generate(4);
				$config1[ 'upload_path' ] = './uploads/artikel/';
				$config1[ 'allowed_types' ] = 'jpg|png';
				$config1[ 'max_size' ] = 30000000;
				$config1[ 'file_name' ] = $nmfile1;
				$this->upload->initialize( $config1);
					 if($_FILES['gambar']['name']){ // jika input type file sudah ada inputan
							 if ($this->upload->do_upload('gambar')){ // upload foto
									 $gbr1 = $this->upload->data(); // deklarasi upload foto
									 $data = array(
										 'judul_blog' => $this->input->post('judul_blog'),
										 'deskripsi_blog' => $this->input->post('deskripsi'),
										 'gambar_blog' => $gbr1['file_name'],
										 'slug' => slug($this->input->post('judul_blog')),
										 'created' => date('Y-m-d H:i:s'),
									 );
									 $this->db->insert('blog',$data);
									 $this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible show fade">
											<div class="alert-body">
												<button class="close" data-dismiss="alert">
													<span>×</span>
												</button>
												Artikel Berhasil Ditambah
											</div>
										</div>');
									 redirect('ntfs/tambah_artikel');
							 }else{
							 $this->session->set_flashdata('alert','<div class="alert alert-danger alert-dismissible show fade">
											<div class="alert-body">
												<button class="close" data-dismiss="alert">
													<span>×</span>
												</button>
												'.$this->upload->display_errors().'
											</div>
										</div>');
									 redirect('ntfs/tambah_artikel');
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
									 redirect('ntfs/tambah_artikel');
					 }
			 }
	}
	public function tambah_artikel(){
		$data['title'] = 'Admin Dashboard';
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/tambah_artikel');
		$this->load->view('admin/footer_admin');
	}
	public function tambah_paket(){
		$data['title'] = 'Admin Dashboard';
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/tambah_paket_wisata');
		$this->load->view('admin/footer_admin');
	}
	public function data_bukti_pembayaran(){
		$data['title'] = 'Admin Dashboard';
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/data_bukti_pembayaran');
		$this->load->view('admin/footer_admin');
	}
	function email_t(){
		$this->load->view('email_template');
	}

	function send_tele_guide($chatId,$message){
		$botToken="1271475823:AAE_XFC5Ps4fNFs-Xpewge0394ekGbxcZag";

	  $website="https://api.telegram.org/bot".$botToken;
	  // $chatId=1234567;  //** ===>>>NOTE: this chatId MUST be the chat_id of a person, NOT another bot chatId !!!**
	  $params=[
	      'chat_id'=>$chatId,
	      'text'=>$message,
	  ];
	  $curl = curl_init($website . '/sendMessage');
	  curl_setopt($curl, CURLOPT_HEADER, false);
	  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	  curl_setopt($curl, CURLOPT_POST, 1);
	  curl_setopt($curl, CURLOPT_POSTFIELDS, ($params));
	  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$response = curl_exec($curl);
     $err = curl_error($curl);

     curl_close($curl);

     if ($err) {
       $response =  "cURL Error #:" . $err;
     } else {
       $response;
     }
     return json_decode($response,TRUE);
	}

	function terima_bayar(){
		// $this->m_data->update_data(array('id_bukti' => $this->input->post('id_bukti')),array('status' => '1'),'bukti_pembayaran');
		// $this->load->library('email');
		// $msg=$this->load->view('email_template','',true);
		// 	$config=array(
		// 'charset'=>'utf-8',
		// 'wordwrap'=> TRUE,
		// 'mailtype' => 'html'
		// );
		// $this->email->initialize($config);
		// $this->email->from('admin@bwitourvocation.com', 'Banyuwangi Tour Vocation');
		// $this->email->to($this->input->post('email'));
		// $this->email->subject('Selamat ! Pembayaran Anda Berhasil');
		// $this->email->message($msg);
		// $send = $this->email->send();
		// if($send){
		// 	$message = "Transaksi Masuk , pesanan paket wisata ".$this->input->post('nama_paket')." dari ".$this->input->post('nama_user')." segera cek di halaman guide anda";
		// 	$telegram = $this->send_tele_guide($this->input->post('chat_id_guide'),$message);
		// 	// echo $telegram['ok'];
		// 	// redirect('ntfs/data_bukti_pembayaran');
		// }else{
		// 	echo 'woops';
		// }
		$message = "Transaksi Masuk , pesanan paket wisata ".$this->input->post('nama_paket')." dari ".$this->input->post('nama_user')." segera cek di halaman guide anda";
		$telegram = $this->send_tele_guide($this->input->post('chat_id_guide'),$message);
		redirect('ntfs/data_bukti_pembayaran');
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
	function update_wisata(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_wisata', 'Nama Wisata', 'trim|required');
		$this->form_validation->set_rules('alamat_wisata', 'Alamat Wisata', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Wisata', 'trim|required');
		$this->form_validation->set_rules('wisata_bag', 'Wisata Bagian', 'trim|required');
			 if($this->form_validation->run() == FALSE){
				redirect('ntfs/tambah_wisata');
			 }else{
				$nmfile1 = "wisata_".$this->random_generate(4);
				$config1[ 'upload_path' ] = './uploads/wisata/';
				$config1[ 'allowed_types' ] = 'jpg|png';
				$config1[ 'max_size' ] = 30000000;
				$config1[ 'file_name' ] = $nmfile1;
				$this->upload->initialize( $config1);
					 if($_FILES['gambar']['name']){ // jika input type file sudah ada inputan
							 if ($this->upload->do_upload('gambar')){ // upload foto
									 $gbr1 = $this->upload->data(); // deklarasi upload foto
									 unlink('./uploads/wisata/'.$this->input->post('gambarx').'');

									 $data = array(
										 'nama_wisata' => $this->input->post('nama_wisata'),
										 'alamat' => $this->input->post('alamat_wisata'),
										 'deskripsi' => $this->input->post('deskripsi'),
										 'wisata_bagian' => $this->input->post('wisata_bag'),
										 'gambar' => $gbr1['file_name'],
									 );
									 $this->m_data->update_data(array('id_wisata' => $this->input->post('id_wisata')),$data,'wisata');
									 $this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible show fade">
											<div class="alert-body">
												<button class="close" data-dismiss="alert">
													<span>×</span>
												</button>
												Wisata Berhasil diupdate
											</div>
										</div>');
									 redirect('ntfs/data_wisata');
							 }else{
							 $this->session->set_flashdata('alert','<div class="alert alert-danger alert-dismissible show fade">
											<div class="alert-body">
												<button class="close" data-dismiss="alert">
													<span>×</span>
												</button>
												'.$this->upload->display_errors().'
											</div>
										</div>');
									 redirect('ntfs/data_wisata');
							 }
					 }else{
						 $data = array(
							 'nama_wisata' => $this->input->post('nama_wisata'),
							 'alamat' => $this->input->post('alamat_wisata'),
							 'deskripsi' => $this->input->post('deskripsi'),
							 'wisata_bagian' => $this->input->post('wisata_bag'),
						 );
						 $this->m_data->update_data(array('id_wisata' => $this->input->post('id_wisata')),$data,'wisata');
						 $this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible show fade">
								<div class="alert-body">
									<button class="close" data-dismiss="alert">
										<span>×</span>
									</button>
									Wisata Berhasil diupdate
								</div>
							</div>');
						 redirect('ntfs/data_wisata');
					 }
			 }
	}

	function hapus_wisata($id){
		$cari_gambar = $this->m_data->where('wisata',array('id_wisata' => $id))->row();
		unlink('./uploads/wisata/'.$cari_gambar->gambar.'');
		$this->m_data->hapus_data(array('id_wisata' => $id),'wisata');
		$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible show fade">
			 <div class="alert-body">
				 <button class="close" data-dismiss="alert">
					 <span>×</span>
				 </button>
				 Wisata Berhasil dihapus
			 </div>
		 </div>');
		redirect('ntfs/data_wisata');
	}

	public function add_wisata(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_wisata', 'Nama Wisata', 'trim|required');
		$this->form_validation->set_rules('alamat_wisata', 'Alamat Wisata', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Wisata', 'trim|required');
		$this->form_validation->set_rules('wisata_bag', 'Wisata Bagian', 'trim|required');
       if($this->form_validation->run() == FALSE){
       	redirect('ntfs/tambah_wisata');
       }else{
	      $nmfile1 = "wisata_".$this->random_generate(4);
	      $config1[ 'upload_path' ] = './uploads/wisata/';
	      $config1[ 'allowed_types' ] = 'jpg|png';
	      $config1[ 'max_size' ] = 30000000;
	      $config1[ 'file_name' ] = $nmfile1;
	      $this->upload->initialize( $config1);
	         if($_FILES['gambar']['name']){ // jika input type file sudah ada inputan
	             if ($this->upload->do_upload('gambar')){ // upload foto
	                 $gbr1 = $this->upload->data(); // deklarasi upload foto
	                 $data = array(
	                   'nama_wisata' => $this->input->post('nama_wisata'),
	                   'alamat' => $this->input->post('alamat_wisata'),
	                   'deskripsi' => $this->input->post('deskripsi'),
	                   'wisata_bagian' => $this->input->post('wisata_bag'),
	                   'gambar' => $gbr1['file_name'],
	                   'created' => date('Y-m-d H:i:s'),
	                 );
	                 $this->db->insert('wisata',$data);
	                 $this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>×</span>
                        </button>
                        Wisata Berhasil Ditambah
                      </div>
                    </div>');
	                 redirect('ntfs/tambah_wisata');
	             }else{
	             $this->session->set_flashdata('alert','<div class="alert alert-danger alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>×</span>
                        </button>
                        '.$this->upload->display_errors().'
                      </div>
                    </div>');
	                 redirect('ntfs/tambah_wisata');
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
	                 redirect('ntfs/tambah_wisata');
	         }
       }
	}
}
