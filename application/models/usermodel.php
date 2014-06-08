<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model
{
	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	/**
	 * getAllUsers()
	 * Gets all the users from database
	 * @return boolean|array
	 */
	public function getAllUsers()
	{
		$this->db->select('*')->from('users')->order_by('userName','asc');
		$query = $this->db->get();
		return $query->result();
	}
	
	/**
	 * getImagesByCategory()
	 * Gets all the images belongs to the categoryId from database
	 * @param number $categoryId
	 * @return boolean|array
	 */
	public function getUserByUsername($username)
	{
		$this->db->select('*')->from('users')->where('username',$username);
		$query = $this->db->get();
		return $query->result();
	}

}
