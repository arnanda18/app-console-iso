<?php
	
	class Category_Aset extends CI_Controller{

		public function __construct()
		{
			parent::__construct();
			check_login();
			
		}


		public function index(){

			$tmp['category'] = $this->Category_model->getAll();


			$tmp['title'] = 'Category';
			$tmp['content'] = 'admin/category_aset/category_aset_view';
			$this->load->view('admin/layout/template', $tmp);
		}

		public function add()
		{
			$category = $this->Category_model;
			$val = $this->form_validation;
			$val->set_rules($category->rules());


			if ($val->run()) {
				
				$category->save();
				$this->session->set_flashdata('success', 'Berhasil disimpan');

			}

			$tmp['category'] = $this->Category_model->getAll();

			$tmp['content'] = 'admin/category_aset/form_add';
			$this->load->view('admin/layout/template', $tmp);
		}

		public function update($id_category =null)
		{
			$category = $this->Category_model;
			if (!isset($id_category)) redirect('admin/category_aset');

	        $tmp["datacategory"] = $category->getById($id_category);
	        if (!$tmp["datacategory"]) show_404();		

	        $tmp['content'] = 'admin/category_aset/form_edit';
			$this->load->view('admin/layout/template', $tmp);	    
		}

		public function updateData()
		{
			$category = $this->Category_model;
	        $val = $this->form_validation;
	        $val->set_rules($category->rules());

	        if ($val->run()) {
	            $category->update();
	            $this->session->set_flashdata('success', 'Berhasil disimpan');
	            redirect('admin/category_aset');
	        }					
		}

		public function delete($id_category)
		{
	        if (!isset($id_category)) show_404();

	        if ($this->Category_model->delete($id_category)){
	            $this->session->set_flashdata('delete','Data Berhasil Dihapus!');
	            redirect(site_url('admin/category_aset'));
        	}
    
		}
	}
