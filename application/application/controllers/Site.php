	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	public function index () {
		$this->home();	
	}

	public function home () {
		$data['content_path'] = "content_home";
		$this->load->view("main_template", $data);
		$this->load->view("nav_hide_home");	
	}

	// public function artist () {
	// 	$data['content_path'] = "site_artist_content";
	// 	$this->load->view("main_template", $data);
	// }

	public function process () {
		$data['content_path'] = "site_meaning_content";
		$this->load->view("main_template", $data);
	}

	public function video () {
		$data['content_path'] = "site_video_content";
		$this->load->view("main_template", $data);
	}

	public function photo () {
		$data['content_path'] = "site_pic_content";
		$this->load->view("main_template", $data);
	}
	public function artist () {
		$this->load->model("artist_get_model");
		$data['query'] = $this->artist_get_model->getData();
		
		$this->load->view("site_head");

		$this->load->view("site_nav");	
		$this->load->view("view_img", $data);
		// $this->load->view("site_footer");	
		// $data['content_path'] = "view_img";
		// $this->load->view("main_template",  $query);
	}
}