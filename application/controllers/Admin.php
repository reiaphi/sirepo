<?php

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
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
	public function data_user()
	{
		$data['title'] = 'Administrator';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('admin/header.php', $data);
		$this->load->view('admin/sidebar.php');
		$this->load->view('admin/data_user.php');
		$this->load->view('admin/footer');
	}
	public function uploadFile()
	{
		$judul			= $this->input->post('judul');
		$penulis		= $this->input->post('penulis');
		$pembimbing		= $this->input->post('pembimbing');
		$file			= $_FILES['file'];

		if ($file = '') {
		} else {
			$config['upload_path']		= './assets/file';
			$config['allowed_types']	= 'pdf';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('file')) {

				echo "upload gagal";
				die();
			} else {
				$file = $this->upload->data('file_name');
				return "upload success";
			}
		}
		$data = array(
			'judul'      => $judul,
			'penulis'	 => $penulis,
			'pembimbing' => $pembimbing,
			'file'		=> $file
		);


		$this->m_file->input_data($data, 'tb_file');
		redirect('Admin/index');
	}
}
