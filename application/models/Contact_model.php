<?php
/**
 * 
 */
class Contact_model extends CI_Model
{
	//Contact
	function savedata($data){
		return $this->db->insert('tgr_contacts', $data);
	}

	//Inscriptions
	function savedatainscription($data){
		return $this->db->insert('tgr_inscriptions', $data);
	}
}