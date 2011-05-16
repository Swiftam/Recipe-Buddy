<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller and administrative portion
	 * of site.
	 *
	 * Since this controller is set as the default controller in 
	 * config/routes.php
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('admin/index');
		$this->load->view('footer');
	}

	/**
	 * Display a list of recipies currently in the database
	 */
	public function recipes()
	{
		$this->load->model('Recipe');

		// Load up all recipies in system
		$data['recipes'] = $this->Recipe->all();

		$this->load->view('header');
		$this->load->view('admin/recipes', $data);
		$this->load->view('footer');
	}

	/**
	 * Insert or update a recipe
         */
	public function recipe($recipe_id=0)
	{
		$this->load->model('Recipe', $recipe);

		$form_data = array(
			'name' => '',
			'text' => ''
		);

		if ( $recipe_id > 0 ) {
			//array_merge
			$recipe = $this->Recipe->load( $recipe_id );
		}
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
