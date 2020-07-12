<?php

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper("customhelper");
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
	}
	public function index()
	{
		$data['title'] = 'Administrator';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('admin/header.php', $data);
		$this->load->view('admin/sidebar.php');
		$this->load->view('admin/main.php');
		$this->load->view('admin/footer');
	}
	public function data_mahasiswa()
	{
		$data['title'] = 'Administrator';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['ta_mhs'] = $this->m_admin->show_tugas_akhir();
		$this->load->view('admin/header.php', $data);
		$this->load->view('admin/sidebar.php');
		$this->load->view('admin/data_mahasiswa.php');
		$this->load->view('admin/footer');
	}
	public function cek_status($status_id)
	{
		return $this->m_admin->get_status_ta($status_id);
	}

	public function data_userMhs()
	{
		$data['title'] = 'Administrator';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['userMhs'] = $this->m_admin->show_userMhs();
		$this->load->view('admin/header.php', $data);
		$this->load->view('admin/sidebar.php');
		$this->load->view('admin/data_userMhs.php');
		$this->load->view('admin/footer');
	}
	public function data_userAdmin()
	{
		$data['title'] = 'Administrator';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['userAdmin'] = $this->m_admin->show_userAdmin();
		$this->load->view('admin/header.php', $data);
		$this->load->view('admin/sidebar.php');
		$this->load->view('admin/data_userAdmin.php');
		$this->load->view('admin/footer');
	}

	public function get_detail($id)
	{
		$data = array();
		$data['title'] = 'Administrator';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['ta_mhs'] = $this->m_admin->show_tugas_akhir();
		$data['file'] = $this->m_admin->get_file($id);
		$data['ta'] = $this->m_admin->show_detail($id);
		$this->load->view('admin/header.php', $data);
		$this->load->view('admin/sidebar.php');
		$this->load->view('admin/detail_ta.php');
		$this->load->view('admin/footer');
	}

	public function add_user()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$role_id = $this->input->post('role');
		$data = array(
			'username'      => $username,
			'role_id'  => $role_id,
			'password'  => $password,
			'is_active'  => 1,
		);
		$this->m_admin->input_data($data, 'user');
		redirectPreviousPage();
	}
	public function delete($id)
	{
		$where = array('id' => $id);
		$this->m_admin->hapus_data($where, 'user');
		redirectPreviousPage();
	}
}
