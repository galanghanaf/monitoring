<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('hak_akses') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Anda Belum Login!</strong></div>');
            redirect('Welcome');
        }
    }
    public function index()
    {
        $data['title'] = "Plant Citeureup"; //untuk title pada dasboard


        $superadmin = $this->db->query("SELECT * FROM data_admin WHERE hak_akses = '1'");
        $data['superadmin'] = $superadmin->num_rows();
        $admin = $this->db->query("SELECT * FROM data_admin WHERE hak_akses = '2'");
        $data['admin'] = $admin->num_rows();

        $task_list = $this->db->query("SELECT * FROM task_list");
        $data['task_list'] = $task_list->num_rows();

        $logbook = $this->db->query("SELECT * FROM logbook");
        $data['logbook'] = $logbook->num_rows();

        $accesspoint = $this->db->query("SELECT * FROM accesspoint");
        $data['accesspoint'] = $accesspoint->num_rows();
        $ipstatic = $this->db->query("SELECT * FROM ipstatic");
        $data['ipstatic'] = $ipstatic->num_rows();
        $switch = $this->db->query("SELECT * FROM switchpoint");
        $data['switch'] = $switch->num_rows();

        $itot_asset = $this->db->query("SELECT * FROM itot_asset");
        $data['itot_asset'] = $itot_asset->num_rows();

        $ot_asset = $this->db->query("SELECT * FROM ot_asset");
        $data['ot_asset'] = $ot_asset->num_rows();




        $id = $this->session->userdata('id');
        $this->load->model('Monitoring_model', 'monitoring');

        $data['mappingnetwork'] = $this->monitoring->getAllSwitchPoint();
        $data['mappingnetworkap'] = $this->monitoring->getAllAccessPoint();
        $data['ipstatic2'] = $this->monitoring->getAllIpStatic();
        $data['mappingitotasset'] = $this->monitoring->getAllItOtAsset();
        $data['mappingotasset'] = $this->monitoring->getAllOtAsset();
        $data['topology'] = $this->monitoring->getAllTopology();





        // berfungsi untuk memanggil view, yang berguna untuk menata file url
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templatesAdmin/footer');
    }
}
