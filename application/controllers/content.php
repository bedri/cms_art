<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
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
		redirect($this->baseUrl.'/','301');
	}

	public function showPage($code)
	{
		if($code == "news")
		{
			$announcements = $this->MainModel->getAllAnnouncements();
			$this->data['announcements'] = $announcements;
		}
		else
		{
			$content = $this->MainModel->getContentByCode($code);
			$contentName = $content[0]->name;
			$contentDescription = $content[0]->description;
			$contentPhoto = $content[0]->coverImage;
			
			$this->data['contentName'] = $contentName;
			$this->data['contentDescription'] = $contentDescription;
			$this->data['contentPhoto'] = $contentPhoto;
			$this->data['content'] = $content;
		}
		
		$this->load->view("header",$this->data);
		if(file_exists(APPPATH."views/{$code}.php"))
		{
			$this->load->view($code,$this->data);
		}
		else
		{
			redirect($this->baseUrl.'/','301');
		}
		$this->load->view("footer",$this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
