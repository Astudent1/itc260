<?php
//aplication/controllers/Pics.php
class Pics extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->config->set_item('banner', 'See Flickr Pics');
		$this->load->model('pics_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$this->config->set_item('title', 'See Flickr Pics');
		$data['title'] = 'See Flickr Pics';
		$data['default_tags'] = ['ocean', 'forest', 'field'];
		
		$this->load->view('templates/header', $data);
		$this->load->view('pics/index', $data);
		$this->load->view('templates/footer', $data);
	}

   public function view($tags = NULL)
   {

		if ($tags === NULL){
			$this->config->set_item('title', 'Oops!');
			$data['title'] = 'Oops. No tag entered.';		
		}else{
			$this->config->set_item('title', 'flickr - ' . $tags);
			$data['title'] = $tags;
			$data['pics'] = $this->pics_model->get_pics($tags);
		}

		$this->load->view('templates/header', $data);
		$this->load->view('pics/view', $data);
		$this->load->view('templates/footer', $data);
   }

	
		
}