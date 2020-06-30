<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

  function __construct(){
    parent::__construct();
      date_default_timezone_set('Asia/Jakarta');
    $this->load->library('Ajax_pagination');
    $this->load->library('bcrypt');
      $this->perPage = 6;
  }

	public function post(){
    // $dataku['title'] = 'Data User';
      $data = array();
      //total rows count
      $totalRec = count($this->m_data->getRowsx());
      //pagination configuration
      $config['target']      = '.postList';
      $config['base_url']    = base_url().'blog/ajaxPaginationData';
      $config['total_rows']  = $totalRec;
      $config['per_page']    = $this->perPage;
      $config['link_func']   = 'searchFilter';
      $this->ajax_pagination->initialize($config);
      //get the posts data
      $data['posts'] = $this->m_data->getRowsx(array('limit'=>$this->perPage));
      // $data['kategori'] = $this->m_data->semua('kategori')->result();
      $this->load->view('user/header2',$data);
      $this->load->view('user/list_blog');
      $this->load->view('user/footer2');
	}

  public function view_post($slug){
    $data['blog'] = $this->m_data->where('blog',array('slug' => $slug))->row();
    $this->load->view('user/header2',$data);
    $this->load->view('user/isi_blog');
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
       $totalRec = count($this->m_data->getRowsx($conditions));
       //pagination configuration
       $config['target']      = '.postList';
       $config['base_url']    = base_url().'blog/ajaxPaginationData';
       $config['total_rows']  = $totalRec;
       $config['per_page']    = $this->perPage;
       $config['link_func']   = 'searchFilter';
       $this->ajax_pagination->initialize($config);
       //set start and limit
       $conditions['start'] = $offset;
       $conditions['limit'] = $this->perPage;
       //get posts data
       $data['posts'] = $this->m_data->getRowsx($conditions);
       //load the view
       $this->load->view('user/pagination_blog_post', $data, false);
  }
}
