<?php
class page_model extends MY_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->_TABLES=array('PAGE'=>'page');
    }

    public function getPage($where=NULL,$order_by=NULL,$limit=array('limit'=>NULL,'offset'=>NULL))
    {
        $this->db->select('*');
        $this->db->from($this->_TABLES['PAGE']);
        (!is_null($where))?$this->db->where($where):NULL;
        (!is_null($order_by))?$this->db->order_by($order_by):NULL;

        if(!is_null($limit['limit']) && !is_null($limit['offset']))
        {
            $this->db->limit($limit['limit'],$limit['offset']);
        }
        elseif(!is_null($limit['limit']))
        {
            $this->db->limit($limit['limit']);
        }

        return $this->db->get();


    }

    public function getById($id)
    {
        return $this->getPage(array('page_id'=>$id))->row_array();
    }

    public function count($where=NULL)
    {

        (!is_null($where))?$this->db->where($where):NULL;
        $this->db->from($this->_TABLES['PAGE']);
        return $this->db->count_all_results();


    }

    public function getHeader(){
        $this->db->select('*');
        $this->db->from($this->_TABLES['PAGE']);
        return $this->db->get();
    }

    public function showPage($id = ''){

        $this->db->select('*');
        $this->db->from($this->_TABLES['PAGE']);
        $this->db->where('page_id',$id);
        return $this->db->get()->result();
    }



    public function getSpecificPage($id = ''){

        $this -> db -> select('*');
        $this -> db-> from($this->_TABLES['PAGE']);
        $this->db->where('page.page_id',$id);


        return $this->db->get()->result();

    }


}