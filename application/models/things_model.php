<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Ajax Pagination by Kumar Gaurav*/
class Things_model extends CI_Model {
   function get_things()
   {
		$query=$this->db->get('paging');
		return $query->result();
   }
   function get_things_limited($limit,$offset)
   {
	$this->db->limit($offset,$limit);
	$query=$this->db->get('paging');
	return $query->result();
   }
   function total_rows()
   {
		$query=$this->db->get('paging');
		return $query->num_rows();
   }
}
/* Ajax Pagination by Kumar Gaurav*/
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */