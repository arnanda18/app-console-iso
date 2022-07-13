<?php
	class Dashboard extends CI_Controller{


		public function __construct(){

        	parent::__construct();

        	check_login();

        	$this->load->model('Login_model');
			$this->model=$this->Login_model;

			//Load Session
			$this->load->library('session');


    	}

		public function index(){
			$tmp['title'] = 'Dashboard';
			$tmp['user'] = $this->Login_model->getAdmin("admin");

			$tmp['aset'] = $this->Aset_model->getCountAset();
			$tmp['emp'] = $this->Employee_model->getCountEmp();
			$tmp['category'] = $this->Category_model->getCountCategory();
			$tmp['content'] = 'admin/dashboard/home';
			$this->load->view('admin/layout/template', $tmp);
		}
	}
?>