<?php
	/**
	 * 
	 */
	class User_model extends CI_Model
	{

		private $_table = "user";

		public $username;
		public $password;
		public $full_name;
		public $email;
		public $id_role;

		
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

		public function save()
		{
			$post = $this->input->post();
			$encryp = md5($post['password']);
			$this->username = $post["username"];
			$this->email = $post['email'];
			$this->password = $encryp;
			$this->full_name = $post['full_name'];
			$this->id_role = $post['role'];
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
			$this->id_role = $post['role'];
			return $this->db->update($this->_table, $this, array('id_user' => $post['id_user']));
		}

		public function delete($id_user)
		{
			return $this->db->delete($this->_table, array("id_user" => $id_user));
		}

		public function getUser()
		{
			return $this->db->query("SELECT a.*, b.name_role FROM user a JOIN role_permision b ON a.id_role = b.id_role;")->result(); 
		}

		public function getById($id_user)
		{
			return $this->db->get_where($this->_table, ['id_user' => $id_user])->row();
		}

		public function getAdmin($id_role)
		{
			return $this->db->get_where($this->_table, ['id_role' => $id_role])->row();
		}
	}
?>