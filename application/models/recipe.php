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

	function insert_recipe($name, $description)
	{
		$vals = array(
			'name' => $name,
			'description' => $description
		);
		$this->db->insert('recipes', $vals);
	}

	function update_recipe($id, $name, $description)
	{
		$vals = array(
			'name' => $name,
			'description' => $description
		);
		$this->db->update('recipes', $vals, array('id' => $id));
	}
}

/* End of file recipe.php */
/* Location: ./application/models/recipe.php */
