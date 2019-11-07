<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('BlogsModel');
	}

	public function index(){
		$blogs = new BlogsModel;
		$data = $blogs->get_blogs();
		print_r($data);
		$this->load->view('welcome_message');
	}

	public function store(){

	}
}
