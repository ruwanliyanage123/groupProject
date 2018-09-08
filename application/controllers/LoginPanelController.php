<?php

class LoginPanelController extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
    }
    
	public function index(){
		$this->load->view('loginPanel');
	}

    public function process(){
        //echo 'hahahahahha';
        $this->load->model('loginPanelValidation');
        $this->loginPanelValidation->validate();  
    }

    public function register(){
    	$this->load->view('registerPanel');
    }

}
?>