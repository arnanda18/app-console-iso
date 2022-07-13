<?php

	function check_login()
	{
		$ci = &get_instance();
		$user_session = $ci->session->userdata('login');
		if (!$user_session) {
			redirect('admin/login');
		}
	}

 ?>