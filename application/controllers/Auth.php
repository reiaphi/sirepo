<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('user');
        }
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/auth_header.php');
            $this->load->view('auth/login_admin.php');
            $this->load->view('template/auth_footer.php');
        } else {
            $this->login();
        }
    }

    private function login()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            //ada user aktif
            if ($user['is_active'] == 1) {

                //check password
                if ($password == $user['password']) {
                    $data = [
                        'id' => $user['id'],
                        'username' => $user['username'],
                        'role_id' => $user['role_id']

                    ];
                    $this->session->set_userdata($data);
                    //cek role user
                    redirect('user');
                } else {
                    redirect('auth');
                }
            } else {
                redirect('auth');
            }
        } else {
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        redirect('auth');
    }
}
