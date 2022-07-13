<?php 

	class Employee_model extends CI_Model{


		private $_table = "employee";


		public function __construct()
		{
			// Home Construct
			parent::__construct();

			$this->load->database();
		}

		public function rules()
		{
			return [
				['field' => 'name_emp',
				'label' => 'Name',
				'rules' => 'required'
				],

				['field' => 'email_emp',
				'label' => 'Email',
				'rules' => 'required'
				]
			];
		}

		public function save()
		{
			$post = $this->input->post();
			$this->name_emp = $post['name_emp'];
			$this->email_emp = $post['email_emp'];
			$this->position = $post['position'];
			$this->divisi = $post['divisi'];
			$this->status = $post['status'];
			$this->phone = $post['phone'];
			$this->db->insert($this->_table, $this);
		}

		public function update()
		{
			$post = $this->input->post();
			$this->id_emp = $post["id_emp"];
			$this->name_emp = $post['name_emp'];
			$this->email_emp = $post['email_emp'];
			$this->position = $post['position'];
			$this->divisi = $post['divisi'];
			$this->status = $post['status'];
			$this->phone = $post['phone'];
			return $this->db->update($this->_table, $this, array('id_emp' => $post['id_emp']));
		}

		public function delete($id_emp)
		{
			return $this->db->delete($this->_table, array("id_emp" => $id_emp));
		}

		public function getAll()
		{
			return $this->db->get($this->_table)->result();
		}
		public function getById($id_emp)
		{
			return $this->db->get_where($this->_table, ['id_emp' => $id_emp])->row();
		}
		public function getCountEmp()
		{
			return $this->db->count_all('employee');
		}

	}

?>