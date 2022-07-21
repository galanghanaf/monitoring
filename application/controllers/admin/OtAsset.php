<?php

class OtAsset extends CI_Controller
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
        $data['title'] = "List OT Asset";

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
        $config['base_url'] = site_url('admin/otasset/index');
        $this->db->like('plant_code', $data['keyword']);
        $this->db->or_like('cbu', $data['keyword']);
        $this->db->or_like('asset_number', $data['keyword']);
        $this->db->or_like('asset_description', $data['keyword']);
        $this->db->or_like('serial_number', $data['keyword']);
        $this->db->or_like('model', $data['keyword']);
        $this->db->or_like('computer_name', $data['keyword']);
        $this->db->or_like('mac_address', $data['keyword']);
        $this->db->or_like('ip_address', $data['keyword']);
        $this->db->or_like('osversion', $data['keyword']);

        $this->db->from('ot_asset');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 9999999999999999;


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
        $data['otasset'] = $this->monitoring->getOtAsset($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/otasset', $data);
        $this->load->view('templatesAdmin/footer');
    }
    public function export_csv()
    {
        $data['title'] = "Data List OT Asset";
        $data['itotasset'] = $this->Monitoring_model->getAllOtAsset();
        $this->load->view('admin/exportOtAsset', $data);
    }
    public function tambahData()
    {
        $data['title'] = "Add Data OT Asset";
        $data['cbu'] = $this->Monitoring_model->get_data('cbu')->result();
        $data['plantcode'] = $this->Monitoring_model->get_data('plantcode')->result();
        $data['location'] = $this->Monitoring_model->get_data('area_location')->result();
        $data['osversion'] = $this->Monitoring_model->get_data('osversion')->result();
        $data['modelasset'] = $this->Monitoring_model->get_data('model_asset')->result();
        $data['assetdescription'] = $this->Monitoring_model->get_data('assetdescription')->result();

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
            $model              = $this->input->post('model');
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
            $location           = $this->input->post('location');
            $photo           = $this->input->post('photo');
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
            $osversion         = $this->input->post('osversion');
            $latitude         = $this->input->post('latitude');
            $longitude         = $this->input->post('longitude');

            $data = array(
                'it'                => $it,
                'ot'                => $ot,
                'plant_code'        => $plant_code,
                'cbu'               => $cbu,
                'cost_ctr'          => $cost_ctr,
                'asset_number'      => $asset_number,
                'asset_description' => $asset_description,
                'serial_number'     => $serial_number,
                'model'              => $model,
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
                'location'          => $location,
                'photo'          => $photo,
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
                'osversion'        => $osversion,
                'latitude'        => $latitude,
                'longitude'        => $longitude,



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
        $data['location'] = $this->Monitoring_model->get_data('area_location')->result();
        $data['otasset'] = $this->db->query("SELECT * FROM ot_asset WHERE id='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['cbu'] = $this->Monitoring_model->get_data('cbu')->result();
        $data['plantcode'] = $this->Monitoring_model->get_data('plantcode')->result();
        $data['osversion'] = $this->Monitoring_model->get_data('osversion')->result();
        $data['modelasset'] = $this->Monitoring_model->get_data('model_asset')->result();
        $data['assetdescription'] = $this->Monitoring_model->get_data('assetdescription')->result();

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
            $model               = $this->input->post('model');
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
            $location           = $this->input->post('location');
            $photo           = $this->input->post('photo');
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
            $osversion         = $this->input->post('osversion');
            $latitude         = $this->input->post('latitude');
            $longitude         = $this->input->post('longitude');

            $data = array(
                'it'                => $it,
                'ot'                => $ot,
                'plant_code'        => $plant_code,
                'cbu'               => $cbu,
                'cost_ctr'          => $cost_ctr,
                'asset_number'      => $asset_number,
                'asset_description' => $asset_description,
                'serial_number'     => $serial_number,
                'model'              => $model,
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
                'location'          => $location,
                'photo'          => $photo,
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
                'osversion'        => $osversion,
                'latitude'        => $latitude,
                'longitude'        => $longitude,


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
