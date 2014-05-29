<?php
class Setting extends Admin_Controller{

    public function __construct(){
        parent :: __construct();
        $this->load->model('setting_model');

    }




    public function index()
    {
        $data['head_list'] = parent :: showHeader();


        $data['view_page']='settings';
        $data['header']='Settings';
        $this->load->view($this->_container,$data);
    }

    public function successIndex(){


        $data['setting'] = $this->setting_model->getSetting()->result();
        $data['view_page']='settings';
        $data['head_list'] = parent :: showHeader();
        $data['notify'] = parent :: msgNotify();
        $data['header']='setting';
        $this->load->view($this->_container,$data);

        $this->load->view('admin/success');



    }
    public function lists(){
        $data['setting'] = $this->setting_model->getSetting()->result();
        $data['view_page']='list';
        $data['head_list'] = parent :: showHeader();
        $data['notify'] = parent :: msgNotify();
        $data['header']='Settings';
        $this->load->view($this->_container,$data);
    }
    public function add(){
        $this->load->helper(array('form','url'));

        $data['view_page']='add';
        $data['head_list'] = parent :: showHeader();
        $data['notify'] = parent :: msgNotify();
        $data['header']='CREATE PAGE';
        $this->load->view($this->_container,$data);
    }



    public function insert(){

        if($this->input->post('submit')){

            // $this->load->model('news_model');
            $data = $this->getInputForm();

            $result = $this->setting_model->insert('SETTING',$data);

            if($result == true){

                redirect('setting/successIndex');

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

        $data['page'] = $this->setting_model->getPage()->result();
        $data['view_page']='page/admin/page';

        $this->load->view($this->_container,$data);

    }



    public function getInputForm(){
        $data = array(

            'key'   =>  $this->input->post('key'),
            'value'   =>  $this->input->post('value'),
          );

        return $data;

    }


    public function delete($id = ''){


        $success = $this->setting_model->delete('SETTING',array('key'=>$id));

        echo json_encode(array('success'=>$success));
    }

    public function edit($id = ''){

        $this->load->helper(array('form','html'));

        $data['setting'] = $this->setting_model->getSpecificPage($id);

        $data['view_page']='edit';
        $data['head_list'] = parent :: showHeader();
        $data['notify'] = parent :: msgNotify();
        $data['header']='Edit Setting';
        $this->load->view($this->_container,$data);
    }

    public function update(){


        if($this->input->post('submit')){
            $data = $this->getInputForm();

            $result =  $this->setting_model->update('SETTING',$data,array('key'=>$this->input->post('key')));
            if($result == true){


                redirect('setting/successIndex');

            }
            else{
                $this->load->view('admin/error_page');
            }
        }
    }
}

?>