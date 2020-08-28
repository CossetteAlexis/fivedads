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
