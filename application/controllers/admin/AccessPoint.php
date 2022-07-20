<?php

class AccessPoint extends CI_Controller
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
        $data['title'] = "Data Access Point";

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
        $config['base_url'] = site_url('admin/accesspoint/index');
        $this->db->like('hostname', $data['keyword']);
        $this->db->or_like('asset_description', $data['keyword']);
        $this->db->or_like('model', $data['keyword']);
        $this->db->or_like('pcb', $data['keyword']);
        $this->db->or_like('assembly', $data['keyword']);
        $this->db->or_like('ip_address', $data['keyword']);
        $this->db->or_like('mac_address', $data['keyword']);
        $this->db->or_like('switch', $data['keyword']);
        $this->db->or_like('port', $data['keyword']);
        $this->db->or_like('location', $data['keyword']);



        $this->db->from('accesspoint');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 10;

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
        $data['accesspoint'] = $this->monitoring->getAccessPoint($config['per_page'], $data['start'], $data['keyword']);
        //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/accesspoint', $data);
        $this->load->view('templatesAdmin/footer');
    }
    public function export_csv()
    {
        $data['title'] = "Data Access Point";
        $data['accesspoint'] = $this->Monitoring_model->getAllAccessPoint();
        $this->load->view('admin/exportAccessPoint', $data);
    }
    public function tambahData()
    {
        $data['location'] = $this->Monitoring_model->get_data('area_location')->result();
        $data['modelasset'] = $this->Monitoring_model->get_data('model_asset')->result();
        $data['assetdescription'] = $this->Monitoring_model->get_data('assetdescription')->result();
        $data['title'] = "Tambah Data Access Point";
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formTambahAccessPoint', $data);
        $this->load->view('templatesAdmin/footer');
    }
    public function tambahDataAksi()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation
        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambahData
            $this->tambahData();
        } else {
            $id             = $this->input->post('id');
            $asset_description     = $this->input->post('asset_description');
            $hostname      = $this->input->post('hostname');
            $model          = $this->input->post('model');
            $pcb       = $this->input->post('pcb');
            $assembly       = $this->input->post('assembly');
            $ip_address       = $this->input->post('ip_address');
            $mac_address       = $this->input->post('mac_address');
            $switch       = $this->input->post('switch');
            $port       = $this->input->post('port');
            $location       = $this->input->post('location');



            $data = array(
                'asset_description'    => $asset_description,
                'hostname'     => $hostname,
                'model'         => $model,
                'pcb'      => $pcb,
                'assembly'      => $assembly,
                'ip_address'      => $ip_address,
                'mac_address'      => $mac_address,
                'switch'      => $switch,
                'port'      => $port,
                'location'      => $location,

            );

            $this->Monitoring_model->insert_data($data, 'accesspoint');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan!</strong>
            </div>');
            redirect('admin/accesspoint');
        }
    }
    /*
    fungsi function ini untuk melakukan form_validation, tujuan untuk menentukan rules dari setiap input yang ada pada views 
        //disini kita men set rules dengan required, artinya form wajib di isi
    */
    public function updateData($id)
    {
        $data['title'] = 'Update Data Access Point';
        $data['location'] = $this->Monitoring_model->get_data('area_location')->result();
        $data['modelasset'] = $this->Monitoring_model->get_data('model_asset')->result();
        $data['assetdescription'] = $this->Monitoring_model->get_data('assetdescription')->result();
        $data['accesspoint'] = $this->db->query("SELECT * FROM accesspoint WHERE id='$id'")->result();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formUpdateAccessPoint', $data);
        $this->load->view('templatesAdmin/footer');
    }
    public function updateDataAksi()
    {
        $this->_rules(); //function ini berfungsi untuk melakukan form_validation
        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambahData
            redirect('admin/accesspoint');
        } else {
            $id             = $this->input->post('id');
            $asset_description     = $this->input->post('asset_description');
            $hostname      = $this->input->post('hostname');
            $model          = $this->input->post('model');
            $pcb       = $this->input->post('pcb');
            $assembly       = $this->input->post('assembly');
            $ip_address       = $this->input->post('ip_address');
            $mac_address       = $this->input->post('mac_address');
            $switch       = $this->input->post('switch');
            $port       = $this->input->post('port');
            $location       = $this->input->post('location');

            $data = array(
                'asset_description'    => $asset_description,
                'hostname'     => $hostname,
                'model'         => $model,
                'pcb'      => $pcb,
                'assembly'      => $assembly,
                'ip_address'      => $ip_address,
                'mac_address'      => $mac_address,
                'switch'      => $switch,
                'port'      => $port,
                'location'      => $location,

            );

            $where = array(
                'id' => $id
            );
            $this->Monitoring_model->update_data('accesspoint', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong>
            </div>');
            redirect('admin/accesspoint');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('ip_address', 'IP Address', 'required');
        $this->form_validation->set_rules('mac_address', 'Mac Address', 'required');
    }

    public function deleteData($id)
    {
        $where = array('id' => $id);
        $this->Monitoring_model->delete_data($where, 'accesspoint');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Dihapus!</strong></div>');
        redirect('admin/accesspoint');
    }
}
