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
	public function Menu()
	{
		$this->load->view('layout/headerMenu');
		$this->load->view('layout/title');
		$this->load->view('layout/navbar');
		$this->load->view('layout/menu');
		$this->load->view('layout/footer');
	}
	public function about()
	{
		$this->load->view('layout/headerAbout');
		$this->load->view('layout/title');
		$this->load->view('layout/navbar');
		$this->load->view('layout/about');
		$this->load->view('layout/footer');
	}
	public function contact()
	{
		$this->load->view('layout/headerContact');
		$this->load->view('layout/title');
		$this->load->view('layout/navbar');
		$this->load->view('layout/contact');
		$this->load->view('layout/footer');
	}
	public function login()
	{
		$this->load->view('layout/headerLogin');
		$this->load->view('layout/title');
		$this->load->view('layout/login');
		$this->load->view('layout/footer');
	}

	public function Coffee()
	{
		$this->load->view('layout/headerMenu');
		$this->load->view('layout/title');
		$this->load->view('layout/navbar');
		$this->load->view('layout/Coffee');
		$this->load->view('layout/footer');
	}

	public function front()
	{
		$this->load->view('layout/front');
	}
}
