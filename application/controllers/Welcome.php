<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{

		//Load model
		$this->load->model('Monitoring_model', 'monitoring');

		$data['portfolio'] = $this->monitoring->getAllPortfolio();
		$data['portfolio1'] = $this->monitoring->getAllPortfolio1();
		$data['portfolio2'] = $this->monitoring->getAllPortfolio2();
		$data['portfolio3'] = $this->monitoring->getAllPortfolio3();
		$data['portfolio4'] = $this->monitoring->getAllPortfolio4();
		$data['portfolio5'] = $this->monitoring->getAllPortfolio5();
		$data['portfolio6'] = $this->monitoring->getAllPortfolio6();

		$data['team'] = $this->monitoring->getAllTeam();
		$data['team1'] = $this->monitoring->getAllTeam1();
		$data['team2'] = $this->monitoring->getAllTeam2();
		$data['team3'] = $this->monitoring->getAllTeam3();
		$data['team4'] = $this->monitoring->getAllTeam4();
		$data['team5'] = $this->monitoring->getAllTeam5();

		$data['header'] = $this->monitoring->getAllHeader();

		$data['header_background'] = $this->monitoring->getAllHeaderBackground();

		$superadmin = $this->db->query("SELECT * FROM data_admin WHERE hak_akses = '1'");
		$data['superadmin'] = $superadmin->num_rows();
		$admin = $this->db->query("SELECT * FROM data_admin WHERE hak_akses = '2'");
		$data['admin'] = $admin->num_rows();

		$task_list = $this->db->query("SELECT * FROM task_list");
		$data['task_list'] = $task_list->num_rows();

		$logbook = $this->db->query("SELECT * FROM logbook");
		$data['logbook'] = $logbook->num_rows();

		$accesspoint = $this->db->query("SELECT * FROM mapping_networkap");
		$data['accesspoint'] = $accesspoint->num_rows();
		$ipstatic = $this->db->query("SELECT * FROM ipstatic");
		$data['ipstatic'] = $ipstatic->num_rows();
		$switch = $this->db->query("SELECT * FROM mapping_network");
		$data['switch'] = $switch->num_rows();

		$itot_asset = $this->db->query("SELECT * FROM itot_asset");
		$data['itot_asset'] = $itot_asset->num_rows();

		$data['mappingnetwork'] = $this->monitoring->getAllMappingNetwork();
		$data['mappingnetworkap'] = $this->monitoring->getAllMappingNetworkAP();
		$data['ipstatic2'] = $this->monitoring->getAllIpStatic();
		$data['mappingitotasset'] = $this->monitoring->getAllItOtAsset();


		$this->_rules();
		//function ini berfungsi untuk melakukan form_validation
		if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke formLogin
			$data['title'] = "Dashboard";
			$data['admin'] = $this->Monitoring_model->get_data('data_admin')->result();
			$this->load->view('welcome', $data);
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$cek = $this->Monitoring_model->cek_login($username, $password);
			if ($cek == FALSE) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Username Atau Password Salah!</strong></div>');
				redirect('Welcome');
			} else {
				$this->session->set_userdata('email', $cek->email); //menyimpan session yang login
				$this->session->set_userdata('username', $cek->username); //menyimpan session yang login
				$this->session->set_userdata('hak_akses', $cek->hak_akses); //menyimpan session yang login
				$this->session->set_userdata('nama_admin', $cek->nama_admin);
				$this->session->set_userdata('id', $cek->id);

				switch ($cek->hak_akses) {
					case 1:
						redirect('superadmin/dashboard');
						break;
					case 2:
						redirect('admin/dashboard');
						break;
					case 3:
						redirect('welcome');
					default:
						break;
				}
			}
		}
	}



	public function _rules()
	{
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Welcome');
	}
}
