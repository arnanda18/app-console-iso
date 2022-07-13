<?php
	/**
	 * 
	 */
	class Login_model extends CI_Model
	{

		private $_table = "user";

		public $username;
		public $password;
		public $full_name;
		public $email;
		public $role;

		
		public function __construct()
		{
			// Home Construct
			parent::__construct();

			$this->load->database();
		}

		public function rules()
		{
			return [
				['field' => 'email',
				'label' => 'email',
				'rules' => 'required'
				],

				['field' => 'password',
				'label' => 'password',
				'rules' => 'required'
				]
			];
		}

		public function login($email, $password) {
			$this->db->select('a.*, b.name_role');
			$this->db->from('user as a');
			$this->db->where('email', $email);
			$this->db->where('password', $password);
			$this->db->join('role_permision as b', 'a.id_role = b.id_role');

			$query=$this->db->get();

			if ($query->num_rows()==1) {
				$result = $query->result();
				return $result;				
			}else{
				return false;
			}
		}

		public function getAdmin($id_role)
		{
			return $this->db->get_where($this->_table, ['id_role' => $id_role])->row();
		}
	}
?>