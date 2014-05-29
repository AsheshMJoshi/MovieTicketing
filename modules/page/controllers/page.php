<?php
class page extends Public_Controller{

    public function __construct(){
        parent :: __construct();
        $this->load->model('page_model');

    }




    public function index()
    {
        $data['view_page']='';
        $data['head_list'] = parent :: showHeader();
        $data['header']='BLOG';

        $this->load->view($this->_container,$data);
    }


    public function show($id=''){

        $data['contain'] = $this->page_model->showPage($id);
        foreach($data['contain'] as $key){
            $data['header'] = $key->page_name;
        }
        $data['head_list'] = parent :: showHeader();

        $data['page'] = $this->page_model->getPage()->result();
        $data['view_page']='page';

        $this->load->view($this->_container,$data);

    }




}

?>