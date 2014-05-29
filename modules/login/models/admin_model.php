<?php
class admin_model extends MY_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->_TABLES=array('ADMIN'=>'admin','GROUP'=>'admin_group');
    }



    public function getById($id)
    {
        return $this->getNews(array('ADMIN_id'=>$id))->row_array();
    }

    public function count($where=NULL)
    {

        (!is_null($where))?$this->db->where($where):NULL;
        $this->db->from($this->_TABLES['ADMIN']);
        return $this->db->count_all_results();

    }

    public function getAdmin($where=NULL,$order_by=NULL)
    {
        $this->db->select('*');
        $this->db->from($this->_TABLES['ADMIN']);
        $this->db->join($this->_TABLES['GROUP'],'admin.group_id=admin_group.group_id');
        (!is_null($where))?$this->db->where($where):NULL;
        (!is_null($order_by))?$this->db->order_by($order_by):NULL;

        return $this->db->get();

    }

    public function validate_login($username,$password)
    {
        $users=$this->getAdmin(array('admin_name'=>$username,'password'=>$password));
        if($users->num_rows()>0){
            return $users->row_array();
        }
        return NULL;
    }



}