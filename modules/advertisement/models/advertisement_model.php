<?php
class advertisement_model extends MY_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->_TABLES=array('FEEDBACK'=>'feedback');
        $this->load->database();
    }

    public function insert(){
        $data = array(
            'Name'=>$this->input->post('name'),
            'email'=>$this->input->post('email'),
            'feedback'=>$this->input->post('description'),
        );

        $this->db->insert('FEEDBACK',$data);
    }
    public function getFeedback($where=NULL,$order_by=NULL,$limit=array('limit'=>NULL,'offset'=>NULL))
    {
        $this->db->select('*');
        $this->db->from($this->_TABLES['FEEDBACK']);
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

        return $this->db->get()->result();


    }


    public function count($where=NULL)
    {

        (!is_null($where))?$this->db->where($where):NULL;
        $this->db->from($this->_TABLES['FEEDBACK']);
        return $this->db->count_all_results();

    }




}
?>