<?php
class page extends Admin_Controller{

    public function __construct(){
        parent :: __construct();
        $this->load->model('page_model');

    }




    public function index()
    {
        $data['head_list'] = parent :: showHeader();
        $data['notify'] = parent :: msgNotify();

        $data['view_page']='page/admin/index';
        $data['header']='PAGE';
        $this->load->view($this->_container,$data);
    }

    public function lists(){

        $data['head_list'] = parent :: showHeader();
        $data['notify'] = parent :: msgNotify();

        $data['page'] = $this->page_model->getPage()->result();
        $data['view_page']='page/admin/list';
        $data['header']='PAGE';
        $this->load->view($this->_container,$data);
    }


    public function successIndex(){


        $data['page'] = $this->page_model->getPage()->result();
        $data['view_page']='page/admin/index';
        $data['head_list'] = parent :: showHeader();
        $data['notify'] = parent :: msgNotify();
        $data['header']='PAGE';
        $this->load->view($this->_container,$data);

        $this->load->view('admin/success');



    }

    public function add(){
        $this->load->helper(array('form','url'));

        $data['view_page']='page/admin/add';
        $data['head_list'] = parent :: showHeader();
        $data['notify'] = parent :: msgNotify();
        $data['header']='CREATE PAGE';
        $this->load->view($this->_container,$data);
    }



    public function insert(){

        if($this->input->post('submit')){

            // $this->load->model('news_model');
            $data = $this->getInputForm();

            $result = $this->page_model->insert('PAGE',$data);

            if($result == true){

                redirect('page/admin/page/successIndex');

            }
            else{
                $this->load->view('admin/error_page');
            }

        }
    }

        public function show($id=''){

            $data['contain'] = $this->page_model->showPage($id);
            foreach($data['contain'] as $key){
                $data['header'] = $key->page_name;
            }
            $data['head_list'] = parent :: showHeader();
            $data['notify'] = parent :: msgNotify();

            $data['page'] = $this->page_model->getPage()->result();
            $data['view_page']='page/admin/page';

            $this->load->view($this->_container,$data);

        }



    public function getInputForm(){
        $data = array(

            'page_name'   =>  $this->input->post('page_name'),
            'page_contain'   =>  $this->input->post('page_contain'),
            'page_url'           =>  $this->input->post('page_url'),
            'meta_keywords'           =>  $this->input->post('meta_keywords'),
            'meta_description'           =>  $this->input->post('meta_description'),
            'added_date'   =>  $this->input->post('added_date'),
            'status'         =>  $this->input->post('status'),
        );

        return $data;

    }


    public function delete($id = ''){


        $success = $this->page_model->delete('PAGE',array('page_id'=>$id));

        echo json_encode(array('success'=>$success));
    }

    public function edit($id = ''){

        $this->load->helper(array('form','html'));

        $data['page'] = $this->page_model->getSpecificPage($id);

        $data['view_page']='page/admin/edit';
        $data['head_list'] = parent :: showHeader();
        $data['notify'] = parent :: msgNotify();
        $data['header']='CREATE PAGE';
        $this->load->view($this->_container,$data);
    }

    public function update(){


        if($this->input->post('submit')){
            $data = $this->getInputForm();

            $result =  $this->page_model->update('PAGE',$data,array('page_id'=>$this->input->post('page_id')));
            if($result == true){


                redirect('page/admin/page/successIndex');

            }
            else{
                $this->load->view('admin/error_page');
            }
        }
    }
}

?>