<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artists extends CI_Controller {

	public function index () {

	}
public function modal () {

	$lastname = $_POST['lastname'];
	// $data['lastname'] = $_POST['LASTNAME'];

	$this->load->model("artist_get_model");
	$data['artist'] = $this->artist_get_model->modalData($lastname);
	// var_dump($data); die();
	$this->load->view("modal", $data);

}
	public function cervantez () {
		$this->load->view("artists_cervantez");
	}

	public function yecenia () {
		$this->load->view("artists_yecenia");
	}
	
	public function jones () {
		$this->load->model("artist_get_model");
		$data['query'] = $this->artist_get_model->getData();		
		$this->load->view("jones", $data);


	}
	
	public function martinez () {
		$this->load->view("artists_martinez");
	}
	
	public function sharp () {
		$this->load->view("artists_sharp");
	}

	public function cruz () {
		$this->load->view("artists_cruz");
	}
	
	public function menjivar () {
		$this->load->view("artists_menjivar");
	}

	public function arellanus () {
		$this->load->view("artists_arellanus");
	}

	public function jessica () {		


		$this->load->view("artists_jessica");
	}

	public function mario () {
		$this->load->view("artists_mario");
	}
	public function cucchiaro () {
		$this->load->view("artists_cucchiaro");
	}	
}