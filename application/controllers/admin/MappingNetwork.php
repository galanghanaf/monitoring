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
        $data['title'] = "Mapping Network";

        //Load model
        $this->load->model('Monitoring_model', 'monitoring');

        //Pagination
        $this->load->library('pagination');
        $config['base_url'] = site_url('admin/dataip/index');
        $config['total_rows'] = $this->monitoring->countAllMappingNetwork();
        $config['per_page'] = 5;

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
        $data['mappingnetwork'] = $this->monitoring->getMappingNetwork($config['per_page'], $data['start']);
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/mappingnetwork', $data);
        $this->load->view('templatesAdmin/footer');

        
    }
    public function tambahData()
    {
        $data['title'] = "Tambah Data Mapping Network";
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formTambahMappingNetwork', $data);
        $this->load->view('templatesAdmin/footer');
    }
    public function tambahDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        } else {
            $id              = $this->input->post('id');
            $description     = $this->input->post('description');
            $hostname        = $this->input->post('hostname');
            $model           = $this->input->post('model');
            $serial_number   = $this->input->post('serial_number');
            $ip_address      = $this->input->post('ip_address');
            $mac_address     = $this->input->post('mac_address');
            $switch          = $this->input->post('switch');
            $port            = $this->input->post('port');
            $rack            = $this->input->post('rack');
            $location        = $this->input->post('location');

            $data = array(
                'description'    => $description,
                'hostname'       => $hostname,
                'model'          => $model,
                'serial_number'  => $serial_number,
                'ip_address'     => $ip_address,
                'mac_address'    => $mac_address,
                'switch'         => $switch,
                'port'           => $port,
                'rack'           => $rack,
                'location'       => $location,
            );

            $this->Monitoring_model->insert_data($data, 'mapping_network');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan!</strong>
            </div>');
            redirect('admin/mappingnetwork');
        }
    }

    public function updateData($id)
    {
        $data['mappingnetwork'] = $this->db->query("SELECT * FROM mapping_network WHERE id='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Update Data Mapping Network";
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formUpdateMappingNetwork', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            redirect('admin/mappingnetwork');
        } else {
            $id              = $this->input->post('id');
            $description     = $this->input->post('description');
            $hostname        = $this->input->post('hostname');
            $model           = $this->input->post('model');
            $serial_number   = $this->input->post('serial_number');
            $ip_address      = $this->input->post('ip_address');
            $mac_address     = $this->input->post('mac_address');
            $switch          = $this->input->post('switch');
            $port            = $this->input->post('port');
            $rack            = $this->input->post('rack');
            $location        = $this->input->post('location');
       

            $data = array(
                'description'    => $description,
                'hostname'       => $hostname,
                'model'          => $model,
                'serial_number'  => $serial_number,
                'ip_address'     => $ip_address,
                'mac_address'    => $mac_address,
                'switch'         => $switch,
                'port'           => $port,
                'rack'           => $rack,
                'location'       => $location,
               
            );
            $where = array(
                'id' => $id
            );

            $this->Monitoring_model->update_data('mapping_network', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('admin/mappingnetwork');
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
        redirect('admin/mappingnetwork');
    }
}
