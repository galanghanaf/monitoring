<?php

class IpStatic extends CI_Controller
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
        $data['title'] = "Data Ip Static";

        //Load model
        $this->load->model('Monitoring_model', 'monitoring');



        //Save Searching
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] =  $this->session->userdata('keyword');
        }

        //Pagination
        $this->load->library('pagination');
        $config['base_url'] = site_url('admin/ipstatic/index');
        $this->db->like('ip_address', $data['keyword']);
        $this->db->or_like('mac_address', $data['keyword']);
        $this->db->or_like('host_name',  $data['keyword']);
        $this->db->or_like('equipment',  $data['keyword']);
        $this->db->or_like('manufacture',  $data['keyword']);
        $this->db->or_like('model',  $data['keyword']);
        $this->db->or_like('serial_number',  $data['keyword']);
        $this->db->or_like('asset_number',  $data['keyword']);
        $this->db->or_like('location',  $data['keyword']);
        $this->db->or_like('user',  $data['keyword']);
        $this->db->from('ipstatic');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 99999999999999999999999;


        //styling
        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //initialize
        $this->pagination->initialize($config);



        $data['start'] = $this->uri->segment(4);
        $data['ipstatic'] = $this->monitoring->getIpStatic($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/ipstatic', $data);
        $this->load->view('templatesAdmin/footer');
    }
    public function tambahData()
    {
        $data['title'] = "Tambah Data Ip Static";
        $data['equipment'] = $this->Monitoring_model->get_data('equipment')->result();
        $data['modelasset'] = $this->Monitoring_model->get_data('model_asset')->result();
        $data['location'] = $this->Monitoring_model->get_data('area_location')->result();
        $data['manufacture'] = $this->Monitoring_model->get_data('manufacture')->result();

        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formTambahIpStatic', $data);
        $this->load->view('templatesAdmin/footer');
    }
    public function tambahDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        } else {
            $id              = $this->input->post('id');
            $vlan            = $this->input->post('vlan');
            $up_link         = $this->input->post('up_link');
            $port            = $this->input->post('port');
            $ip_address      = $this->input->post('ip_address');
            $mac_address     = $this->input->post('mac_address');
            $host_name       = $this->input->post('host_name');
            $equipment       = $this->input->post('equipment');
            $manufacture     = $this->input->post('manufacture');
            $model           = $this->input->post('model');
            $serial_number   = $this->input->post('serial_number');
            $asset_number    = $this->input->post('asset_number');
            $location        = $this->input->post('location');
            $latitude        = $this->input->post('latitude');
            $longitude        = $this->input->post('longitude');
            $user            = $this->input->post('user');
            $password        = $this->input->post('password');

            $data = array(
                'vlan'          => $vlan,
                'up_link'       => $up_link,
                'port'          => $port,
                'ip_address'    => $ip_address,
                'mac_address'   => $mac_address,
                'host_name'     => $host_name,
                'equipment'     => $equipment,
                'manufacture'   => $manufacture,
                'model'         => $model,
                'serial_number' => $serial_number,
                'asset_number'  => $asset_number,
                'location'      => $location,
                'latitude'      => $latitude,
                'longitude'     => $longitude,
                'user'          => $user,
                'password'      => $password,
                'model'         => $model,
            );

            $this->Monitoring_model->insert_data($data, 'ipstatic');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan!</strong>
            </div>');
            redirect('admin/ipstatic');
        }
    }

    public function updateData($id)
    {
        $data['location'] = $this->Monitoring_model->get_data('area_location')->result();
        $data['equipment'] = $this->Monitoring_model->get_data('equipment')->result();
        $data['modelasset'] = $this->Monitoring_model->get_data('model_asset')->result();
        $data['manufacture'] = $this->Monitoring_model->get_data('manufacture')->result();

        $data['ipstatic'] = $this->db->query("SELECT * FROM ipstatic WHERE id='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Update Data Ip Static";
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formUpdateIpStatic', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            redirect('admin/ipstatic');
        } else {
            $id              = $this->input->post('id');
            $vlan            = $this->input->post('vlan');
            $up_link         = $this->input->post('up_link');
            $port            = $this->input->post('port');
            $ip_address      = $this->input->post('ip_address');
            $mac_address     = $this->input->post('mac_address');
            $host_name       = $this->input->post('host_name');
            $equipment       = $this->input->post('equipment');
            $manufacture     = $this->input->post('manufacture');
            $model           = $this->input->post('model');
            $serial_number   = $this->input->post('serial_number');
            $asset_number    = $this->input->post('asset_number');
            $location        = $this->input->post('location');
            $latitude        = $this->input->post('latitude');
            $longitude        = $this->input->post('longitude');
            $user            = $this->input->post('user');
            $password        = $this->input->post('password');

            $data = array(
                'vlan'          => $vlan,
                'up_link'       => $up_link,
                'port'          => $port,
                'ip_address'    => $ip_address,
                'mac_address'   => $mac_address,
                'host_name'     => $host_name,
                'equipment'     => $equipment,
                'manufacture'   => $manufacture,
                'model'         => $model,
                'serial_number' => $serial_number,
                'asset_number'  => $asset_number,
                'location'      => $location,
                'latitude'      => $latitude,
                'longitude'     => $longitude,
                'user'          => $user,
                'password'      => $password,
                'model'         => $model,


            );
            $where = array(
                'id' => $id
            );

            $this->Monitoring_model->update_data('ipstatic', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('admin/ipstatic');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('ip_address', 'Ip Address', 'required');
        $this->form_validation->set_rules('mac_address', 'Ip Address', 'required');
    }

    public function deleteData($id)
    {
        $where = array('id' => $id);
        $this->Monitoring_model->delete_data($where, 'ipstatic');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Dihapus!</strong></div>');
        redirect('admin/ipstatic');
    }
}
