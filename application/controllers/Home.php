<?php

/**
 * 
 */
class Home extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('index');
		
	}

	public function dashboard()
	{

		check_login();
		$tmp['aset'] = $this->Aset_model->getCountAset();
		$tmp['emp'] = $this->Employee_model->getCountEmp();
		$tmp['category'] = $this->Category_model->getCountCategory();

		$tmp['content'] = 'frontend/dashboard/home';

		$this->load->view('frontend/layout/template', $tmp);
	}

	public function asets()
	{
		check_login();
		$tmp['aset'] =  $this->Aset_model->getAll();		

		$tmp['title'] = 'Aset';
		$tmp['content'] = 'frontend/data_aset/view_aset';
		$this->load->view('frontend/layout/template', $tmp);
	}

	public function category()
	{
		check_login();
		$tmp['category'] = $this->Category_model->getAll();


		$tmp['title'] = 'Category';
		$tmp['content'] = 'frontend/category_aset/category_aset_view';
		$this->load->view('frontend/layout/template', $tmp);
	}

	public function employee()
	{
		check_login();
		$tmp['emp'] = $this->Employee_model->getAll();


		$tmp['title'] = 'Employee';
		$tmp['content'] = 'frontend/employee/employee_view';
		$this->load->view('frontend/layout/template', $tmp);
	}
}


?>