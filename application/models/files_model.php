<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Files_Model extends CI_Model {
   public function insert_file($filename, $title)
   {
      $data = array(
         'filename'     => $filename,
         'title'        => $title
      );
      $this->db->insert('files', $data);
      return $this->db->insert_id();
   }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */