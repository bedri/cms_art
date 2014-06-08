<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MainModel extends CI_Model
{
	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	/**
	 * getAllImages()
	 * Gets all the Images from database
	 * @return boolean|array
	 */
	public function getAllImages()
	{
		$this->db->select('*')->from('images');
		$query = $this->db->get();
		return $query->result();
	}
	
	
	/**
	 * getImageLink()
	 * Gets link belongs to the imgId from database
	 * @param number $imgId
	 * @return boolean|string
	 */
	public function getImageLink($imgId)
	{
		$this->db->select('link')->from('images')->where("id",$imgId);
		$query = $this->db->get();
		$results = $query->result();
		$coverImage = $results[0]->link;
		return $coverImage;
	}

	public function getImageCategoryId($imgId)
	{
		$this->db->select('categoryId')->from('images')->where("id",$imgId);
		$query = $this->db->get();
		$results = $query->result();
		$categoryId = $results[0]->categoryId;
		return $categoryId;
	}

	public function addImage($categoryId, $link)
	{
		$data = array(
				'categoryId' => $categoryId,
				'link' => $link
		);
		
		return $this->db->insert('images', $data);
	}
	
	public function updateImage($id, $categoryId, $link)
	{
		$data = array(
				'categoryId' => $categoryId,
				'link' => $link
		);
		
		$this->db->where('id', $id);
		return $this->db->update('images', $data);
	}
	
	public function deleteImage($id)
	{
		return $this->db->delete('images', array('id' => $id));
		
	}

	/**
	 * getImagesByCategory()
	 * Gets all the images belongs to the categoryId from database
	 * @param number $categoryId
	 * @return boolean|array
	 */
	public function getImagesByCategory($categoryId)
	{
		$this->db->select('*')->from('images')->where("categoryId",$categoryId);
		$query = $this->db->get();
		return $query->result();
	}

	/**
	 * getImagesById()
	 * Gets all image by it's id from database
	 * @param number $id
	 * @return boolean|array
	 */
	public function getImage($id)
	{
		$this->db->select('*')->from('images')->where("id",$id);
		$query = $this->db->get();
		return $query->result();
	}

	/**
	 * getAllCategories()
	 * Gets all the Categories $username from database
	 * @return boolean|array
	 */
	public function getAllCategories()
	{
		$this->db->select('*')->from('categories')->order_by('rank','asc');
		$query = $this->db->get();
		return $query->result();
	}
	
	/**
	 * getCategoryName()
	 * Gets "Category Name" belongs to the categoryId from database
	 * @param number $categoryId
	 * @return boolean|string
	 */
	public function getCategoryName($categoryId)
	{
		$this->db->select('name')->from('categories')->where("id",$categoryId);
		$query = $this->db->get();
		$results = $query->result();
		$name = $results[0]->name;
		return $name;
	}

	/**
	 * getCategoryName()
	 * Gets "Category Name" belongs to the categoryId from database
	 * @param number $categoryId
	 * @return boolean|string
	 */
	public function getCategoryCoverImage($categoryId)
	{
		$this->db->select('coverImage')->from('categories')->where("id",$categoryId);
		$query = $this->db->get();
		$results = $query->result();
		$coverImage = $results[0]->coverImage;
		return $coverImage;
	}

	/**
	 * getCategoryDescription()
	 * Gets "Category Description" belongs to the categoryId from database
	 * @param number $categoryId
	 * @return boolean|string
	 */
	public function getCategoryDescription($categoryId)
	{
		$this->db->select('description')->from('categories')->where("id",$categoryId);
		$query = $this->db->get();
		$results = $query->result();
		$description = $results[0]->description;
		return $description;
	}
	
	/**
	 * setCategoryRank()
	 * Sets rank belongs to the categoryId from database
	 * @param number $id
	 * @param number $rank
	 * @return boolean|string
	 */
	public function setCategoryRank($id, $rank)
	{
		$data = array(
				'rank' => $rank
		);
		
		$this->db->where('id', $id);
		return $this->db->update('categories', $data);
	}
	
	public function addCategory($code, $name, $description, $coverImage)
	{
		$data = array(
				'code' => $code,
				'name' => $name,
				'description' => $description,
				'coverImage' => $coverImage
		);
		
		return $this->db->insert('categories', $data);
	}
	
	public function updateCategory($id, $code, $name, $description, $coverImage)
	{
		$data = array(
				'code' => $code,
				'name' => $name,
				'description' => $description,
				'coverImage' => $coverImage
		);
		
		$this->db->where('id', $id);
		return $this->db->update('categories', $data);
	}
	
	public function deleteCategory($id)
	{
		$images = $this->getImagesByCategory($id);
		foreach($images as $key=>$image)
		{
			unlink('photo/'.$image->link);
		}
		$this->db->delete('images',array('categoryId' => $id));
		return $this->db->delete('categories', array('id' => $id));
		
	}

	
	/**
	 * getAllAnnouncements()
	 * Gets all the Categories $username from database
	 * @return boolean|array
	 */
	public function getAllAnnouncements()
	{
		$this->db->select('*')->from('announcements')->order_by('time','desc');
		$query = $this->db->get();
		return $query->result();
	}
	
	/**
	 * getAnnouncementName()
	 * Gets "Announcement Name" belongs to the id from database
	 * @param number $id
	 * @return boolean|string
	 */
	public function getAnnouncementName($id)
	{
		$this->db->select('name')->from('announcements')->where("id",$id);
		$query = $this->db->get();
		$results = $query->result();
		$name = $results[0]->name;
		return $name;
	}

	/**
	 * getAnnouncementCoverImage()
	 * Gets "Announcement Image" belongs to the id from database
	 * @param number $id
	 * @return boolean|string
	 */
	public function getAnnouncementCoverImage($id)
	{
		$this->db->select('coverImage')->from('announcements')->where("id",$id);
		$query = $this->db->get();
		$results = $query->result();
		$coverImage = $results[0]->coverImage;
		return $coverImage;
	}

	/**
	 * getAnnouncementDescription()
	 * Gets "Announcement Description" belongs to the id from database
	 * @param number $id
	 * @return boolean|string
	 */
	public function getAnnouncementDescription($id)
	{
		$this->db->select('description')->from('announcements')->where("id",$id);
		$query = $this->db->get();
		$results = $query->result();
		$description = $results[0]->description;
		return $description;
	}
	
	public function addAnnouncement($code, $name, $description, $coverImage, $time)
	{
		$data = array(
				'code' => $code,
				'name' => $name,
				'description' => $description,
				'coverImage' => $coverImage,
				'time' => $time
		);
		
		return $this->db->insert('announcements', $data);
	}
	
	public function updateAnnouncement($id, $code, $name, $description, $coverImage, $time)
	{
		$data = array(
				'code' => $code,
				'name' => $name,
				'description' => $description,
				'coverImage' => $coverImage,
				'time' => $time
		);
		
		$this->db->where('id', $id);
		return $this->db->update('announcements', $data);
	}
	
	public function deleteAnnouncement($id)
	{
		return $this->db->delete('announcements', array('id' => $id));
		
	}
	
	
	/**
	 * getAllContents()
	 * Gets all the Categories $username from database
	 * @return boolean|array
	 */
	public function getAllContents()
	{
		$this->db->select('*')->from('contents')->order_by('time','desc');
		$query = $this->db->get();
		return $query->result();
	}
	
	/**
	 * getContentName()
	 * Gets "Announcement Name" belongs to the id from database
	 * @param number $id
	 * @return boolean|string
	 */
	public function getContentName($id)
	{
		$this->db->select('name')->from('contents')->where("id",$id);
		$query = $this->db->get();
		$results = $query->result();
		$name = $results[0]->name;
		return $name;
	}

	/**
	 * getContentCoverImage()
	 * Gets "Announcement Image" belongs to the id from database
	 * @param number $id
	 * @return boolean|string
	 */
	public function getContentCoverImage($id)
	{
		$this->db->select('coverImage')->from('contents')->where("id",$id);
		$query = $this->db->get();
		$results = $query->result();
		$coverImage = $results[0]->coverImage;
		return $coverImage;
	}

	/**
	 * getContentDescription()
	 * Gets "Announcement Description" belongs to the id from database
	 * @param number $id
	 * @return boolean|string
	 */
	public function getContentDescription($id)
	{
		$this->db->select('description')->from('contents')->where("id",$id);
		$query = $this->db->get();
		$results = $query->result();
		$description = $results[0]->description;
		return $description;
	}
	
	public function addContent($code, $name, $description, $coverImage, $time)
	{
		$data = array(
				'code' => $code,
				'name' => $name,
				'description' => $description,
				'coverImage' => $coverImage,
				'time' => $time
		);
		
		return $this->db->insert('contents', $data);
	}
	
	public function updateContent($id, $code, $name, $description, $coverImage, $time)
	{
		$data = array(
				'code' => $code,
				'name' => $name,
				'description' => $description,
				'coverImage' => $coverImage,
				'time' => $time
		);
		
		$this->db->where('id', $id);
		return $this->db->update('contents', $data);
	}
	
	public function deleteContent($id)
	{
		return $this->db->delete('contents', array('id' => $id));
		
	}
	
		/**
	 * getContentByCode()
	 * Gets the content with $code code
	 * @param number $code
	 * @return boolean|array
	 */
	public function getContentByCode($code)
	{
		$this->db->select('*')->from('contents')->where("code",$code);
		$query = $this->db->get();
		return $query->result();
	}



}
