<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('hak_akses') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Anda Belum Login!</strong></div>');
            redirect('Welcome');
        }
    }
    public function index()
    {
        $data['title'] = "Dashboard"; //untuk title pada dasboard


        $admin = $this->db->query("SELECT * FROM data_admin WHERE hak_akses = '1'");
        $data['admin'] = $admin->num_rows();

        $task_list = $this->db->query("SELECT * FROM task_list");
        $data['task_list'] = $task_list->num_rows();

        $logbook = $this->db->query("SELECT * FROM logbook");
        $data['logbook'] = $logbook->num_rows();


        $id = $this->session->userdata('id');
        $this->load->model('Monitoring_model', 'monitoring');

        $data['header'] = $this->monitoring->getAllHeader();


        // berfungsi untuk memanggil view, yang berguna untuk menata file url
        $this->load->view('templatesSuperAdmin/header', $data);
        $this->load->view('templatesSuperAdmin/sidebar');
        $this->load->view('superadmin/dashboard', $data);
        $this->load->view('templatesSuperAdmin/footer');
    }
}
