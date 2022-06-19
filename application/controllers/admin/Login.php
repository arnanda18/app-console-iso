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
			if($this->input->post('ip-username')=='' && $this->input->post('ip-pass')==''){

				$this->session->set_userdata('message', 'inputan tidak boleh kosong');
				redirect('admin/login', 'refresh');
			}else{


				$this->form_validation->set_rules('ip-username', 'username', 'trim|required|xss_clean');
				$this->form_validation->set_rules('ip-pass', 'password', 'trim|required|xss_clean');


				if ($this->form_validation->run()==FALSE) {
					
					$this->session->set_userdata('message', "username or password invalid");
					redirect('admin/login', 'refresh');
				}else{

					$encrypt_pass = md5($this->input->post('ip-pass'));


					$username = $this->input->post('ip-username');
					$password = $encrypt_pass;


					$result = $this->Login_model->login($username, $password);

					if ($result) {
						foreach($result as $row){
							$sess_array = array(
								'username' => $row->username
							);

							$this->session->set_userdata('login', $sess_array);
							$this->session->set_userdata('username', $row->username);
						}

						$this->session->unset_userdata('message');
						redirect('admin/dashboard', 'location');

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
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('onlocat');
			redirect('admin/login', 'refresh');
		}
	}
?>