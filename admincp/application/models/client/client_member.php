<?php

class Client_member extends CI_Model {


	public function get_website_members($page,$offset) {
		return $this->db->select('m.uid,m.email,m.username,m.regdate,m.lastlogintime,p.position')
		->from('ucenter_members m')
		->join('common_member_profile p' , 'p.uid = m.uid' , 'left')
		->order_by('uid','desc')
		->limit($offset , ($page-1)*$offset)
		->get()->result_array();
	}

	public function get_all_clients() {
		return $this->db->select(' c.id,c.name,c.position, c.email ,a.username , cmp.id as cid,cmp.name as cname')
				        ->from('admin_client c')
				        ->join('admin_acl a' , 'a.user_id = c.salesman_id')
				        ->join('admin_client_corporation cmp' , 'cmp.id = c.company_id')
				        ->order_by('id' , 'asc')
				        ->get()->result_array();
	}

	public function get_sum_of_members() {
		return $this->db->get('ucenter_members')->num_rows();
	}

	public function throw_profile( $id) {
		$profile = $this->db->select('*')
							->from('admin_client')
							->where( array('id' => $id))
							->get()->result_array();
		if( isset( $profile[0]['id'])) {
			$profile = $profile[0];
			unset( $profile['id']);
			if( $this->db->insert( 'admin_client_useless' , $profile)) {
				$this->db->where( array('id' => $id))
						 ->delete('admin_client' , array('id' => $id));
				return Status::FINISH;
			}
		}

		return Status::FAIL;
	}
}