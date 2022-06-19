<?php
	class Dashboard extends CI_Controller{


		public function __construct(){

        	parent::__construct();

        	$this->load->model('Login_model');
			$this->model=$this->Login_model;

			//Load Session
			$this->load->library('session');
    	}

		public function index(){
			$tmp['title'] = 'Dashboard';
			$tmp['user'] = $this->Login_model->getAdmin("admin");



			$tmp['content'] = 'admin/dashboard/home';
			$this->load->view('admin/layout/template', $tmp);
		}
	}
?>