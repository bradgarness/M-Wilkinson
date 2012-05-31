<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index() {
		/* Load the Google Maps BIO Library 		*/				$this->load->library('googlemaps');
		/* Center This Thing 						*/								//$config['center'] = '37.4419, -122.1419';
		/* Center This Thing On Willow Alaska 		*/								$config['center'] = '61.7298, -150.0661';
$config['zoom'] = 'auto';
$this->googlemaps->initialize($config);

		// Initialize our map. Here you can also pass in additional parameters for customising the map (see below)
		 //$this->googlemaps->initialize();		// DISPLAY THE MAP BASIC

		// Create the map. This will return the Javascript to be included in our pages <head></head> section and the HTML code to be
		// placed where we want the map to appear.
		$data['map'] = $this->googlemaps->create_map();


		// Load our view, passing the map data that has just been created
		$this->load->view('welcome_message', $data);

		//$this->load->view('welcome_message'); DEFAULT LOAD FROM INSTALL
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */