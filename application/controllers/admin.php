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
		// LOAD MODELS
		$this->load->model('Recipe');

		// LOAD LIBRARIES
		$this->load->library(array('form_validation'));

		// PREP FORM DATA
		$form_data = array('name'=>'', 'description' => '');

		// PARSE EXISTING RECIPE IF APPLICABLE
		if ( $recipe_id > 0 ) {
			//array_merge
			$recipe = $this->Recipe->load( $recipe_id );
		}

		// SETUP FORM VALIDATION
		$this->form_validation->set_rules('name', 'Recipe name', 'trim|required');
		$this->form_validation->set_rules('description', 'Recipe text', 'trim|required');
		if ( $this->input->post('dorecipe') ) {
			$form_data['name'] = set_value('name');
			$form_data['description'] = set_value('description');
			if ( $this->form_validation->run() ) {
				$name = $this->input->post('name');
				$description = $this->input->post('description');
				$this->Recipe->insert_recipe($name,$description);
				redirect('admin/recipes');
			}
		}

		// DISPLAY FORM
		$this->load->view('header');
		$this->load->view('admin/recipe', $form_data);
		$this->load->view('footer');
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
