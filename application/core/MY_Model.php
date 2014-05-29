<?php
class MY_Model extends CI_Model
{
	var $_TABLES=array();
	public function __construct()
	{
		parent::__construct();
	}
	
	public function insert($table_key,$data=array())
	{
		return $this->db->insert($this->_TABLES[$table_key],$data);
	}
	
	public function update($table_key,$data=array(),$where)
	{
		return $this->db->update($this->_TABLES[$table_key],$data,$where);
	}
	
	public function delete($table_key,$where)
	{
		return $this->db->delete($this->_TABLES[$table_key],$where);

	}	
}