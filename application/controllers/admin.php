<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller and entire site.
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
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
