<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ajax extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      //$this->load->model('files_model');
   }
   public function index()
   {
      $this->load->view('ajax_view');
   }
  public function upload()
    {
        if (isset($_FILES['upload']['name'])) {
            // total files //
            $count = count($_FILES['upload']['name']);
            // all uploads //
            $uploads = $_FILES['upload'];

            for ($i = 0; $i < $count; $i++) {
                if ($uploads['error'][$i] == 0) {
                    move_uploaded_file($uploads['tmp_name'][$i], 'files/' . $uploads['name'][$i]);
                    echo $uploads['name'][$i] . "\n";
                }
            }
        }
    }
	public function do_test()
	{
	$config['upload_path'] = './files';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['max_size'] = '10000';
    $config['max_width']  = '1024';
    $config['max_height']  = '768';
    $config['overwrite'] = TRUE;
    $confit['remove_spaces'] = TRUE;

    $this->load->library('upload', $config);
    $this->load->library('form_validation');

    $this->form_validation->set_rules('file', 'trim|required|xss_clean');
    $test = $this->input->post('file');

    var_dump($test); //var dump return : string(21) "C:\fakepath\truth.jpg"

    if ( ! $this->upload->do_upload($test))
    {
        echo "no";
    }
    else
    {
        $data = array('upload_data' => $this->upload->data());

        echo "yes";
    }
	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */