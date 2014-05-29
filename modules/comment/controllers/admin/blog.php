<?php
class blog extends MX_Controller{
    public function __construct(){
        parent :: __construct();
    }

    private $names = array('tom', 'sally', 'fred', 'max', 'timmy', 'russel', 'peter', 'angie', 'megan', 'thomas', 'mitchell', 'sally', 'wilma', 'bob', 'alice', 'rick', 'james', 'walker', 'johnny', 'tj', 'thomas', 'jackson', 'sigmond', 'maxwell', 'sam', 'freddy', 'don');


    /* The index() function gets called on page load. */
    public function index()
    {
		$this->load->view('admin/index');
	}
      
}
