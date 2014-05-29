<?php
class home extends Public_Controller{

    public function __construct(){
        parent :: __construct();
        
    }




    public function index($offset = 0)
    {
        $data['view_page']='index';
        $data['header']='Movie Ticketing';

        $this->load->view($this->_container,$data);
    }


}

?>