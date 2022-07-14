<?php

class MappingNetwork extends CI_Controller
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
        $data['title'] = "Mapping Network Switch";

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
        $config['base_url'] = site_url('superadmin/mappingnetwork/index');
        $this->db->like('hostname', $data['keyword']);
        $this->db->or_like('asset_description', $data['keyword']);
        $this->db->or_like('model', $data['keyword']);
        $this->db->or_like('serial_number', $data['keyword']);
        $this->db->or_like('ip_address', $data['keyword']);
        $this->db->or_like('mac_address', $data['keyword']);
        $this->db->or_like('switch', $data['keyword']);
        $this->db->or_like('port', $data['keyword']);
        $this->db->or_like('location', $data['keyword']);
        $this->db->from('mapping_network');
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
        $data['mappingnetwork'] = $this->monitoring->getMappingNetwork($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('templatesSuperAdmin/header', $data);
        $this->load->view('templatesSuperAdmin/sidebar');
        $this->load->view('superadmin/mappingnetwork', $data);
        $this->load->view('templatesSuperAdmin/footer');
    }
    public function tambahData()
    {
        $data['title'] = "Tambah Data Mapping Network Switch";
        $data['equipment'] = $this->Monitoring_model->get_data('equipment')->result();
        $data['location'] = $this->Monitoring_model->get_data('area_location')->result();
        $data['assetdescription'] = $this->Monitoring_model->get_data('assetdescription')->result();
        $data['modelasset'] = $this->Monitoring_model->get_data('model_asset')->result();

        $this->load->view('templatesSuperAdmin/header', $data);
        $this->load->view('templatesSuperAdmin/sidebar');
        $this->load->view('superadmin/formTambahMappingNetwork', $data);
        $this->load->view('templatesSuperAdmin/footer');
    }
    public function tambahDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        } else {
            $id              = $this->input->post('id');
            $asset_description     = $this->input->post('asset_description');
            $hostname        = $this->input->post('hostname');
            $model           = $this->input->post('model');
            $serial_number   = $this->input->post('serial_number');
            $ip_address      = $this->input->post('ip_address');
            $mac_address     = $this->input->post('mac_address');
            $switch          = $this->input->post('switch');
            $port            = $this->input->post('port');
            $location        = $this->input->post('location');



            $data = array(
                'asset_description'    => $asset_description,
                'hostname'       => $hostname,
                'model'          => $model,
                'serial_number'  => $serial_number,
                'ip_address'     => $ip_address,
                'mac_address'    => $mac_address,
                'switch'         => $switch,
                'port'           => $port,
                'location'       => $location,

            );

            $this->Monitoring_model->insert_data($data, 'mapping_network');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan!</strong>
            </div>');
            redirect('superadmin/mappingnetwork');
        }
    }

    public function updateData($id)
    {
        $data['equipment'] = $this->Monitoring_model->get_data('equipment')->result();
        $data['location'] = $this->Monitoring_model->get_data('area_location')->result();
        $data['mappingnetwork'] = $this->db->query("SELECT * FROM mapping_network WHERE id='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['assetdescription'] = $this->Monitoring_model->get_data('assetdescription')->result();
        $data['modelasset'] = $this->Monitoring_model->get_data('model_asset')->result();

        $data['title'] = "Update Data Mapping Network Switch";
        $this->load->view('templatesSuperAdmin/header', $data);
        $this->load->view('templatesSuperAdmin/sidebar');
        $this->load->view('superadmin/formUpdateMappingNetwork', $data);
        $this->load->view('templatesSuperAdmin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            redirect('superadmin/mappingnetwork');
        } else {
            $id              = $this->input->post('id');
            $asset_description     = $this->input->post('asset_description');
            $hostname        = $this->input->post('hostname');
            $model           = $this->input->post('model');
            $serial_number   = $this->input->post('serial_number');
            $ip_address      = $this->input->post('ip_address');
            $mac_address     = $this->input->post('mac_address');
            $switch          = $this->input->post('switch');
            $port            = $this->input->post('port');
            $location        = $this->input->post('location');



            $data = array(
                'asset_description'    => $asset_description,
                'hostname'       => $hostname,
                'model'          => $model,
                'serial_number'  => $serial_number,
                'ip_address'     => $ip_address,
                'mac_address'    => $mac_address,
                'switch'         => $switch,
                'port'           => $port,
                'location'       => $location,


            );
            $where = array(
                'id' => $id
            );

            $this->Monitoring_model->update_data('mapping_network', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('superadmin/mappingnetwork');
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
        $this->Monitoring_model->delete_data($where, 'mapping_network');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Dihapus!</strong></div>');
        redirect('superadmin/mappingnetwork');
    }
}
