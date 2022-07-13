<?php 

	class Aset_model extends CI_Model{


		private $_table = "asets";



		public function __construct()
		{
			// Home Construct
			parent::__construct();

			$this->load->database();
		}

		public function rules()
		{
			return [
				['field' => 'name_aset',
				'label' => 'Name Aset',
				'rules' => 'required'
				],

				['field' => 'no_aset',
				'label' => 'No Aset',
				'rules' => 'required'
				]

			];
		}

		public function save()
		{
			$post = $this->input->post();
			
			$this->name_aset = $post['name_aset'];
			$this->no_aset = $post['no_aset'];
			$this->id_category = $post['category'];
			$this->id_emp = $post['pemilik'];
			$this->status_aset = $post['status_aset'];
			$this->location = $post['location'];
			$this->keterangan = $post['keterangan'];
			$this->db->insert($this->_table, $this);
		}

		public function update()
		{
			$post = $this->input->post();
			$this->id_aset = $post["id_aset"];
			$this->name_aset = $post['name_aset'];
			$this->no_aset = $post['no_aset'];
			$this->id_category = $post['category'];
			$this->id_emp = $post['pemilik'];
			$this->status_aset = $post['status_aset'];
			$this->location = $post['location'];
			$this->keterangan = $post['keterangan'];
			return $this->db->update($this->_table, $this, array('id_aset' => $post['id_aset']));
		}

		public function delete($id_aset)
		{
			return $this->db->delete($this->_table, array("id_aset" => $id_aset));
		}

		public function getAll()
		{
			return $this->db->query("SELECT a.*, b.name_category, c.name_emp FROM asets a JOIN category_aset b ON a.id_category = b.id_category JOIN employee c ON a.id_emp = c.id_emp;")->result();
		}

		public function getById($id_aset)
		{
			return $this->db->get_where($this->_table, ['id_aset' => $id_aset])->row();
		}

		public function getCountAset()
		{
			return $this->db->count_all('asets');
		}

	}

?>