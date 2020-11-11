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

	public function aprove_file($id)
	{
		$data = array(
			'status' => '3'
		);

		$this->db->update('file', $data, array('id' => $id));
		redirectPreviousPage();
	}
	public function decline_file($id)
	{
		$data = array(
			'status' => '2'


		);
		$where = array(
			'id' => $id
		);

		$this->m_admin->update_data($where, $data, 'file');
		redirectPreviousPage();
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
		$data['mahasiswa'] = $this->db->get_where('mahasiswa', ['id' => $id])->row();
		$data['message'] = $_POST['messageEmail'];
		$this->load->library('email');
		$this->email->set_newline("\r\n");
		$this->email->from('sitish272@gmail.com', 'Admin Re:Code');
		$this->email->to($data['mahasiswa']->email);
		$this->email->subject('Percobaan email');
		$this->email->message($data['message']);
		if (!$this->email->send()) {
			show_error($this->email->print_debugger());
		} else {
			echo 'Success to send email';
		}
	}
	public function download($id)
	{

		//get file info from database
		$fileInfo =  $this->m_admin->getRows(array('name' => $id));
		//file path
		$filename = $fileInfo['name'] ?? 'default value';
		$filepath = 'C:\xampp\htdocs\repositori\uploads\file_aplikasi/' . $fileInfo['name'];
		$data = file_get_contents($filepath);
		//download file from directory
		$mime = get_mime_by_extension($filepath);
		header('Content-Type: ' . $mime);  // Add the mime type from Code igniter.

		return force_download($filename, $data);
	}
	public function update_port_app($id)
	{
		$data = array(
			'status' => '3',
			'port' => $this->input->post('port')

		);
		$where = array(
			'id' => $id
		);


		$this->m_admin->update_data($where, $data, 'file_aplikasi');
		$this->session->set_flashdata('File Aplikasi', 'Berhasil diupdate');
		redirectPreviousPage();
	}
	public function update_note_app($id)
	{
		$data = array(

			'notes' => $this->input->post('note')

		);
		$where = array(
			'id' => $id
		);


		$this->m_admin->update_data($where, $data, 'file_aplikasi');
		$this->session->set_flashdata('File Aplikasi', 'Berhasil diupdate');
		redirectPreviousPage();
	}
}
