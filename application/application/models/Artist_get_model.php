<?php 


class Artist_get_model extends CI_Model {
	function getData() {
		// $query = $this->db->get_where("artist_content", array(" " => $page));
		$query = $this->db->query("SELECT * from artist_content");
		return $query;
	}
// FIRST LAST NAME 
// MODEL CHANGES 
// SELECT * from artist_content" where lastname = 
	function modalData($lastname) {

		$query = $this->db->query("SELECT * FROM artist_content WHERE last_name = '$lastname'");
		return $query;
		// return $lastname;
	}
}
?>