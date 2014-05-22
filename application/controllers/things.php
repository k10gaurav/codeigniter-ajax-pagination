<?php
class Things extends CI_Controller {
/*Ajax Pagination by Kumar Gaurav*/
    function __construct() {
        parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('things_model');
    }

    function show()
	{
		$start_row=$this->uri->segment(3);
		$per_page=3;
		
		if(trim($start_row)=='')
			{
				$start_row=0;
			}
		
		$things=$this->things_model->get_things();
		$total_rows=count($things);
		$this->load->library('pagination');
		
		$config['full_tag_open']='<p class="things_pagination">';
		$config['full_tag_close']='</p>';
		$config['base_url']=base_url().'index.php/things/show';
		$config['total_rows']=$total_rows;
		$config['per_page']=$per_page;
		$this->pagination->initialize($config);
		$view_data['pagination ']=$this->pagination->create_links();
		$view_data['things']=$this->things_model->get_things_limited($limit=$start_row,$offset=$per_page);
		$this->load->view('view_things',$view_data); //Sample landing page
	}
	

}
