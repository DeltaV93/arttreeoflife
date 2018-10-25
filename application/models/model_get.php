<?php 


class Model_get extends CI_Model {
	function getData($page) {
		$query = $this->db->get_where("pagess_2", array("page" => $page));
		return $query->result();
	}

}