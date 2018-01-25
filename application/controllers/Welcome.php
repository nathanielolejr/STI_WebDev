<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/title');
		$this->load->view('layout/navbar');
		$this->home();
		$this->load->view('layout/footer');
	}
	
	public function home()
	{
		$this->load->view('layout/home');
	}

	public function menu()
	{
		$this->load->view('layout/menu');
	}

	public function about()
	{
		$this->load->view('layout/about');
	}

	public function contact ()
	{
		$this->load->view('layout/contact');
	}

	public function login()
	{
		$this->load->view('layout/login');
	}

	public function coffee()
	{
		$this->load->view('layout/Coffee');
	}

	public function desserts()
	{
		$this->load->view('layout/Desserts');
	}

	public function merch()
	{
		$this->load->view('layout/merch');
	}

	public function shakes()
	{
		$this->load->view('layout/Shakes');
	}
}
