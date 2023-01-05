<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getData()
  {
    return $this->db->get('tb_products');
  }

  public function getProducts()
  {
    $this->db->select('*');
    $this->db->from('tb_products');
    $get = $this->db->get();
    return $get->result_array();
  }

  public function addProduct($data)
  {
    $this->db->insert('tb_products', $data);
  }

  public function editProduct($data)
  {
    return $this->db->get_where('tb_products', $data);
  }

  public function updateProduct($where, $data)
  {
    $this->db->where($where);
    $this->db->update('tb_products', $data);
  }

  public function deleteProduct($data)
  {
    return $this->db->delete('tb_products', $data);
  }
}
