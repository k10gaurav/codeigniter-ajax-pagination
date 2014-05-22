<?php
class Dropdown extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
    }

    function loadView($data='') {
        $this->load->view('test_view');
    }

    function validate_select() {

        // $this->form_validation->set_error_delimiters('<h2>', '</h2>');

        ////Validation rules
        // $rules['selCountry'] = "selected[selCountry]";
        // $this->form_validation->set_rules($rules);

        // $fields['selCountry'] = "Country";
       // $this->form_validation->set_fields($fields);
		// $this->form_validation->set_rules('selCountry', 'Country', 'selected[selCountry]');
        if ($this->form_validation->run('selectedValidation') == FALSE) {
            $this->load->view('test_view', $data='');
        } else {
          echo "success";
        }
    }

}
