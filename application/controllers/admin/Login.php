<?php 
	
	/**
	 * 
	 */
	class Login extends CI_Controller
	{
		
		public $model=NULL;


		public function __construct()
		{
			// Constructor
			parent::__construct();

			//Load Model
			$this->load->model('Login_model');
			$this->model=$this->Login_model;

			//Load Session
			$this->load->library('session');

			//Load Validation Library
			$this->load->library('form_validation');

			//Load Helper
			$this->load->helper('url');
			$this->load->helper('html');
			$this->load->helper('form');

		}

		

		public function index() {

			$tmp['title'] = 'Login';
			$this->load->view('admin/login');
		}

		public function auth(){
			if($this->input->post('email')=='' && $this->input->post('password')==''){

				$this->session->set_userdata('message', 'inputan tidak boleh kosong');
				redirect('admin/login', 'refresh');
			}else{

				$l = $this->Login_model;
				$val = $this->form_validation;
				$val->set_rules($l->rules());


				if ($val->run()==FALSE) {
					
					$this->session->set_userdata('message', "username or password invalid");
					redirect('admin/login', 'refresh');
				}else{

					$encrypt_pass = md5($this->input->post('password'));


					$email = $this->input->post('email');
					$password = $encrypt_pass;


					$result = $this->Login_model->login($email, $password);

					if ($result) {
						foreach($result as $row){
							$sess_array = array(
								'email' => $row->email,
								'username' => $row->username,
								'id_role' => $row->id_role,
								'id_user' =>$row->id_user,
								'name_role' =>$row->name_role
							);

							$this->session->set_userdata('login', $sess_array);
							$this->session->set_userdata('username', $row->username);
							$this->session->set_userdata('name_role', $row->name_role);
							$this->session->set_userdata('id_role', $row->id_role);

						}

						$this->session->unset_userdata('message');
						if ($this->session->userdata('id_role') == 1 || $this->session->userdata('id_role') == 2 ) {
							redirect('admin/dashboard', 'location');
						}else{
							redirect('home/dashboard', 'location');
						}

					}else{
						$this->session->set_userdata('message', "username or password wrong");
						redirect('admin/login', 'refresh');
					}
				}
			}
		}


		public function logout() {
			$this->load->library('session');
			$this->load->helper('url');
			$this->session->unset_userdata('login');
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('onlocat');
			redirect('admin/login', 'refresh');
		}
	}
?>