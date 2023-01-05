<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
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
    $this->load->view('admin/produk', $data);
    $this->load->view('templates-admin/footer');
  }

  public function tambah_produk()
  {
    $name = $this->input->post('name');
    $category = $this->input->post('category');
    $price = $this->input->post('price');
    $description = $this->input->post('description');
    $image = $_FILES['image']['name'];
    if ($image = '') {
    } else {
      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'jpg|jpeg|png|gif';
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('image')) {
        echo "Upload gambar gagal !";
      } else {
        $image = $this->upload->data('file_name');
      }
    }

    $data = array(
      'name' => $name,
      'category' => $category,
      'price' => $price,
      'description' => $description,
      'image' => $image,
    );

    $this->Products_model->addProduct($data, 'tb_products');
    redirect(base_url() . 'admin/produk');
  }

  public function edit($id)
  {
    $where = array('id' => $id);
    $data['products'] = $this->Products_model->editProduct($where, 'tb_products')->result();
    $this->load->view('templates-admin/header');
    $this->load->view('templates-admin/sidebar');
    $this->load->view('admin/edit_produk', $data);
    $this->load->view('templates-admin/footer');
  }

  public function update()
  {
    $id = $this->input->post('id');
    $name = $this->input->post('name');
    $description = $this->input->post('description');
    $category = $this->input->post('category');
    $price = $this->input->post('price');
    $image = $this->input->post('image');

    $data = array(
      'name' => $name,
      'description' => $description,
      'category' => $category,
      'price' => $price,
      'image' => $image,
    );

    $where = array(
      'id' => $id
    );

    $this->Products_model->updateProduct($where, $data, 'tb_products');
    redirect(base_url() . 'admin/produk');
  }
}
