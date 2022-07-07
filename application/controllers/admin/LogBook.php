<?php

class LogBook extends CI_Controller
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
        $data['title'] = "Log Book IT Equipment";

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
        $config['base_url'] = site_url('admin/logbook/index');
        $this->db->like('name', $data['keyword']);
        $this->db->or_like('department', $data['keyword']);
        $this->db->from('logbook');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
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
        $data['logbook'] = $this->monitoring->getLogBook($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/logbook', $data);
        $this->load->view('templatesAdmin/footer');
    }
    public function tambahData()
    {
        $data['title'] = "Tambah Log Book IT Equipment";
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formTambahLogBook', $data);
        $this->load->view('templatesAdmin/footer');
    }
    public function tambahDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        } else {
            $id             = $this->input->post('id');
            $name    = $this->input->post('name');
            $department      = $this->input->post('department');
            $equipment     = $this->input->post('equipment');
            $asset_number       = $this->input->post('asset_number');
            $serial_number         = $this->input->post('serial_number');
            $ticket_show          = $this->input->post('ticket_show');
            $description       = $this->input->post('description');
            $date         = $this->input->post('date');
            $return          = $this->input->post('return');
            $signature          = $this->input->post('signature');

            $data = array(
                'name'   => $name,
                'department'     => $department,
                'equipment'    => $equipment,
                'asset_number'      => $asset_number,
                'serial_number'        => $serial_number,
                'ticket_show'         => $ticket_show,
                'description'    => $description,
                'date'      => $date,
                'return'        => $return,
                'signature'         => $signature,
            );

            $this->Monitoring_model->insert_data($data, 'logbook');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan!</strong>
            </div>');
            redirect('admin/logbook');
        }
    }

    public function updateData($id)
    {
        $data['logbook'] = $this->db->query("SELECT * FROM logbook WHERE id='$id'")->result(); //result berfungsi untuk menggenerate/menampung/menampilkan query(data)
        $data['title'] = "Update Log Book IT Equipment";
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/formUpdateLogBook', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            redirect('admin/logbook');
        } else {
            $id             = $this->input->post('id');
            $name    = $this->input->post('name');
            $department      = $this->input->post('department');
            $equipment     = $this->input->post('equipment');
            $asset_number       = $this->input->post('asset_number');
            $serial_number         = $this->input->post('serial_number');
            $ticket_show          = $this->input->post('ticket_show');
            $description       = $this->input->post('description');
            $date         = $this->input->post('date');
            $return          = $this->input->post('return');
            $signature          = $this->input->post('signature');

            $data = array(
                'name'   => $name,
                'department'     => $department,
                'equipment'    => $equipment,
                'asset_number'      => $asset_number,
                'serial_number'        => $serial_number,
                'ticket_show'         => $ticket_show,
                'description'    => $description,
                'date'      => $date,
                'return'        => $return,
                'signature'         => $signature,


            );
            $where = array(
                'id' => $id
            );

            $this->Monitoring_model->update_data('logbook', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong></div>');
            redirect('admin/logbook');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('department', 'Department', 'required');
        $this->form_validation->set_rules('equipment', 'Equipment', 'required');
        $this->form_validation->set_rules('asset_number', 'Asset Number', 'required');
        $this->form_validation->set_rules('serial_number', 'Serial Number', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
    }

    public function deleteData($id)
    {
        $where = array('id' => $id);
        $this->Monitoring_model->delete_data($where, 'logbook');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Berhasil Dihapus!</strong></div>');
        redirect('admin/logbook');
    }
}
