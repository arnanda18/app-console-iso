<?php 

	class Role_model extends CI_Model{


		private $_table = "role_permision";

		public $id_role;

		public function __construct()
		{
			// Home Construct
			parent::__construct();

			$this->load->database();
		}


		public function getRolePermision()
		{
			return $this->db->get($this->_table)->result();
		}


	}

?>