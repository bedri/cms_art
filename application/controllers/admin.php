<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/admin
	 *	- or -  
	 * 		http://example.com/index.php/admin/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/admin/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	var $baseUrl;
	var $data;
	
	public function __construct()
	{
		// Call the CI_Controller constructor
		parent::__construct();
		$sessionData = $this->session->all_userdata();
		$this->data['sessionData'] = $sessionData;
		$loggedin = $sessionData['loggedin'];
		if (!$loggedin)
		{
			// with 301 redirect
			redirect($this->baseUrl.'user/login', 'location', 301);
			//redirect($this->baseUrl, 'refresh');
		}
		else
		{
			$this->data['loggedin'] = 1;
		}
	}
	
	public function index()
	{
		$this->data['function'] = "index";
	}
	
	public function catList()
	{
		if($catOrder = $this->input->post('catOrder'))
		{
			$jsonArray = array("success"=>0, "data"=>array(), "message"=>"");
			$catOrder = $this->input->post('catOrder');
			$catOrder = str_replace("sortable,","",$catOrder);
			$catOrder = str_replace("category","",$catOrder);
			$catOrderArray = explode(",",$catOrder);
			foreach($catOrderArray as $rank=>$id)
			{
				$realRank = $rank + 1;
				if($result = $this->MainModel->setCategoryRank($id, $realRank))
				{
					$jsonArray['success'] = 1;
					$jsonArray['data']['queryResult'] = $result;
				}
			}
			
			echo json_encode($jsonArray);
			exit();
		}
		else
		{
			$categories = $this->MainModel->getAllCategories();
			$this->data['categories'] = $categories;
			$this->data['function'] = "catList";
			$this->load->view("header", $this->data);
			$this->load->view('admin',$this->data);
			$this->load->view("footer",$this->data);
		}
	}
	
	public function catAdd()
	{
		$action = $this->input->post('action');
		if($action == "save")
		{
			$name = $this->input->post('name');
			$description = $this->input->post('description');
			$coverImage = $this->input->post('coverImage');
			
			$jsonArray = array("success"=>0, "data"=>array(), "message"=>"");
			$code = url_title($name);
			
			if($add = $this->MainModel->addCategory($code, $name, $description, $coverImage))
			{
				$jsonArray['success'] = 1;
				$jsonArray['data']['queryResult'] = $add;
			}
			else
			{
				$jsonArray['success'] = 0;
				$jsonArray['data']['queryResult'] = $add;
				$jsonArray['message'] = 'Error in database connection';
			}
			echo json_encode($jsonArray);
			exit();
		}
		else if($action == "cancel")
		{
			$coverImage = $this->input->post('coverImage');
			$coverImageOrig = $this->input->post('coverImageOrig');
			
			$jsonArray = array("success"=>0, "data"=>array(), "message"=>"");
			
			$jsonArray['success'] = 1;
			if($coverImage != $coverImageOrig)
			{
				$result = unlink('photos/'.$coverImage);
				$jsonArray['data']['result'] = $result;
			}
			echo json_encode($jsonArray);
			exit();
		}
		else
		{
			$this->data['function'] = "catAdd";
			$this->load->view("header", $this->data);
			$this->load->view('admin',$this->data);
			$this->load->view("footer",$this->data);
		}
	}
	
	public function catUp($catId=0)
	{
		$action = $this->input->post('action');
		if($action == "update")
		{
			$id = $this->input->post('id');
			$name = $this->input->post('name');
			$description = $this->input->post('description');
			$coverImage = $this->input->post('coverImage');
			
			$jsonArray = array("success"=>0, "data"=>array(), "message"=>"");
			$code = url_title($name);
			
			if($update = $this->MainModel->updateCategory($id, $code, $name, $description, $coverImage))
			{
				$jsonArray['success'] = 1;
				$jsonArray['data']['queryResult'] = $update;
			}
			else
			{
				$jsonArray['success'] = 0;
				$jsonArray['data']['queryResult'] = $update;
				$jsonArray['message'] = 'Error in database connection';
			}
			echo json_encode($jsonArray);
			exit();
		}
		else if($action == "cancel")
		{
			$coverImage = $this->input->post('coverImage');
			$coverImageOrig = $this->input->post('coverImageOrig');
			
			$jsonArray = array("success"=>0, "data"=>array(), "message"=>"");
			
			$jsonArray['success'] = 1;
			if($coverImage != $coverImageOrig)
			{
				$result = unlink('photos/'.$coverImage);
				$jsonArray['data']['result'] = $result;
			}
			echo json_encode($jsonArray);
			exit();
		}
		else
		{
			$categoryName = $this->MainModel->getCategoryName($catId);
			$categoryDescription = $this->MainModel->getCategoryDescription($catId);
			$coverImage = $this->MainModel->getCategoryCoverImage($catId);
			$this->data['function'] = "catUp";
			$this->data['categoryName'] = $categoryName;
			$this->data['categoryDescription'] = $categoryDescription;
			$this->data['coverImage'] = $coverImage;
			$this->data['catId'] = $catId;
			$this->load->view("header", $this->data);
			$this->load->view('admin',$this->data);
			$this->load->view("footer",$this->data);
		}
	}
	
	public function catDel()
	{
		$jsonArray = array("success"=>0, "data"=>array(), "message"=>"");
		$id = $this->input->post('id');
		
		if($delete = $this->MainModel->deleteCategory($id))
		{
			$jsonArray['success'] = 1;
			$jsonArray['data']['queryResult'] = $delete;
		}
		else
		{
			$jsonArray['success'] = 0;
			$jsonArray['data']['queryResult'] = $delete;
			$jsonArray['message'] = 'Error in database connection';
		}
		echo json_encode($jsonArray);
		exit();
	}
	
	public function imgList()
	{
		$images = $this->MainModel->getAllImages();
		$this->data['images'] = $images;
		$this->data['function'] = "imgList";
		$this->load->view("header", $this->data);
		$this->load->view('admin',$this->data);
		$this->load->view("footer",$this->data);
	}
	
	public function imgAdd()
	{
		$action = $this->input->post('action');
		if($action == "save")
		{
			$categoryId = $this->input->post('categoryId');
			$coverImage = $this->input->post('coverImage');
			
			$jsonArray = array("success"=>0, "data"=>array(), "message"=>"");
			
			if($add = $this->MainModel->addImage($categoryId, $coverImage))
			{
				$jsonArray['success'] = 1;
				$jsonArray['data']['queryResult'] = $add;
			}
			else
			{
				$jsonArray['success'] = 0;
				$jsonArray['data']['queryResult'] = $add;
				$jsonArray['message'] = 'Error in database connection';
			}
			echo json_encode($jsonArray);
			exit();
		}
		else if($action == "cancel")
		{
			$coverImage = $this->input->post('coverImage');
			$coverImageOrig = $this->input->post('coverImageOrig');
			
			$jsonArray = array("success"=>0, "data"=>array(), "message"=>"");
			
			$jsonArray['success'] = 1;
			if($coverImage != $coverImageOrig)
			{
				$result = unlink('photos/'.$coverImage);
				$jsonArray['data']['result'] = $result;
			}
			echo json_encode($jsonArray);
			exit();
		}
		else
		{
			$categories = array();
			$categoriesData = $this->MainModel->getAllCategories();
			foreach($categoriesData as $key=>$category)
			{
				$categories[$category->id] = $category->name;
			}
			$this->data['categories'] = $categories;
			$this->data['function'] = "imgAdd";
			$this->load->view("header", $this->data);
			$this->load->view('admin',$this->data);
			$this->load->view("footer",$this->data);
		}
	}
	
	public function imgUp($imgId=0)
	{
		$action = $this->input->post('action');
		if($action == "update")
		{
			$id = $this->input->post('id');
			$categoryId = $this->input->post('categoryId');
			$coverImage = $this->input->post('coverImage');
			
			$jsonArray = array("success"=>0, "data"=>array(), "message"=>"");
			if($update = $this->MainModel->updateImage($id, $categoryId, $coverImage))
			{
				$jsonArray['success'] = 1;
				$jsonArray['data']['queryResult'] = $update;
			}
			else
			{
				$jsonArray['success'] = 0;
				$jsonArray['data']['queryResult'] = $update;
				$jsonArray['message'] = 'Error in database connection';
			}
			echo json_encode($jsonArray);
			exit();
		}
		else if($action == "cancel")
		{
			$coverImage = $this->input->post('coverImage');
			$coverImageOrig = $this->input->post('coverImageOrig');
			
			$jsonArray = array("success"=>0, "data"=>array(), "message"=>"");
			
			$jsonArray['success'] = 1;
			if($coverImage != $coverImageOrig)
			{
				$result = unlink('photos/'.$coverImage);
				$jsonArray['data']['result'] = $result;
			}
			echo json_encode($jsonArray);
			exit();
		}
		else
		{
			$categories = array();
			$categoriesData = $this->MainModel->getAllCategories();
			foreach($categoriesData as $key=>$category)
			{
				$categories[$category->id] = $category->name;
			}
			$this->data['categories'] = $categories;
			$this->data['function'] = "imgUp";
			$this->data['imgId'] = $imgId;
			$this->data['categoryId'] = $this->MainModel->getImageCategoryId($imgId);
			$this->data['coverImage'] = $this->MainModel->getImageLink($imgId);
			$this->load->view("header", $this->data);
			$this->load->view('admin',$this->data);
			$this->load->view("footer",$this->data);
		}
	}
	
	public function imgDel()
	{
		$jsonArray = array("success"=>0, "data"=>array(), "message"=>"");
		$id = $this->input->post('id');
		$image = $this->MainModel->getImage($id);

		if($delete = $this->MainModel->deleteImage($id))
		{
			unlink('photos/'.$image[0]->link);
			$jsonArray['success'] = 1;
			$jsonArray['data']['queryResult'] = $delete;
		}
		else
		{
			$jsonArray['success'] = 0;
			$jsonArray['data']['queryResult'] = $delete;
			$jsonArray['message'] = 'Error in database connection';
		}
		echo json_encode($jsonArray);
		exit();
	}
	
	public function fileUpload()
	{
		$this->load->view('admin',$this->data);
	}
	
	public function annList()
	{
		$announcements = $this->MainModel->getAllAnnouncements();
		$this->data['announcements'] = $announcements;
		$this->data['function'] = "annList";
		$this->load->view("header", $this->data);
		$this->load->view('admin',$this->data);
		$this->load->view("footer",$this->data);
	}
	
	public function annAdd()
	{
		$action = $this->input->post('action');
		if($action == "save")
		{
			$name = $this->input->post('name');
			$description = $this->input->post('description');
			$coverImage = $this->input->post('coverImage');
			$time = time();
			
			$jsonArray = array("success"=>0, "data"=>array(), "message"=>"");
			$code = url_title($name);
			
			if($add = $this->MainModel->addAnnouncement($code, $name, $description, $coverImage, $time))
			{
				$jsonArray['success'] = 1;
				$jsonArray['data']['queryResult'] = $add;
			}
			else
			{
				$jsonArray['success'] = 0;
				$jsonArray['data']['queryResult'] = $add;
				$jsonArray['message'] = 'Error in database connection';
			}
			echo json_encode($jsonArray);
			exit();
		}
		else if($action == "cancel")
		{
			$coverImage = $this->input->post('coverImage');
			$coverImageOrig = $this->input->post('coverImageOrig');
			
			$jsonArray = array("success"=>0, "data"=>array(), "message"=>"");
			
			$jsonArray['success'] = 1;
			if($coverImage != $coverImageOrig)
			{
				$result = unlink('photos/'.$coverImage);
				$jsonArray['data']['result'] = $result;
			}
			echo json_encode($jsonArray);
			exit();
		}
		else
		{
			$this->data['function'] = "annAdd";
			$this->load->view("header", $this->data);
			$this->load->view('admin',$this->data);
			$this->load->view("footer",$this->data);
		}
	}
	
	public function annUp($annId=0)
	{
		$action = $this->input->post('action');
		if($action == "update")
		{
			$id = $this->input->post('id');
			$name = $this->input->post('name');
			$description = $this->input->post('description');
			$coverImage = $this->input->post('coverImage');
			$time = time();
			
			$jsonArray = array("success"=>0, "data"=>array(), "message"=>"");
			$code = url_title($name);
			
			if($update = $this->MainModel->updateAnnouncement($id, $code, $name, $description, $coverImage, $time))
			{
				$jsonArray['success'] = 1;
				$jsonArray['data']['queryResult'] = $update;
			}
			else
			{
				$jsonArray['success'] = 0;
				$jsonArray['data']['queryResult'] = $update;
				$jsonArray['message'] = 'Error in database connection';
			}
			echo json_encode($jsonArray);
			exit();
		}
		else if($action == "cancel")
		{
			$coverImage = $this->input->post('coverImage');
			$coverImageOrig = $this->input->post('coverImageOrig');
			
			$jsonArray = array("success"=>0, "data"=>array(), "message"=>"");
			
			$jsonArray['success'] = 1;
			if($coverImage != $coverImageOrig)
			{
				$result = unlink('photos/'.$coverImage);
				$jsonArray['data']['result'] = $result;
			}
			echo json_encode($jsonArray);
			exit();
		}
		else
		{
			$announcementName = $this->MainModel->getAnnouncementName($annId);
			$announcementDescription = $this->MainModel->getAnnouncementDescription($annId);
			$coverImage = $this->MainModel->getAnnouncementCoverImage($annId);
			$this->data['function'] = "annUp";
			$this->data['announcementName'] = $announcementName;
			$this->data['announcementDescription'] = $announcementDescription;
			$this->data['coverImage'] = $coverImage;
			$this->data['annId'] = $annId;
			$this->load->view("header", $this->data);
			$this->load->view('admin',$this->data);
			$this->load->view("footer",$this->data);
		}
	}
	
	public function annDel()
	{
		$jsonArray = array("success"=>0, "data"=>array(), "message"=>"");
		$id = $this->input->post('id');
		
		if($delete = $this->MainModel->deleteAnnouncement($id))
		{
			$jsonArray['success'] = 1;
			$jsonArray['data']['queryResult'] = $delete;
		}
		else
		{
			$jsonArray['success'] = 0;
			$jsonArray['data']['queryResult'] = $delete;
			$jsonArray['message'] = 'Error in database connection';
		}
		echo json_encode($jsonArray);
		exit();
	}
	
	
	
	public function conList()
	{
		$contents = $this->MainModel->getAllContents();
		$this->data['contents'] = $contents;
		$this->data['function'] = "conList";
		$this->load->view("header", $this->data);
		$this->load->view('admin',$this->data);
		$this->load->view("footer",$this->data);
	}
	
	public function conAdd()
	{
		$action = $this->input->post('action');
		if($action == "save")
		{
			$name = $this->input->post('name');
			$description = $this->input->post('description');
			$coverImage = $this->input->post('coverImage');
			$time = time();
			
			$jsonArray = array("success"=>0, "data"=>array(), "message"=>"");
			$code = url_title($name);
			
			if($add = $this->MainModel->addContent($code, $name, $description, $coverImage, $time))
			{
				$jsonArray['success'] = 1;
				$jsonArray['data']['queryResult'] = $add;
			}
			else
			{
				$jsonArray['success'] = 0;
				$jsonArray['data']['queryResult'] = $add;
				$jsonArray['message'] = 'Error in database connection';
			}
			echo json_encode($jsonArray);
			exit();
		}
		else if($action == "cancel")
		{
			$coverImage = $this->input->post('coverImage');
			$coverImageOrig = $this->input->post('coverImageOrig');
			
			$jsonArray = array("success"=>0, "data"=>array(), "message"=>"");
			
			$jsonArray['success'] = 1;
			if($coverImage != $coverImageOrig)
			{
				$result = unlink('photos/'.$coverImage);
				$jsonArray['data']['result'] = $result;
			}
			echo json_encode($jsonArray);
			exit();
		}
		else
		{
			$this->data['function'] = "conAdd";
			$this->load->view("header", $this->data);
			$this->load->view('admin',$this->data);
			$this->load->view("footer",$this->data);
		}
	}
	
	public function conUp($conId=0)
	{
		$action = $this->input->post('action');
		if($action == "update")
		{
			$id = $this->input->post('id');
			$name = $this->input->post('name');
			$description = $this->input->post('description');
			$coverImage = $this->input->post('coverImage');
			$time = time();
			
			$jsonArray = array("success"=>0, "data"=>array(), "message"=>"");
			$code = url_title($name);
			
			if($update = $this->MainModel->updateContent($id, $code, $name, $description, $coverImage, $time))
			{
				$jsonArray['success'] = 1;
				$jsonArray['data']['queryResult'] = $update;
			}
			else
			{
				$jsonArray['success'] = 0;
				$jsonArray['data']['queryResult'] = $update;
				$jsonArray['message'] = 'Error in database connection';
			}
			echo json_encode($jsonArray);
			exit();
		}
		else if($action == "cancel")
		{
			$coverImage = $this->input->post('coverImage');
			$coverImageOrig = $this->input->post('coverImageOrig');
			
			$jsonArray = array("success"=>0, "data"=>array(), "message"=>"");
			
			$jsonArray['success'] = 1;
			if($coverImage != $coverImageOrig)
			{
				$result = unlink('photos/'.$coverImage);
				$jsonArray['data']['result'] = $result;
			}
			echo json_encode($jsonArray);
			exit();
		}
		else
		{
			$contentName = $this->MainModel->getContentName($conId);
			$contentDescription = $this->MainModel->getContentDescription($conId);
			$coverImage = $this->MainModel->getContentCoverImage($conId);
			$this->data['function'] = "conUp";
			$this->data['contentName'] = $contentName;
			$this->data['contentDescription'] = $contentDescription;
			$this->data['coverImage'] = $coverImage;
			$this->data['conId'] = $conId;
			$this->load->view("header", $this->data);
			$this->load->view('admin',$this->data);
			$this->load->view("footer",$this->data);
		}
	}
	
	public function conDel()
	{
		$jsonArray = array("success"=>0, "data"=>array(), "message"=>"");
		$id = $this->input->post('id');
		
		if($delete = $this->MainModel->deleteContent($id))
		{
			$jsonArray['success'] = 1;
			$jsonArray['data']['queryResult'] = $delete;
		}
		else
		{
			$jsonArray['success'] = 0;
			$jsonArray['data']['queryResult'] = $delete;
			$jsonArray['message'] = 'Error in database connection';
		}
		echo json_encode($jsonArray);
		exit();
	}
	
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */