<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Uploadify extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('files_model');
   }
   public function index()
   {
      $this->load->view('uploadifyView');
   }
  
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */