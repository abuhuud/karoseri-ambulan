<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Brands_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getData()
  {
    return $this->db->get('tb_brands');
  }


  public function getBrands()
  {
    $this->db->select('*');
    $this->db->from('tb_brands');
    $get = $this->db->get();
    return $get->result_array();
  }

  public function addBrands($data)
  {
    $this->db->insert('tb_brands', $data);
  }

  public function editBrands($data)
  {
    return $this->db->get_where('tb_brands', $data);
  }

  public function updateBrands($where, $data)
  {
    $this->db->where($where);
    $this->db->update('tb_brands', $data);
  }

  public function deleteProduct($data)
  {
    return $this->db->delete('tb_brands', $data);
  }
}
