<?php
class Blog_model extends MY_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->_TABLES=array('BLOG'=>'blogs','PAGE'=>'page','COMMENT'=>'comments');
    }

    public function getBlog($where=NULL,$order_by=NULL,$limit=array('limit'=>NULL,'offset'=>NULL))
    {
        $this->db->select('*');
        $this->db->from($this->_TABLES['BLOG']);
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
        $this->db->select ('*');
        $this->db->from($this->_TABLES['COMMENT']);
        $this->db->join($this->_TABLES['BLOG'],'comments.blog_id=blogs.blog_id','right');
        $this->db->where('blogs.blog_id',$id);
        return $this->db->get()->result();
    }

    public function count($where=NULL)
    {

        (!is_null($where))?$this->db->where($where):NULL;
        $this->db->from($this->_TABLES['BLOG']);
        return $this->db->count_all_results();

    }




}