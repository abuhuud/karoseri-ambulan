<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

  public function index()
  {
    $data['products'] = $this->Products_model->getProducts();
    $this->load->view('templates/header');
    $this->load->view('templates/navbar-produk');
    $this->load->view('produk', $data);
    $this->load->view('templates/footer');
  }
}
