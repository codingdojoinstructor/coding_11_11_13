<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Process extends CI_Controller {

	public function register()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('first_name', 'First Name','required');
		$this->form_validation->set_rules('last_name', 'Last Name','required');
		$this->form_validation->set_rules('email', 'Email','required');

		if($this->form_validation->run() == FALSE)
		{
			$viewdata['errors'] = validation_errors();
			
			$this->load->view('new_user', $viewdata);
		}
		else
		{	
			// echo $this->input->post('first_name');
			// echo $this->input->post('last_name');
			// echo $this->input->post('email');

			$this->session->set_userdata('logged_in', true);

			redirect('users/show/2');
		}
	}
}

?>