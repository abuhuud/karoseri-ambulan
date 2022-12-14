<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_Slider extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getSlider()
  {
    $this->db->select('*');
    $this->db->from('tb_slider');
    $this->db->where('status', 'Disetujui');
    $get = $this->db->get();
    return $get->result_array();
  }
}
