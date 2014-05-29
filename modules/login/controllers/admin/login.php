<?php
class Login extends MX_Controller{

    public function __construct(){
        parent :: __construct();
        $this->load->library('session');
        $this->load->model('admin_model');
    }




    public function index()
    {

        $this->load->helper(array('form','url'));
        $this->load->view('index');

    }

    public function validate(){



        $validate_user=$this->admin_model->validate_login($this->input->post('admin_name'),sha1($this->input->post('password')));

        if(!is_null($validate_user))
        {
            $this->session->set_userdata('user',$validate_user);
            redirect(site_url('blog/admin/blog'));
        }
        $this->session->set_flashdata('error','Please re-check your username or password');
        redirect(site_url('login/admin/login'));



    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('login/admin/login'));

    }
}
