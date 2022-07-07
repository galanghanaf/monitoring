<?php

class OtAsset extends CI_Controller
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
        $data['title'] = "OT Asset";

        //Load model
        $this->load->model('Monitoring_model', 'monitoring');

        //Pagination
        $this->load->library('pagination');
        $config['base_url'] = site_url('admin/otasset/index');
        $config['total_rows'] = $this->monitoring->countAllOtAsset();
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
        $data['otasset'] = $this->monitoring->getOtAsset($config['per_page'], $data['start']);
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/otasset', $data);
        $this->load->view('templatesAdmin/footer');
    }
    public function tambahData()
    {
        $data['title'] = "Tambah Data OT Asset";
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formTambahOtAsset', $data);
        $this->load->view('templatesAdmin/footer');
    }
    public function tambahDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        } else {
            $id                 = $this->input->post('id');
            $it                 = $this->input->post('it');
            $ot                 = $this->input->post('ot');
            $plant_code         = $this->input->post('plant_code');
            $cbu                = $this->input->post('cbu');
            $cost_ctr           = $this->input->post('cost_ctr');
            $asset_number       = $this->input->post('asset_number');
            $asset_description  = $this->input->post('asset_description');
            $serial_number      = $this->input->post('serial_number');
            $type               = $this->input->post('type');
            $computer_name      = $this->input->post('computer_name');
            $qty                = $this->input->post('qty');
            $acquis_val         = $this->input->post('acquis_val');
            $accum_dep          = $this->input->post('accum_dep');
            $book_val           = $this->input->post('book_val');
            $fixed_asset1       = $this->input->post('fixed_asset1');
            $fixed_asset2       = $this->input->post('fixed_asset2');
            $fixed_asset3       = $this->input->post('fixed_asset3');
            $in_use             = $this->input->post('in_use');
            $idle               = $this->input->post('idle');
            $damage             = $this->input->post('damage');
            $label              = $this->input->post('label');
            $status             = $this->input->post('status');
            $ruangan            = $this->input->post('ruangan');
            $user               = $this->input->post('user');
            $cap_date           = $this->input->post('cap_date');
            $note               = $this->input->post('note');
            $network_ot         = $this->input->post('network_ot');
            $network_it         = $this->input->post('network_it');
            $mac_address        = $this->input->post('mac_address');
            $ip_address         = $this->input->post('ip_address');
            $nead               = $this->input->post('nead');
            $sep                = $this->input->post('sep');
            $sccm               = $this->input->post('sccm');
            $os_version         = $this->input->post('os_version');






            $data = array(
                'it'                => $it,
                'ot'                => $ot,
                'plant_code'        => $plant_code,
                'cbu'               => $cbu,
                'cost_ctr'          => $cost_ctr,
                'asset_number'      => $asset_number,
                'asset_description' => $asset_description,
                'serial_number'     => $serial_number,
                'type'              => $type,
                'computer_name'     => $computer_name,
                'qty'               => $qty,
                'acquis_val'        => $acquis_val,
                'accum_dep'         => $accum_dep,
                'book_val'          => $book_val,
                'fixed_asset1'      => $fixed_asset1,
                'fixed_asset2'      => $fixed_asset2,
                'fixed_asset3'      => $fixed_asset3,
                'in_use'            => $in_use,
                'idle'              => $idle,
                'damage'            => $damage,
                'label'             => $label,
                'status'            => $status,
                'ruangan'           => $ruangan,
                'user'              => $user,
                'cap_date'          => $cap_date,
                'note'              => $note,
                'network_ot'        => $network_ot,
                'network_it'        => $network_it,
                'mac_address'       => $mac_address,
                'ip_address'        => $ip_address,
                'nead'              => $nead,
                'sep'               => $sep,
                'sccm'              => $sccm,
                'os_version'        => $os_version,



            );

            $this->Monitoring_model->insert_data($data, 'ot_asset');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan!</strong>
            </div>');
            redirect('admin/otasset');
        }
    }

    public function updateData($id)
    {
        $data['otasset'] = $this->db->query("SELECT * FROM ot_asset WHERE id='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Update Data OT Asset";
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formUpdateOtAsset', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            redirect('admin/otasset');
        } else {
            $id                 = $this->input->post('id');
            $it                 = $this->input->post('it');
            $ot                 = $this->input->post('ot');
            $plant_code         = $this->input->post('plant_code');
            $cbu                = $this->input->post('cbu');
            $cost_ctr           = $this->input->post('cost_ctr');
            $asset_number       = $this->input->post('asset_number');
            $asset_description  = $this->input->post('asset_description');
            $serial_number      = $this->input->post('serial_number');
            $type               = $this->input->post('type');
            $computer_name      = $this->input->post('computer_name');
            $qty                = $this->input->post('qty');
            $acquis_val         = $this->input->post('acquis_val');
            $accum_dep          = $this->input->post('accum_dep');
            $book_val           = $this->input->post('book_val');
            $fixed_asset1       = $this->input->post('fixed_asset1');
            $fixed_asset2       = $this->input->post('fixed_asset2');
            $fixed_asset3       = $this->input->post('fixed_asset3');
            $in_use             = $this->input->post('in_use');
            $idle               = $this->input->post('idle');
            $damage             = $this->input->post('damage');
            $label              = $this->input->post('label');
            $status             = $this->input->post('status');
            $ruangan            = $this->input->post('ruangan');
            $user               = $this->input->post('user');
            $cap_date           = $this->input->post('cap_date');
            $note               = $this->input->post('note');
            $network_ot         = $this->input->post('network_ot');
            $network_it         = $this->input->post('network_it');
            $mac_address        = $this->input->post('mac_address');
            $ip_address         = $this->input->post('ip_address');
            $nead               = $this->input->post('nead');
            $sep                = $this->input->post('sep');
            $sccm               = $this->input->post('sccm');
            $os_version         = $this->input->post('os_version');

            $data = array(
                'it'                => $it,
                'ot'                => $ot,
                'plant_code'        => $plant_code,
                'cbu'               => $cbu,
                'cost_ctr'          => $cost_ctr,
                'asset_number'      => $asset_number,
                'asset_description' => $asset_description,
                'serial_number'     => $serial_number,
                'type'              => $type,
                'computer_name'     => $computer_name,
                'qty'               => $qty,
                'acquis_val'        => $acquis_val,
                'accum_dep'         => $accum_dep,
                'book_val'          => $book_val,
                'fixed_asset1'      => $fixed_asset1,
                'fixed_asset2'      => $fixed_asset2,
                'fixed_asset3'      => $fixed_asset3,
                'in_use'            => $in_use,
                'idle'              => $idle,
                'damage'            => $damage,
                'label'             => $label,
                'status'            => $status,
                'ruangan'           => $ruangan,
                'user'              => $user,
                'cap_date'          => $cap_date,
                'note'              => $note,
                'network_ot'        => $network_ot,
                'network_it'        => $network_it,
                'mac_address'       => $mac_address,
                'ip_address'        => $ip_address,
                'nead'              => $nead,
                'sep'               => $sep,
                'sccm'              => $sccm,
                'os_version'        => $os_version,


            );
            $where = array(
                'id' => $id
            );

            $this->Monitoring_model->update_data('ot_asset', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('admin/otasset');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('plant_code', 'Plant Code', 'required');
        $this->form_validation->set_rules('cbu', 'CBU', 'required');
        $this->form_validation->set_rules('asset_number', 'Asset Number', 'required');
        $this->form_validation->set_rules('asset_description', 'Asset Description', 'required');

    }

    public function deleteData($id)
    {
        $where = array('id' => $id);
        $this->Monitoring_model->delete_data($where, 'ot_asset');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Dihapus!</strong></div>');
        redirect('admin/otasset');
    }
}