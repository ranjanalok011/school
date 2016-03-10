<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*  Author  : 	Alok Ranjan 
	e-Mail	:	ranjanalok011@gmail.com
*/

class App_Controller extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		}
		
	}
}
// END Controller class

/* End of file Controller.php */
/* Location: ./system/core/App_Controller.php */