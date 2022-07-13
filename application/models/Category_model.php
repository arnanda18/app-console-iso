<?php 

	class Category_model extends CI_Model{


		private $_table = "category_aset";

		public $name_category;

		public function __construct()
		{
			// Home Construct
			parent::__construct();

			$this->load->database();
		}

		public function rules()
		{
			return [
				['field' => 'name_category',
				'label' => 'Name Category',
				'rules' => 'required'
				]
			];
		}

		public function save()
		{
			$post = $this->input->post();
			
			$this->name_category = $post["name_category"];
			$this->db->insert($this->_table, $this);
		}

		public function update()
		{
			$post = $this->input->post();
			$this->id_category = $post["id_category"];
			$this->name_category = $post["name_category"];
			return $this->db->update($this->_table, $this, array('id_category' => $post['id_category']));
		}

		public function delete($id_category)
		{
			return $this->db->delete($this->_table, array("id_category" => $id_category));
		}

		public function getAll()
		{
			return $this->db->get($this->_table)->result();
		}

		public function getById($id_category)
		{
			return $this->db->get_where($this->_table, ['id_category' => $id_category])->row();
		}
		public function getCountCategory()
		{
			return $this->db->count_all('category_aset');
		}
	}

?>