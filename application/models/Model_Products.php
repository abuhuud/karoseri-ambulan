<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_Products extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  public function getProducts()
  {
    $this->db->select('*');
    $this->db->from('tb_products');
    $this->db->where('status', 'Disetujui');
    $get = $this->db->get();
    return $get->result_array();
  }
}
