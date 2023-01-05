<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Brands extends CI_Controller
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
    $data['brands'] = $this->Brands_model->getData()->result();
    $this->load->view('templates-admin/header');
    $this->load->view('templates-admin/sidebar');
    $this->load->view('admin/brands', $data);
    $this->load->view('templates-admin/footer');
  }

  public function tambah_brand()
  {
    $name = $this->input->post('name');
    $img_brand = $_FILES['img_brand']['name'];
    if ($img_brand = '') {
    } else {
      $config['upload_path'] = './assets/img/brands/';
      $config['allowed_types'] = 'jpg|jpeg|png|gif';
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('img_brand')) {
        echo "Upload gambar gagal !";
      } else {
        $img_brand = $this->upload->data('file_name');
      }
    }

    $data = array(
      'name' => $name,
      'img_brand' => $img_brand,
    );

    $this->Brands_model->addBrands($data, 'tb_brands');
    redirect(base_url() . 'admin/brands');
  }

  public function edit($id)
  {
    $where = array('id' => $id);
    $data['brands'] = $this->Brands_model->editBrands($where, 'tb_brands')->result();
    $this->load->view('templates-admin/header');
    $this->load->view('templates-admin/sidebar');
    $this->load->view('admin/edit_brands', $data);
    $this->load->view('templates-admin/footer');
  }

  public function update()
  {
    $id = $this->input->post('id');
    $name = $this->input->post('name');
    $img_brand = $this->input->post('img_brand');

    $data = array(
      'name' => $name,
      'img_brand' => $img_brand,
    );

    $where = array(
      'id' => $id
    );

    $this->Brands_model->updateBrands($where, $data, 'tb_brands');
    redirect(base_url() . 'admin/brands');
  }
}
