<?php

class UsersLogin extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
    }
    
	public function index(){
		$this->load->view('loginPanel');
	}

    public function process(){
        $this->load->model('loginPanelValidation');
        $this->loginPanelValidation->validate();  
    }

    public function register(){
    	$this->load->view('registerPanel');
    }

    public function addUser(){
    	$this->load->model('registerUser');
        $this->loginPanelValidation->register();  
    }

    public function applicant(){
    	$this->load->view('applicant/header');
    	$this->load->view('applicant/personalDetails');
    	$this->load->view('applicant/footer');
    }

}
?>