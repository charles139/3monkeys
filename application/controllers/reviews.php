<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reviews extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Review');
	}

	public function index()
	{
		$response = file_get_contents("http://www.myapifilms.com/imdb/inTheaters?format=JSON&lang=en-us");
		$data = array( 
			'results' => json_decode($response, true)
		);
		$this->load->view('index', $data);
	}

	public function search() 
	{
		if ($this->input->post('sterm')) {
			$response = file_get_contents("http://www.myapifilms.com/imdb?title=" . $this->input->post('sterm') . "&limit=10&lang=en-us&format=JSON");
			$data = array(
				'results' => json_decode($response, true)
			);
			$this->load->view('search',$data);
		} else {
			redirect('/');
		}
	}

	public function register()
	{
		if ($this->input->post('email') && $this->input->post('pword') && $this->input->post('cpword')) {
			$data = array(
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password'))
			);
			$this->Review->add_user($data);
			$this->session->set_flashdata('success', 'You have successfully registered.');
		} else {
			$this->session->set_flashdata('error', 'Please enter valid data to register.');
		}
		redirect('/');
	}

	public function login() {
		if ($this->input->post('email') && $this->input->post('pword')) {
			$data = array(
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password'))
			);
			$user = $this->Review->get_user($data);
			if ($user) {
				$this->session->set_flashdata('success', 'You have successfully logged in.');
			} else {
				$this->session->set_flashdata('error', 'Login failed.');
			}
		} else {
			$this->session->set_flashdata('error', 'Please enter valid data for login.');
		}
		redirect('/');
	}
}

//end of main controller