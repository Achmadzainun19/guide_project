<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class M_data extends CI_Model{
		function input_data($data,$table){
            $this->db->insert($table,$data);
        }
        function hapus_data($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }
        function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }
        function semua($table){
            return $this->db->get($table);
        }
        function where($table,$where){
            return $this->db->get_where($table,$where);
        }
        function ordernya($name,$or,$table){
            $this->db->order_by($name, $or);
            $query = $this->db->get($table);
            return $query;
        }

        function cek_akhir($name,$or,$table){
            $this->db->order_by($name, $or);
            $this->db->limit('1');
            $query = $this->db->get($table);
            return $query;
        }

				function list_guide(){
					$this->db->join('users','guide.id_user=users.id','left');
					$this->db->where('guide.stat_prof','1');
					$query = $this->db->get('guide');
					return $query;
				}
				function list_guide_v(){
					$this->db->join('users','guide.id_user=users.id','left');
					$this->db->where('guide.stat_prof','2');
					$query = $this->db->get('guide');
					return $query;
				}

        function list_bukti(){
            $this->db->join('transaksi','bukti_pembayaran.id_transaksi = transaksi.id_transaksi','left');
						$this->db->join('paket_wisata','transaksi.id_paket=paket_wisata.id_paket','left');
						$this->db->join('guide','paket_wisata.id_guide=guide.id_guide','left');
						$this->db->join('users','guide.id_user=users.id','left');
            $query = $this->db->get('bukti_pembayaran');
            return $query;
        }

				function transaksi_masuk($id){
					$this->db->join('transaksi','paket_wisata.id_paket = transaksi.id_paket','left');
					$this->db->where('paket_wisata.id_guide',$id);
					$this->db->where('transaksi.status_transaksi','1');
					// $this->db->where('transaksi.status_transaksi','3');
					$query = $this->db->get('paket_wisata');
					return $query;
				}

        function getRows($params = array()){
            $this->db->select('*');
            $this->db->from('paket_wisata');
            $this->db->join('guide','paket_wisata.id_guide = guide.id_guide','left');
            //filter data by searched keywords
            // if(!empty($params['search']['keywords'])){
            //   $this->db->like('users.first_name',$params['search']['keywords']);
            //     $this->db->or_like('users.username',$params['search']['keywords']);
            // }
            // if(!empty($params['search']['level'])){
            //   $this->db->where('users_groups.group_id',$params['search']['level']);
            // }
            //sort data by ascending or desceding order
            if(!empty($params['search']['sortBy'])){
                $this->db->order_by('paket_wisata.id_paket',$params['search']['sortBy']);
            }else{
                $this->db->order_by('paket_wisata.id_paket','ASC');
            }
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            //get records
            $query = $this->db->get();
            //return fetched data
            return ($query->num_rows() > 0)?$query->result():FALSE;
        }

				function getRowsx($params = array()){
            $this->db->select('*');
            $this->db->from('blog');
            // $this->db->join('guide','paket_wisata.id_guide = guide.id_guide','left');
            //filter data by searched keywords
            if(!empty($params['search']['keywords'])){
              $this->db->like('judul_blog',$params['search']['keywords']);
              // $this->db->or_like('judul_blog',$params['search']['keywords']);
            }
            // if(!empty($params['search']['level'])){
            //   $this->db->where('users_groups.group_id',$params['search']['level']);
            // }
            //sort data by ascending or desceding order
            if(!empty($params['search']['sortBy'])){
                $this->db->order_by('id_blog',$params['search']['sortBy']);
            }else{
                $this->db->order_by('id_blog','ASC');
            }
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            //get records
            $query = $this->db->get();
            //return fetched data
            return ($query->num_rows() > 0)?$query->result():FALSE;
        }

    }
