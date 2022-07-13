<?php
	
	class Employee extends CI_Controller{


		public function __construct()
		{
			parent::__construct();
			check_login();
			
		}


		public function index(){

			$tmp['emp'] = $this->Employee_model->getAll();


			$tmp['title'] = 'Employee';
			$tmp['content'] = 'admin/employee/employee_view';
			$this->load->view('admin/layout/template', $tmp);
		}

		public function add()
		{
			$emp = $this->Employee_model;
			$val = $this->form_validation;
			$val->set_rules($emp->rules());


			if ($val->run()) {
				
				$emp->save();
				$this->session->set_flashdata('success', 'Berhasil disimpan');

			}

			$tmp['emp'] = $this->Employee_model->getAll();

			$tmp['content'] = 'admin/employee/form_add';
			$this->load->view('admin/layout/template', $tmp);
		}

		public function update($id_emp =null)
		{
			$emp = $this->Employee_model;
			if (!isset($id_emp)) redirect('admin/employee');

	        $tmp["dataemp"] = $emp->getById($id_emp);
	        if (!$tmp["dataemp"]) show_404();

	        $tmp['emp'] = $this->Employee_model->getAll();		

	        $tmp['content'] = 'admin/employee/form_edit';
			$this->load->view('admin/layout/template', $tmp);	    
		}

		public function updateData()
		{
			$emp = $this->Employee_model;
	        $val = $this->form_validation;
	        $val->set_rules($emp->rules());

	        if ($val->run()) {
	            $emp->update();
	            $this->session->set_flashdata('success', 'Berhasil disimpan');
	            redirect('admin/employee');
	        }					
		}

		public function delete($id_emp)
		{
	        if (!isset($id_emp)) show_404();

	        if ($this->Employee_model->delete($id_emp)){
	            $this->session->set_flashdata('delete','Data Berhasil Dihapus!');
	            redirect(site_url('admin/employee'));
        	}
    
		}
		
	}
