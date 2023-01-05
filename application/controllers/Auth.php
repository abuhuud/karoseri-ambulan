<?php
class Auth extends CI_Controller
{
  public function login()
  {
    $this->form_validation->set_rules('username', 'Username', 'required', [
      'required' => 'Username tidak boleh kosong'
    ]);
    $this->form_validation->set_rules('password', 'Password', 'required', [
      'required' => 'Password tidak boleh kosong'
    ]);
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header');
      $this->load->view('form_login');
      $this->load->view('templates/footer');
    } else {
      $auth = $this->Auth_model->cek_login();

      if ($auth == FALSE) {
        $this->session->set_flashdata(
          'pesan',

          '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Username atau Password Anda Salah !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
        );
        redirect(base_url() . 'auth/login');
      } else {
        $this->session->set_userdata('username', $auth->username);
        $this->session->set_userdata('role_id', $auth->role_id);
        switch ($auth->role_id) {
          case 1:
            redirect(base_url() . 'admin/dashboard');
            break;
          case 2:
            redirect(base_url());
            break;
          default:
            break;
        }
      }
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect(base_url());
  }
}
