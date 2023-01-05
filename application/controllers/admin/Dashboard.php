<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('role_id') != '1') {
      $this->session->set_flashdata(
        'pesan',

        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Anda belum Login sebagai Admin !
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>'
      );
      redirect(base_url() . 'auth/login');
    }
  }

  public function index()
  {
    $data['products'] = $this->Products_model->getData()->result();
    $this->load->view('templates-admin/header');
    $this->load->view('templates-admin/sidebar');
    $this->load->view('admin/dashboard', $data);
    $this->load->view('templates-admin/footer');
  }
}
