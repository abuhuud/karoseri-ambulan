<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slider_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getData()
  {
    return $this->db->get('tb_slider');
  }

  public function getSlider()
  {
    $this->db->select('*');
    $this->db->from('tb_slider');
    $get = $this->db->get();
    return $get->result_array();
  }

  public function addSlider($data)
  {
    $this->db->insert('tb_slider', $data);
  }

  public function editSlider($data)
  {
    return $this->db->get_where('tb_slider', $data);
  }

  public function updateSlider($where, $data)
  {
    $this->db->where($where);
    $this->db->update('tb_slider', $data);
  }

  public function deleteSlider($data)
  {
    return $this->db->delete('tb_slider', $data);
  }
}
