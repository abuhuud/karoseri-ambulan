<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_Brands extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getBrands()
  {
    $this->db->select('*');
    $this->db->from('tb_brands');
    $get = $this->db->get();
    return $get->result_array();
  }
}
