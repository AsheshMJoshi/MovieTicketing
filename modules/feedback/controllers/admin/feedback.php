<?php
class Feedback extends Admin_Controller{

    public function __construct(){

        parent :: __construct();
        $this->load->model('feedback_model');
    }




    public function index()
    {

        $data['view_page']='feedback/admin/index';
        $data['head_list'] = parent :: showHeader();
        $data['notify'] = parent :: msgNotify();
        $data['header']='Message';

        $this->load->view($this->_container,$data);
    }

    public function lists($offset = 0){

        $this->load->library('pagination');

        $limit=2;
        $config['base_url'] = site_url('feedback/admin/feedback/lists/');

        $config['total_rows'] = $this->feedback_model->count();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 5;
        $this->pagination->initialize($config);

        $data['feedback']=$this->feedback_model->getFeedback(NULL,'id desc',array('limit'=>$limit,'offset'=>$offset));


        $data['head_list'] = parent :: showHeader();
        $data['notify'] = parent :: msgNotify();
        $data['view_page']='feedback/admin/list';
        $data['header']='ADMIN BLOG';

        $this->load->view($this->_container,$data);
    }

    public function delete($id = ''){

        $result = $this->feedback_model->delete('FEEDBACK',array('id'=>$id));

        echo json_encode(array('success'=>$result));


    }

    public function read($id = ''){

        $data = array(
            'flag' => false
        );
        $result =  $this->feedback_model->update('FEEDBACK',$data,array('id'=>$id));


        $data['feedback'] = $this->feedback_model->getFeedback(array('id'=>$id),null,null);
        $data['head_list'] = parent :: showHeader();
        $data['notify'] = parent :: msgNotify();
        $data['view_page']='feedback/admin/read';
        $data['header']='ADMIN BLOG';

        $this->load->view($this->_container,$data);
    }



}
