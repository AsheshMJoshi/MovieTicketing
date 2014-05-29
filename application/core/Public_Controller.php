<?php
class Public_Controller extends MY_Controller
{
var $_container='public/container.php';

    public function __construct()
    {
        parent::__construct();

    }

    public function showHeader(){

        $this->load->model('page/page_model');
        $result = $this->page_model->getHeader()->result();
        return $result;


    }


}

?>