<?php
	
	class Aset extends CI_Controller{


		public function __construct(){

			parent::__construct();
			check_login();
		}

		public function index(){

			$tmp['aset'] =  $this->Aset_model->getAll();


			$tmp['title'] = 'Aset';
			$tmp['content'] = 'admin/data_aset/view_aset';
			$this->load->view('admin/layout/template', $tmp);
		}

		public function add()
		{
			$aset = $this->Aset_model;
			$val = $this->form_validation;
			$val->set_rules($aset->rules());


			if ($val->run()) {
				
				$aset->save();
				$this->session->set_flashdata('success', 'Berhasil disimpan');

			}

			$tmp['aset'] = $this->Aset_model->getAll();
			$tmp['category'] = $this->Category_model->getAll();
			$tmp['emp'] = $this->Employee_model->getAll();

			$tmp['content'] = 'admin/data_aset/form_add';
			$this->load->view('admin/layout/template', $tmp);
		}

		public function update($id_aset =null)
		{
			$aset = $this->Aset_model;
			if (!isset($id_aset)) redirect('admin/aset');

	        $tmp["dataaset"] = $aset->getById($id_aset);
	        if (!$tmp["dataaset"]) show_404();	

	        $tmp['category'] = $this->Category_model->getAll();
			$tmp['emp'] = $this->Employee_model->getAll();
	        $tmp['content'] = 'admin/data_aset/form_edit';
			$this->load->view('admin/layout/template', $tmp);	    
		}

		public function updateData()
		{
			$aset = $this->Aset_model;
	        $val = $this->form_validation;
	        $val->set_rules($aset->rules());

	        if ($val->run()) {
	            $aset->update();
	            $this->session->set_flashdata('success', 'Berhasil disimpan');
	            redirect('admin/aset');
	        }					
		}

		public function delete($id_aset)
		{
	        if (!isset($id_aset)) show_404();

	        if ($this->Aset_model->delete($id_aset)){
	            $this->session->set_flashdata('delete','Data Berhasil Dihapus!');
	            redirect(site_url('admin/aset'));
        	}
    
		}
	}
?>