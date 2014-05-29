<?php
class Admin_Controller extends MY_Controller
{
		var $_container='admin/container.php';
			
		public function __construct()
			{
			parent::__construct();

                if(!$this->session->userdata('user'))
                {
                    redirect(site_url('login/admin/login'));
                }
			
		}

        public function showHeader(){

            $this->load->model('page/page_model');
            $result = $this->page_model->getHeader()->result();
            return $result;


        }

        public function msgNotify(){
            $this->load->model('feedback/feedback_model');
            $result = $this->feedback_model->getFeedback();
            return $result;

        }
		
}