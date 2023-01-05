<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landingpage extends CI_Controller
{
	public function index()
	{
		$data = [
			'slider' => $this->Slider_model->getSlider(),
			'brands' => $this->Brands_model->getBrands(),
			'products' => $this->Products_model->getProducts()
		];

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/hero', $data);
		$this->load->view('templates/section', $data);
		$this->load->view('templates/footer');
	}
}
