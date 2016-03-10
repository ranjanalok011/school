<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*  Author  : 	Alok Ranjan 
	e-Mail	:	ranjanalok011@gmail.com
*/

class MY_Controller extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->ci =& get_instance();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->ci->load->library('session');
	}
	
}
// END Controller class

/* End of file MY_Controller.php */
/* Location: ./system/core/MY_Controller.php */