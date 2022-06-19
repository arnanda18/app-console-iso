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
				['field' => 'username',
				'label' => 'Username',
				'rules' => 'required'
				],

				['field' => 'email',
				'label' => 'Email',
				'rules' => 'required'
				],

				['field' => 'password',
				'label' => 'Password',
				'rules' => 'required'
				]
			];
		}

		public function login($username, $password) {
			$this->db->select('username, password');
			$this->db->from('user');
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			$query=$this->db->get();

			if ($query->num_rows()==1) {
				$result = $query->result();
				return $result;				
			}else{
				return false;
			}
		}

		public function save()
		{
			$post = $this->input->post();
			$encryp = md5($post['password']);
			$this->username = $post["username"];
			$this->email = $post['email'];
			$this->password = $encryp;
			$this->full_name = $post['full_name'];
			$this->role = $post['role'];
			$this->db->insert($this->_table, $this);
		}

		public function update()
		{
			$post = $this->input->post();
			$encryp = md5($post['password']);
			$this->id_user = $post["id_user"];
			$this->username = $post["username"];
			$this->email = $post['email'];
			$this->password = $encryp;
			$this->full_name = $post['full_name'];
			$this->role = $post['role'];
			return $this->db->update($this->_table, $this, array('id_user' => $post['id_user']));
		}

		public function delete($id_user)
		{
			return $this->db->delete($this->_table, array("id_user" => $id_user));
		}

		public function getAll()
		{
			return $this->db->get($this->_table)->result();
		}

		public function getById($id_user)
		{
			return $this->db->get_where($this->_table, ['id_user' => $id_user])->row();
		}

		public function getAdmin($role)
		{
			return $this->db->get_where($this->_table, ['role' => $role])->row();
		}
	}
?>