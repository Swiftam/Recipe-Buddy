<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recipe extends CI_Model
{
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	function all()
	{
		$query = $this->db->get('recipes');
		return $query->result();
	}
}

/* End of file recipe.php */
/* Location: ./application/models/recipe.php */
