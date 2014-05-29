<?php
class Feedback extends Public_Controller{

    public function __construct(){
        parent :: __construct();
        $this->load->model('feedback_model');
    }




    public function index()
    {
        $data['view_page']='index';
        $data['header']='FeedBack';

        $this->load->view($this->_container,$data);
    }

    public function insert(){

//        if($this->input->POST('submit')){
            $this->contact_model->insert();
            $this->index();
//    }
    }
}
