<?php

class Define_data extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_selection_key_value( $table , $key , $value)
	{
		return $this->db->select( $key . ' as value ,' . $value . ' as name')
						->from( $table)
						->get()
						->result_array();
	}

	public function get_data_by_id( $table , $id , $key_name , $field = '*')
	{

		if( is_array( $field))
		{	
			$field = implode(',', $field);
		}

		return $this->db->select( $field)
						->from( $table)
						->where( array($key_name => $id))
						->order_by('id', 'asc')
						->get()
						->result_array();
	}
	
	public function get_modules()
	{
		return array(
			'client_module' 	=> array( 	'route' => 'client' 	, 'alias' => '客户管理 [ 管理员 ] ' , 'status' => 'active')  , 
			'sale_module' 		=> array(	'route' => 'sale' 		, 'alias' => '销售管理' , 'status' => 'active')  , 
			'mailer_module' 	=> array(	'route' => 'mailer' 	, 'alias' => '市场管理' , 'status' => 'active')  , 
			'product_module' 	=> array( 	'route' => 'course' 	, 'alias' => '产品管理' , 'status' => 'active')  ,
			'portal_module' 	=> array(	'route' => 'portal' 	, 'alias' => '门户管理 [ 文章 ]' , 'status' => 'active')  ,
			'web_module' 		=> array(	'route' => 'website' 	, 'alias' => '网站管理' , 'status' => 'active')  ,  
			//'log_module' 		=> array(	'route' => 'log' 		, 'alias' => '日志管理' , 'status' => 'active')  ,
			//'sales_module' => array('route' => 'sales' , 'alias' => '销售机会/订单' , 'status' => 'active') , 
			//'finanace_module' => array('route' => 'finance' , 'alias' => '财务管理' , 'status' => 'active')  , 
			'configure_module' 	=> array(	'route' => 'configure'	, 'alias' => '后台设置' , 'status' => 'active')  , 
		);		
	}

}