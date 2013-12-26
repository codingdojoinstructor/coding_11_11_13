<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->load->model('Users_model');
		$viewdata['users'] = $this->Users_model->get_users();

		$this->load->view('users', $viewdata);
	}

	public function show($id)
	{
		$this->output->enable_profiler(TRUE);
		
		$viewdata['logged_in'] = $this->session->userdata('logged_in');
		$this->load->model('Users_model');
		$viewdata['user'] = $this->Users_model->get_user($id);

		$this->load->view('user', $viewdata);
	}

	public function new_user()
	{
		$this->load->view('new_user');
	}
}

?>