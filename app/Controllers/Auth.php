<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        $role_id = $this->session->userdata('role_id');
        if ($role_id != NULL) {
            if ($role_id == 1) {
                redirect('admin');
            } else {
                $this->session->unset_userdata('email');
                $this->session->unset_userdata('role_id');
                $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>×</span>
                        </button>
                        Anda bukan admin
                      </div>
                    </div>');
                $data['title'] = "RS | Login";
                $this->load->view('templates/auth_header', $data);
                $this->load->view('auth/login');
                $this->load->view('templates/auth_footer');
                // echo 'BUKAN ADMIN';

                redirect('auth');
            }
        } else {
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            if ($this->form_validation->run() == false) {
                $data['title'] = "RS | Login";
                $this->load->view('templates/auth_header', $data);
                $this->load->view('auth/login');
                $this->load->view('templates/auth_footer');
            } else {
                //success
                $this->_login();
            }
        }

        // if ( $role_id == 1) {
        //   redirect('admin');
        // }else{
        //   $this->logout();
        // }


    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

        //jika user ada
        if ($user) {
            //user aktif
            if ($user['is_active'] == 1) {
                # code...
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];

                    $this->session->set_userdata($data);

                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('auth');
                    }
                    die();
                } else {
                    # code...
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>×</span>
                        </button>
                        password salah!
                      </div>
                    </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>×</span>
                        </button>
                        email belum di aktivasi!
                      </div>
                    </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>×</span>
                        </button>
                        email belum terdaftar, silakan registrasi dahulu
                      </div>
                    </div>');
            redirect('auth');
        }
    }
    public function register()
    {
        return view('auth/register');
    }
}
