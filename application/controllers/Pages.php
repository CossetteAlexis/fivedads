<?php
// if (!defined('BASEPATH')) exit('No direct script access allowed');
class Pages extends CI_Controller
{
	public function view()
	{

		$page = 'new_shop';

		if (!file_exists(APPPATH . 'views/' . $page . '.php')) {
			show_404();
		} else {
			$this->load->view('new_header');
			$this->load->view($page);
			$this->load->view('new_footer');
		}
	}

	public function login()
	{
		echo 'login';
		// $this->form_validation->set_error_delimeters('<div class="alert alert-danger">', '</div>');

		// $user_id = $this->New_shop_model->login();

		// if ($user_id) {
		// 	$user_data = array(
		// 		'firstname' => $user_id['firstname'],
		// 		'lastname' => $user_id['lastname'],
		// 		'fullname' => $user_id['firstname'] . $user_id['lastname'],
		// 		'email' => $user_id['email'],
		// 		'logged_in' => true
		// 	);
		// 	$this->session->set_userdata($user_data);
		// 	$this->session->set_flashdata('user_loggedin', 'You are now logged in!' . $this->session->fullname);
		// 	redirect(base_url());
		// } else {
		// 	$this->session->set_flashdata('user_loggedfailed', 'Login Failed!');
		// 	redirect(base_url());
		// }
	}

	public function cart()
	{
		$page = 'new_cart';

		if (!file_exists(APPPATH . 'views/' . $page . '.php')) {
			show_404();
		} else {
			$this->load->view('new_header');
			$this->load->view($page);
			$this->load->view('new_footer');
		}
	}

	public function checkout()
	{
		$page = 'new_checkout';

		if (!file_exists(APPPATH . 'views/' . $page . '.php')) {
			show_404();
		} else {
			$data['countries'] = $this->New_shop_model->get_countries();
			$data['cities'] = $this->New_shop_model->get_cities();
			$this->load->view('new_header');
			$this->load->view($page, $data);
			$this->load->view('new_footer');
		}
	}
}
