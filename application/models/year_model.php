
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Year_model extends CI_Model {
public function __construct()
{
	parent::__construct();
	//Do your magic here
}
	
	public function theyear($kit){


		$result=543+$kit;
		return $result;
	}
}

/* End of file year_model.php */
/* Location: ./application/models/year_model.php */
?>