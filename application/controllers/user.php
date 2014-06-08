<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/user
	 *	- or -  
	 * 		http://example.com/index.php/user/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/user/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	var $baseUrl;
	var $data;
	
	public function __construct()
	{
		// Call the CI_Controller constructor
		parent::__construct();
	}
	
	public function index()
	{
		$sessionData = $this->session->all_userdata();
		$loggedin = (int)$sessionData['loggedin'];
		if (!$loggedin)
		{
			// with 301 redirect
			redirect($this->baseUrl.'user/login', 'location', 301);
			//redirect($this->baseUrl, 'refresh');
		}
	}
	
	public function login($check='')
	{
		if($check == "check")
		{
			$jsonArray = array("success"=>0, "data"=>array(), "message"=>"");
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			if($user = $this->UserModel->getUserByUsername($username))
			{
				if($user[0]->password == md5($password))
				{
					$newdata = array(
							'username'  => $user[0]->username,
							'email'	 => $user[0]->email,
							'loggedin' => TRUE
					);
					
					$this->session->set_userdata($newdata);
					$jsonArray['success'] = 1;
					$jsonArray['data'] = $newdata;
				}
				else
				{
					$jsonArray['success'] = 0;
					$jsonArray['message'] = "Wrong username or password";
				}
			}
			echo json_encode($jsonArray);
			exit();
			
		}
		else
		{
			$this->load->view('header',$this->data);
			$this->load->view('login',$this->data);
			$this->load->view('footer',$this->data);
		}
	}
	
	public function logout()
	{
		$newdata = array(
				'username'  => $user[0]->username,
				'email'	 => $user[0]->email,
				'loggedin' => FALSE
		);
		$this->session->set_userdata($newdata);
		redirect($this->baseUrl.'/','301');
	}
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */