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
	public function data_file_aplikasi()
	{
		$data['title'] = 'Administrator';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['file_aplikasi'] = $this->m_admin->show_file_aplikasi();
		$this->load->view('admin/header.php', $data);
		$this->load->view('admin/sidebar.php');
		$this->load->view('admin/data_file_aplikasi.php');
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
		$data['mahasiswa'] = $this->m_admin->get_mhs($id);
		$this->load->view('admin/header.php', $data);
		$this->load->view('admin/sidebar.php');
		$this->load->view('admin/detail_ta.php');
		$this->load->view('admin/footer');
	}
	public function get_file_app($id)
	{
		$data = array();
		$data['title'] = 'Administrator';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['file_app'] = $this->m_admin->get_file_app($id);
		$data['mahasiswa'] = $this->m_admin->get_mhs($id);
		$this->load->view('admin/header.php', $data);
		$this->load->view('admin/sidebar.php');
		$this->load->view('admin/data_file_aplikasi_detail.php');
		$this->load->view('admin/footer.php');
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
		$this->session->set_flashdata('addUser', 'Berhasil Ditambahkan');
		redirect('admin/data_userMhs');
	}
	public function update($id)
	{
		$data = array(
			'status' => "3",
		);
		$this->db->update;
		redirectPreviousPage();
	}
	public function delete($id)
	{
		$where = array('id' => $id);
		$this->m_admin->hapus_data($where, 'user');
	}

	public function action_ta($id)
	{
		if ($_POST['action'] == 'aprove') {
			$data = array(
				'status_id' => '3'

			);
			$where = array(
				'id' => $id
			);
			$this->m_admin->update_data($where, $data, 'tugas_akhir');
			redirectPreviousPage();
		} elseif ($_POST['action'] == 'declined') {
			$this->db->delete('tugas_akhir', array('id' => $id));  // Produces: // DELETE FROM mytable  // WHERE id = $id
			redirectPreviousPage();
		}
	}
	public function action_file($id)
	{
		if ($_POST['action'] == 'aprove') {
			$kategori = $this->input->post('kategori_file');
			$data = array(
				'status' => '3',
				'file' => $kategori

			);
			$where = array(
				'id' => $id
			);
			$this->m_admin->update_data($where, $data, 'file');
			redirectPreviousPage();
		} elseif ($_POST['action'] == 'declined') {
			$this->db->delete('file', array('id' => $id));  // Produces: // DELETE FROM mytable  // WHERE id = $id
			redirectPreviousPage();
		}
	}
	public function send_email($id)
	{
		$this->load->library('email');
		$config = array();
		$config['charset'] = 'utf-8';
		$config['useragent'] = 'Codeigniter';
		$config['protocol'] = "smtp";
		$config['mailtype'] = "html";
		$config['smtp_host'] = "ssl://smtp.gmail.com"; //pengaturan smtp
		$config['smtp_port'] = "465";
		$config['smtp_timeout'] = "5";
		$config['smtp_user'] = 'sitish272@gmail.com'; // isi dengan email 
		$config['smtp_pass'] = 'makanapaya'; // isi dengan password 
		$config['crlf'] = "\r\n";
		$config['newline'] = "\r\n";
		$config['wordwrap'] = TRUE;
		$this->email->initialize($config);
		$data = $this->db->get_where('mahasiswa', ['id' => $id])->row();
		$this->load->library('email');
		$this->email->set_newline("\r\n");
		$this->email->from('sitish272@gmail.com', 'Admin Re:Code');
		$this->email->to($data->email);
		$this->email->subject('Percobaan email');
		$this->email->message('Petugas kami telah melakukan verifikasi terhadap data yang ada unggah dan menemukan beberapa hal yang harus anda perbaiki. silakan kunjungi http://...');
		if (!$this->email->send()) {
			show_error($this->email->print_debugger());
		} else {
			echo 'Success to send email';
		}
	}
}
