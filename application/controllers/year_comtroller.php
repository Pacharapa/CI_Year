
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Year_comtroller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->view('inputview');
		$this->load->model('year_model');
	}

	public function index()
	{
		
	}

	public function get_theyear(){

		$kit=$this->input->post('kit');
		$data['ans']=$this->year_model->theyear($kit);
		$this->load->view('output_view', $data, FALSE);
	}
}

/* End of file year_comtroller.php */
/* Location: ./application/controllers/year_comtroller.php */