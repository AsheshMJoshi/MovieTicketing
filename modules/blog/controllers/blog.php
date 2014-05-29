<?php
class blog extends Public_Controller{

    public function __construct(){
        parent :: __construct();
        $this->load->model('blog_model');
    }




    public function index($offset = 0)
    {
        $data['head_list'] = parent :: showHeader();

        $this->load->library('pagination');

        $limit=2;
        $config['base_url'] = site_url('blog/blog/index/');

        $config['total_rows'] = $this->blog_model->count();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 5;
        $this->pagination->initialize($config);

        $data['blog']=$this->blog_model->getBlog(array('status'=>1),'blog_id desc',array('limit'=>$limit,'offset'=>$offset))->result();



        $data['view_page']='index';
        $data['header']='BLOG';

        $this->load->view($this->_container,$data);
    }

    public function show($id = ''){

        $this->load->model('blog_model');
        $data['cmt']=$this->blog_model->getById($id);
        $data['view_page']='blog';
        $data['head_list'] = parent :: showHeader();
        $data['header']='BLOG';

        $this->load->view($this->_container,$data);
    }



}
