<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function home()
	{
		$this->load->view('admin/_partials/head');
		$this->load->view('admin/_partials/navbar');
        $this->load->view('admin/_partials/sidebar');
		$this->load->view('admin/dashboard');
        $this->load->view('admin/_partials/footer');
	}

	public function home_guru()
	{
		$this->load->view('admin/_partials/head');
		$this->load->view('admin/_partials/navbar');
        $this->load->view('admin/_partials/sidebar_guru');
		$this->load->view('admin/dashboard');
        $this->load->view('admin/_partials/footer');

	}
}
