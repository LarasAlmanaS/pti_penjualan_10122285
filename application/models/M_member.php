<?php if ( ! defined('BASEPATH')) exit('No direct script access
	allowed');
class m_member extends CI_Model{
	function getMember(){
		$this->db->select('*');
		$this->db->from('member');
		$query = $this->db->get();
		return $query;
	}