<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/update
	 *	- or -  
	 * 		http://example.com/index.php/update/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/update/<method_name>
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
		$this->data['function'] = "index";
		$this->load->view("header",$this->data);
		$this->load->view('update',$this->data);
		$this->load->view("footer",$this->data);
	}
	
	public function save()
	{
		$config['upload_path'] = 'photos/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '500';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->upload->initialize($config);
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			echo '{"success": 0, "message":"'.$this->upload->display_errors().'"}';
			exit();
		}
		else
		{
			$data = $this->upload->data();
			if($data['file_type'] == "image/jpeg") $currentImage = imagecreatefromjpeg($data['full_path']);
			else if($data['file_type'] == "image/png") $currentImage = imagecreatefrompng($data['full_path']);
			else if($data['file_type'] == "image/gif") $currentImage = imagecreatefromgif($data['full_path']);
			list($width, $height) = getimagesize($data['full_path']);
			
			$offsetX = (980 - $width) / 2;
			$offsetY = 0; //Resimlerin hepsinin yüksekliği 450 olarak farzedildi
			
			$newImage = imagecreatetruecolor(980, 450);
			$bgcolor = imagecolorallocate($newImage, 255, 255, 255);    // Beyaz
			imagefill($newImage, 0, 0, $bgcolor); // Backgroundı beyazla doldur
			imagecopyresampled($newImage, $currentImage, $offsetX, $offsetY, 0, 0, $width, $height, $width, $height);

			$hsrc= "photos/w1000px/".$data['file_name'];   // Resmin saklanacağı dizin + dosya adı


			imagejpeg($newImage, $hsrc, 100);  // Resmin saklanacağı adres

			echo '{"success": 1, "filename":"'.$data['file_name'].'"}';
			exit();
		}
	}
	
	public function form()
	{
		$this->load->view('header_head',$this->data);
		$this->load->view('upload_image',$this->data);
		$this->load->view('footer_foot',$this->data);
	}
}

/* End of file update.php */
/* Location: ./application/controllers/update.php */