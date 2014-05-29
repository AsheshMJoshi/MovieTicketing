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
		
}