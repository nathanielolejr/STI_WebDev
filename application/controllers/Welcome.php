<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/title');
		$this->load->view('layout/navbar');
		$this->load->view('layout/home');
		$this->load->view('layout/footer');

	}
	public function menu()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/title');
		$this->load->view('layout/navbar');
		$this->load->view('layout/menu');
		$this->load->view('layout/footer');
	}
	public function about()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/title');
		$this->load->view('layout/navbar');
		$this->load->view('layout/about');
		$this->load->view('layout/footer');
	}
	public function contact ()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/title');
		$this->load->view('layout/navbar');
		$this->load->view('layout/contact');
		$this->load->view('layout/footer');
	}
	public function login()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/title');
		$this->load->view('layout/navbar');
		$this->load->view('layout/login');
		$this->load->view('layout/footer');
	}

	public function coffee()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/title');
		$this->load->view('layout/navbar');
		$this->load->view('layout/Coffee');
		$this->load->view('layout/footer');
	}

	public function desserts()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/title');
		$this->load->view('layout/navbar');
		$this->load->view('layout/Desserts');
		$this->load->view('layout/footer');
	}

	public function merch()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/title');
		$this->load->view('layout/navbar');
		$this->load->view('layout/merch');
		$this->load->view('layout/footer');
	}

	public function shakes()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/title');
		$this->load->view('layout/navbar');
		$this->load->view('layout/Shakes');
		$this->load->view('layout/footer');
	}
}
