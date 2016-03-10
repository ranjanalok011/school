<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends App_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->view('index');
	}
	public function add()
	{
	/*echo '<pre>';
	print_r($this->input->post());
	echo '</pre>';*/
	$this->form_validation->set_rules('session', 'Session', 'xss_clean|trim|required');
	$this->form_validation->set_rules('reg_no', 'Registration No.', 'xss_clean|trim|required');
	$this->form_validation->set_rules('class', 'Class', 'xss_clean|trim|required');
	$this->form_validation->set_rules('reg_date', 'Date of Registration', 'xss_clean|trim|required');
	$this->form_validation->set_rules('photo', 'Photo', 'xss_clean|trim|required');
	$this->form_validation->set_rules('name', 'Name', 'xss_clean|trim|required');
	$this->form_validation->set_rules('gender', 'Gender', 'xss_clean|trim|required');
	$this->form_validation->set_rules('dob', 'Date of Birth', 'xss_clean|trim|required');
	$this->form_validation->set_rules('place_of_bitrh', 'Place of Birth', 'xss_clean|trim|required');
	$this->form_validation->set_rules('nation', 'Nationality', 'xss_clean|trim|required');
	$this->form_validation->set_rules('religion', 'Religion', 'xss_clean|trim|required');
	$this->form_validation->set_rules('cat', 'Category', 'xss_clean|trim|required');
	$this->form_validation->set_rules('uid', 'Unique ID No', 'xss_clean|trim|required');
	$this->form_validation->set_rules('bpl', 'BPL Number', 'xss_clean|trim|required');
	$this->form_validation->set_rules('f_name', 'Father\'s Name', 'xss_clean|trim|required');
	$this->form_validation->set_rules('f_occupation', 'Father\'s Occupation', 'xss_clean|trim|required');
	$this->form_validation->set_rules('f_qualification', 'Father\'s Qualification', 'xss_clean|trim|required');
	$this->form_validation->set_rules('f_email', 'Father\'s E-mail ID', 'xss_clean|trim|valid_email|required');
	$this->form_validation->set_rules('m_name', 'Mother\'s Name', 'xss_clean|trim|required');
	$this->form_validation->set_rules('m_occupation', 'Mother\'s Occupation', 'xss_clean|trim|required');
	$this->form_validation->set_rules('m_qualification', 'Mother\'s Qualification', 'xss_clean|trim|required');
	$this->form_validation->set_rules('m_email', 'Mother\'s E-mail ID', 'xss_clean|trim|valid_email');
	$this->form_validation->set_rules('village', 'Village', 'xss_clean|trim|required');
	$this->form_validation->set_rules('post', 'Post', 'xss_clean|trim|required');
	$this->form_validation->set_rules('via', 'Via', 'xss_clean|trim|required');
	$this->form_validation->set_rules('police_station', 'Police Station ', 'xss_clean|trim|required');
	$this->form_validation->set_rules('district', 'District', 'xss_clean|trim|required');
	$this->form_validation->set_rules('state', 'State', 'xss_clean|trim|required');
	$this->form_validation->set_rules('country', 'Country', 'xss_clean|trim|required');
	$this->form_validation->set_rules('pin', 'PIN', 'xss_clean|trim|required');
	
	$this->form_validation->set_error_delimiters('<span style="color:#FF0000;">', '</span><br>');
	if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('add');
		}
		else
		{
			$this->load->view('success');
		}
	}
}
