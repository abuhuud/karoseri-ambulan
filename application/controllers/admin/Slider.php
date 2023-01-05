<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Slider extends CI_Controller
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
    $data['slider'] = $this->Slider_model->getData()->result();
    $this->load->view('templates-admin/header');
    $this->load->view('templates-admin/sidebar');
    $this->load->view('admin/slider', $data);
    $this->load->view('templates-admin/footer');
  }

  public function tambah_slider()
  {
    $label = $this->input->post('label');
    $description = $this->input->post('description');
    $img_slide = $_FILES['img_slide']['name'];
    if ($img_slide = '') {
    } else {
      $config['upload_path'] = './uploads/slider/';
      $config['allowed_types'] = 'jpg|jpeg|png|gif';
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('img_slide')) {
        echo "Upload gambar gagal !";
      } else {
        $img_slide = $this->upload->data('file_name');
      }
    }

    $data = array(
      'label' => $label,
      'description' => $description,
      'img_slide' => $img_slide,
    );

    $this->Brands_model->addSlider($data, 'tb_slider');
    redirect(base_url() . 'admin/slider');
  }
}
