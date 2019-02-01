<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laundry extends CI_Model {
	public function select_all() {
		$this->db->select('*');
		$this->db->from('laundry');

		$data = $this->db->get();

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM laundry WHERE id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

}