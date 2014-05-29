<?php


class Dashboard extends Admin_Controller{


    public function __construct(){
        parent :: __construct();
        //$this->load->model('blog_model');
        //$this->load->model('setting/setting_model');

    }




    public function index()
    {
        //$data['head_list'] = parent :: showHeader();
        //$data['notify'] = parent :: msgNotify();

        $data['view_page']='dashboard';
        $data['header']='Dashboard';
        //$data['news']=$this->news_model->getNews()->result_array();

        $this->load->view($this->_container,$data);

        //$this->load->view('admin/header',$data);
        //$this->load->view('blog/admin/index');
    }

    public function lists($offset = 0)
    {

        $this->load->library('pagination');

        $limit=2;
        $config['base_url'] = site_url('blog/admin/blog/lists/');

        $config['total_rows'] = $this->blog_model->count();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 5;
        $this->pagination->initialize($config);

        $data['blog']=$this->blog_model->getBlog(NULL,'blog_id desc',array('limit'=>$limit,'offset'=>$offset))->result();


        $data['head_list'] = parent :: showHeader();
        $data['notify'] = parent :: msgNotify();
        $data['view_page']='blog/admin/list';
        $data['header']='ADMIN BLOG';

        $this->load->view($this->_container,$data);
    }

    public function delete($id = ''){

        $result = $this->blog_model->delete('BLOG',array('blog_id'=>$id));

        echo json_encode(array('success'=>$result));


    }

    public function show($id = ''){

        $data['cmt']=$this->blog_model->getById($id);
        $data['setting'] = $this->setting_model->getSetting()->result();
        $data['view_page']='blog';
        $data['head_list'] = parent :: showHeader();
        $data['notify'] = parent :: msgNotify();
        $data['header']='BLOG';

        $this->load->view($this->_container,$data);
    }



}


?>