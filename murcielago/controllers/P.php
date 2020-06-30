<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P extends CI_Controller {

	function __construct(){
		parent::__construct();
     	date_default_timezone_set('Asia/Jakarta');
		$this->load->library('Ajax_pagination');
		$this->load->library('bcrypt');
     	$this->perPage = 1;
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

	public function index(){
		$data['post'] = $this->m_data->semua('blog')->result();
		$this->load->view('user/header',$data);
		$this->load->view('user/home');
		$this->load->view('user/footer');
	}

	public function checkout($slug){
		if(empty($slug)){
			echo 'wwops';
		}else{
			$data['transaksi'] = $this->m_data->where('transaksi',array('slug_transaksi' => $slug))->row();
			$data['paket'] = $this->m_data->where('paket_wisata',array('id_paket' => $data['transaksi']->id_paket))->row();
			$data['guide'] = $this->m_data->where('guide',array('id_guide' => $data['paket']->id_guide))->row();
			$this->load->view('user/header2',$data);
			$this->load->view('user/checkout');
			$this->load->view('user/footer2');
		}
	}

	public function upload_pembayaran($slug){
		if(empty($slug)){
			echo 'wwops';
		}else{
			$data['transaksi'] = $this->m_data->where('transaksi',array('slug_transaksi' => $slug))->row();
			$data['paket'] = $this->m_data->where('paket_wisata',array('id_paket' => $data['transaksi']->id_paket))->row();
			$data['guide'] = $this->m_data->where('guide',array('id_guide' => $data['paket']->id_guide))->row();
			$data['peserta_transaksi'] = $this->m_data->where('peserta_transaksi',array('id_transaksi' => $data['transaksi']->id_transaksi))->result();
			$this->load->view('user/header2',$data);
			$this->load->view('user/upload_bukti_pembayaran');
			$this->load->view('user/footer2');
		}
	}

	function upload_bukti_sys(){
		$nmfile1 = "bukti_pembayaran-".$this->random_generate(6)."_".base64_encode(date('Y-m-d H:i:s'));
		$config1[ 'upload_path' ] = './uploads/bukti/';
		$config1[ 'allowed_types' ] = 'jpg|jpeg|png|pdf';
		$config1[ 'max_size' ] = 10000;
		$config1[ 'file_name' ] = $nmfile1;
		$this->upload->initialize( $config1);
			 if($_FILES['file']['name']){ // jika input type file sudah ada inputan
				 if ($this->upload->do_upload('file')){ // upload foto
					$gbr1 = $this->upload->data(); // deklarasi upload foto
					$data = array(
						'nama_bank' => $this->input->post('nama_bank'),
						'atas_nama' => $this->input->post('atas_nama'),
						'no_rek' => $this->input->post('no_rek'),
						'id_transaksi' => $this->input->post('id_transaksi'),
						'bukti' => $gbr1['file_name']
					);
					$this->db->insert('bukti_pembayaran',$data);
				 	$status = "success";
					$msg = "Data Berhasil masuk !";
				 }else{
				 	$status = "error";
				 	$msg = $this->upload->display_errors();
				 }
			 }else{
				 $status = "error";
				 $msg = "Bukti tidak ada !";
			 }
		$this->output->set_content_type('application/json')->set_output(
			json_encode(
				array(
					'status' => $status,
					'msg' => strip_tags($msg)
					)
				)
		);
	}

	function sys_paynext(){
		$nm = $this->input->post('panggilan');
		foreach ($nm as $k => $v) {
			$data = array(
				'panggilan' => $_POST['panggilan'][$k],
				'nama_lengkap' => $_POST['nama_lengkapx'][$k],
				'identitas' => $_POST['identitas'][$k],
				'no_identitas' => $_POST['nomor_identitas'][$k],
				'created' => date('Y-m-d H:i:s'),
				'id_transaksi' => $_POST['id_transaksi']
			);
			$this->db->insert('peserta_transaksi',$data);
		}
		redirect('p/konfir_checkout/'.$this->input->post('slug_transaksi').'');
	}

	function sys_paynext_u(){
		$nm = $this->input->post('panggilan');
		foreach ($nm as $k => $v) {
			$data = array(
				'panggilan' => $_POST['panggilan'][$k],
				'nama_lengkap' => $_POST['nama_lengkapx'][$k],
				'identitas' => $_POST['identitas'][$k],
				'no_identitas' => $_POST['nomor_identitas'][$k],
				'created' => date('Y-m-d H:i:s'),
				'id_transaksi' => $_POST['id_transaksi']
			);
			$this->m_data->update_data(array('id_peserta' => $_POST['id_peserta'][$k]),$data,'peserta_transaksi');
		}
		redirect('p/konfir_checkout/'.$this->input->post('slug_transaksi').'');
	}

	public function konfir_checkout($slug){
		if(empty($slug)){
			echo 'wwops';
		}else{
			$data['transaksi'] = $this->m_data->where('transaksi',array('slug_transaksi' => $slug))->row();
			$data['paket'] = $this->m_data->where('paket_wisata',array('id_paket' => $data['transaksi']->id_paket))->row();
			$data['guide'] = $this->m_data->where('guide',array('id_guide' => $data['paket']->id_guide))->row();
			$data['peserta_transaksi'] = $this->m_data->where('peserta_transaksi',array('id_transaksi' => $data['transaksi']->id_transaksi))->result();
			$this->load->view('user/header2',$data);
			$this->load->view('user/konfir_checkout');
			$this->load->view('user/footer2');
		}
	}

	public function detail_paket($slug){
		$data['paket'] = $this->m_data->where('paket_wisata',array('slug' => $slug))->row();
		$data['guide'] = $this->m_data->where('guide',array('id_guide' => $data['paket']->id_guide))->row();
		$this->load->view('user/header2',$data);
		$this->load->view('user/isi_paket_wisata');
		$this->load->view('user/footer2');
	}

	function checkout_sys(){
		$harga_dewasa = $this->input->post('harga_dewasa');
		$harga_anak = $this->input->post('harga_anak');
		$total = ($harga_dewasa * $this->input->post('quant')) + ($harga_anak * $this->input->post('hitunganak'));
		$code = base64_encode(md5(date('Y-m-d H:i:s')."_".$this->input->post('id_paket')."_".$total));
		$slugx = rtrim($code, '=');
		$data = array(
			'tanggal_transaksi' => $this->input->post('tgl_mulai'),
			'jumlah_peserta' => $this->input->post('quant'),
			// 'jumlah_anak' => $this->input->post('hitunganak'),
			'id_user' => '3',
			'total_harga' => $total,
			'id_paket' => $this->input->post('id_paket'),
			'created' => date('Y-m-d H:i:s'),
			'slug_transaksi' => $slugx,
		);
		$this->db->insert('transaksi',$data);
		$id = $this->db->insert_id();
		redirect('p/checkout/'.$slugx.'');
	}

	public function paket_wisata(){
		// $dataku['title'] = 'Data User';
	    $data = array();
	    //total rows count
	    $totalRec = count($this->m_data->getRows());
	    //pagination configuration
	    $config['target']      = '.postList';
	    $config['base_url']    = base_url().'p/ajaxPaginationData';
	    $config['total_rows']  = $totalRec;
	    $config['per_page']    = $this->perPage;
	    $config['link_func']   = 'searchFilter';
	    $this->ajax_pagination->initialize($config);
	    //get the posts data
	    $data['posts'] = $this->m_data->getRows(array('limit'=>$this->perPage));
	    // $data['kategori'] = $this->m_data->semua('kategori')->result();
		$this->load->view('user/header2',$data);
		$this->load->view('user/paket_wisata');
		$this->load->view('user/footer2');
	}

	function ajaxPaginationData(){
    $conditions = array();
       //calc offset number
       $page = $this->input->post('page');
       if(!$page){
           $offset = 0;
       }else{
           $offset = $page;
       }
       //set conditions for search
       $keywords = $this->input->post('keywords');
       $sortBy = $this->input->post('sortBy');
       if(!empty($keywords)){
           $conditions['search']['keywords'] = $keywords;
       }

       if(!empty($sortBy)){
           $conditions['search']['sortBy'] = $sortBy;
       }
       //total rows count
       $totalRec = count($this->m_data->getRows($conditions));
       //pagination configuration
       $config['target']      = '.postList';
       $config['base_url']    = base_url().'p/ajaxPaginationData1';
       $config['total_rows']  = $totalRec;
       $config['per_page']    = $this->perPage;
       $config['link_func']   = 'searchFilter';
       $this->ajax_pagination->initialize($config);
       //set start and limit
       $conditions['start'] = $offset;
       $conditions['limit'] = $this->perPage;
       //get posts data
       $data['posts'] = $this->m_data->getRows($conditions);
       //load the view
       $this->load->view('user/pagination_paket_wisata', $data, false);
  }

	public function choose(){
		$this->load->view('user/header2');
		$this->load->view('user/redi');
		$this->load->view('user/footer2');
	}

}
