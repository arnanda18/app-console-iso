<?php
	
	class Role_Permision extends CI_Controller{


		public function __construct()
		{
			parent::__construct();
			check_login();
			
		}


		public function index(){

			$tmp['role'] = $this->Role_model->getRolePermision();


			$tmp['title'] = 'Role';
			$tmp['content'] = 'admin/role_permision/view_role_permision';
			$this->load->view('admin/layout/template', $tmp);
		}

		}
?>